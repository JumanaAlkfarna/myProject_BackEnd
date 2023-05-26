@extends('cms.parent')

@section('title' , 'الزيت')

@section('page title' , '')

@section('active title' , 'إضافة زيت')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات الزيوت</h3>
                        <a href="{{ route('oils.create') }}" type="button" class="btn btn-info">إضافة زيت جديدة</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>الصورة</th>
                                    <th> الاسم بالعربي</th>
                                    <th> الاسم بالانجليزي</th>
                                    <th>السعر</th>
                                    <th>التصنيف</th>

                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($oils as $oil)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $oil->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                        src="{{ asset('storage/images/oil/'.$oil->image) }}"
                                        width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>{{ $oil->nameAr}}</td>
                                    <td>{{ $oil->nameEn }}</td>
                                    <td>{{ $oil->price }}</td>
                                    <td>{{ $oil->status }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('oils.edit' , $oil->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $oil->id }} , this)">
                                            <i class="fas fa-trash"></i>
                                          </button>
                                          </div>
                                      </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                {{ $oils->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/oils/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
