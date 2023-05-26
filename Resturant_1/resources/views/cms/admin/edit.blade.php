@extends('cms.parent')

@section('title' , 'Admin')

@section('main_title' , 'Update Admin')

@section('sub_title' , 'Update_Admin')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Data Of Admin</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">




                {{-- <div class="row">
                    <div class="form-group col-md-6">
                      <label>Roles</label>
                      <select class="form-control select2" id="role_id" name="role_id" style="width: 100%;">
                        <option selected value="{{$roles->id}}">{{ $roles->name }}</option>
                      @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                      @endforeach
                      </select>
                    </div>
                  </div> --}}


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Admin First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ $admins->user->first_name }}" placeholder="Enter Admin First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Admin Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ $admins->user->last_name }}" placeholder="Enter Admin Last Name">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email"  value="{{ $admins->email}}" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" disabled  class="form-control" id="password" name="password"
                            placeholder="Enter Password">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile"
                        value="{{ $admins->user->mobile }}" placeholder="Enter Admin Mobile">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                        value="{{ $admins->user->address }}"  placeholder="Enter Admin Addess">
                    </div>
                </div>



                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="DOB">Date Of Birth</label>
                        <input type="date" value="{{ $admins->user->DOB }}" class="form-control" id="DOB" name="DOB" placeholder="">
                    </div>



                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="">
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performUpdate({{ $admins->id }})" class="btn btn-primary">Update</button>
                    <a href="{{ route('admins.index') }}" type="button" class="btn btn-info">Return Back</a>
                </div>
        </form>
        <!-- form end -->
    </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
    let formData = new FormData();
    formData.append('first_name',document.getElementById('first_name').value);
    formData.append('last_name',document.getElementById('last_name').value);
    formData.append('email',document.getElementById('email').value);
    // formData.append('password',document.getElementById('password').value);
    formData.append('mobile',document.getElementById('mobile').value);
    formData.append('address',document.getElementById('address').value);
    formData.append('DOB',document.getElementById('DOB').value);
    formData.append('image',document.getElementById('image').files[0]);
    // formData.append('role_id',document.getElementById('role_id').value);

    storeRoute('/cms/admin/update-admins/'+id , formData)
  }

</script>
@endsection
