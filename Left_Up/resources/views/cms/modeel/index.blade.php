@extends('cms.parent')

@section('title' , 'الموديل')

@section('page title' , '')

@section('active title' , 'إضافة موديل')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات الموديلات</h3>
                        <a href="{{ route('modeels.create') }}" type="button" class="btn btn-info">إضافة موديل جديدة</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th> الاسم بالعربي</th>
                                    <th> الاسم بالانجليزي</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($modeels as $modeel)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $modeel->id }}</td>
                                    <td>{{ $modeel->nameAr}}</td>
                                    <td>{{ $modeel->nameEn }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('modeels.edit' , $modeel->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $modeel->id }} , this)">
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
                {{ $modeels->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/modeels/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
