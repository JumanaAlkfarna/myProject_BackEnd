@extends('cms.parent')

@section('title' , 'الالفلتر')

@section('page title' , '')

@section('active title' , 'إضافة الفلتر')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات الفلاتر</h3>
                        <a href="{{ route('filters.create') }}" type="button" class="btn btn-info">إضافة فلتر جديدة</a>

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
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($filters as $filter)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $filter->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/filter/'.$filter->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>{{ $filter->nameAr}}</td>
                                    <td>{{ $filter->nameEn }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('filters.edit' , $filter->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $filter->id }} , this)">
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
                {{ $filters->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/filters/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
