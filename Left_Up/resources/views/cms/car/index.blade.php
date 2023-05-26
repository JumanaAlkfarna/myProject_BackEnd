@extends('cms.parent')

@section('title' , 'السيارات')

@section('page title' , ' عرض السيارات')

@section('active title' , 'عرض السيارات')

@section('styles')

@endsection

@section('content')
{{-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('cars.create') }}" type="button" class="btn btn-info"> إضافة سيارة</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>الرقم</th>
                        <th> Ar الماركة</th>
                        <th> En  الماركة</th>
                        <th> Ar الموديل</th>
                        <th> En  الموديل</th>
                        <th>السنة</th>
                        <th>الاسطوانات</th>
                        <th>الاعدادات</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($cars as $car )
                    <tr>

                         <td>{{ $car->id }}</td>
                         <td>{{ $car->brand->nameAr }}</td>
                         <td>{{ $car->brand->nameEn }}</td>
                         <td>{{ $car->modeel->nameAr }}</td>
                         <td>{{ $car->modeel->nameEn }}</td>
                         <td>{{ $car->year->year }}</td>
                         <td>{{ $car->cylinder->num }}</td>

                        <td>
                            <div class="btn-group">

                                <button type="button" onclick="performDestroy({{ $car->id }} , this)" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
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
            {{ $cars->links()}}
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/cars/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection
