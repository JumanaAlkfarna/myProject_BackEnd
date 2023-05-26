@extends('cms.parent')

@section('title' , 'المستخدمين')

@section('page title' , '')

@section('active title' , 'عرض المستخدمين')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات المستخدمين</h3>
                        {{-- <a href="{{ route('users.create') }}" type="button" class="btn btn-info">إضافة أدمن جديد</a> --}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>الاسم</th>
                                    <th>رقم الهاتف</th>
                                    <th>الايميل</th>

                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ ($user->first_name . ' ' . $user->last_name ) ?? "" }}</td>
                                    <td>{{ $user->mobile ?? "" }}</td>
                                    <td>{{ $user->email }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('users.edit' , $user->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $user->id }} , this)">
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/users/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
