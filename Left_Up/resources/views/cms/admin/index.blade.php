@extends('cms.parent')

@section('title' , 'الأدمن')

@section('page title' , '')

@section('active title' , 'عرض أدمن')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات الأدمن</h3>
                        <a href="{{ route('admins.create') }}" type="button" class="btn btn-info">إضافة أدمن جديد</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>الاسم</th>
                                    <th>اسم المستخدم</th>
                                    <th>رقم الهاتف</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ ($admin->first_name . ' ' . $admin->last_name ) ?? "" }}</td>
                                    <td>{{ $admin->username  }}</td>
                                    <td>{{ $admin->mobile ?? "" }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('admins.edit' , $admin->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $admin->id }} , this)">
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
                {{ $admins->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/admins/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
