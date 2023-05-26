@extends('cms.parent')

@section('title' , 'الماركة')

@section('page title' , '')

@section('active title' , 'إضافة ماركة')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات الماركات</h3>
                        <a href="{{ route('brands.create') }}" type="button" class="btn btn-info">إضافة ماركة جديدة</a>

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
                                @foreach($brands as $brand)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->nameAr}}</td>
                                    <td>{{ $brand->nameEn }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('brands.edit' , $brand->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $brand->id }} , this)">
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
                {{ $brands->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/brands/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
