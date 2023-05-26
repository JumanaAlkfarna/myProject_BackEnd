@extends('cms.parent')

@section('title' , 'الاسطوانات')

@section('page title' , '')

@section('active title' , 'تعديل عدد الاسطوانات')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">تعديل عدد الاسطوانات</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="num">عدد الاسطوانات</label>
                        <input type="number" class="form-control" id="num" name="num"
                        value="{{ $cylinders->num }}" placeholder="أدخل العدد">
                    </div>

                </div>
       




                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performUpdate({{ $cylinders->id }})" class="btn btn-primary">تعديل</button>
                    <a href="{{ route('cylinders.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('num',document.getElementById('num').value);
    storeRoute('/cms/admin/update-cylinders/'+id , formData)
  }

</script>
@endsection
