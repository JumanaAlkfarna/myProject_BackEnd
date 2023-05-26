@extends('cms.parent')

@section('title' , 'أوقات العمل')

@section('page title' , '')

@section('active title' , 'تعديل الوقت')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">تعديل الوقت</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="available_time">أوقات العمل</label>
                        <input type="text" class="form-control"
                        value="{{ $times->available_time }}" name="available_time" id="available_time">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="periodAr"> الفترة بالعربي</label>
                        <input type="text" class="form-control"
                        value="{{ $times->periodAr }}" name="periodAr" id="periodAr">
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="periodEn"> الفترة بالانجليزي</label>
                        <input type="text" class="form-control"
                        value="{{ $times->periodEn }}" name="periodEn" id="periodEn">
                    </div>
                </div>





                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performUpdate({{ $times->id }})" class="btn btn-primary">تعديل</button>
                    <a href="{{ route('times.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('available_time',document.getElementById('available_time').value);
    formData.append('periodAr',document.getElementById('periodAr').value);
    formData.append('periodEn',document.getElementById('periodEn').value);

    storeRoute('/cms/admin/update-times/'+id , formData)
  }

</script>
@endsection
