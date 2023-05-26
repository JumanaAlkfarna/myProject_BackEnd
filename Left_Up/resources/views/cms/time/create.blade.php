@extends('cms.parent')

@section('title' , 'أوقات العمل')

@section('page title' , '')

@section('active title' , 'إضافة ساعات عمل جديدة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">إضافة ساعات عمل جديدة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
   <div class="row" >

                <div class="col-md-6 form-group">
                    <label for="available_time">أوقات العمل</label>
                    <input type="text" class="form-control" name="available_time" id="available_time">
                </div>


                <div class="col-md-6 form-group">
                    <label for="periodAr"> الفترة بالعربي</label>
                    <input type="text" class="form-control"
                     name="periodAr" id="periodAr" placeholder="صباحاً | مساءً">
                </div>


            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="periodEn"> الفترة بالانجليزي</label>
                    <input type="text" class="form-control"
                   name="periodEn" id="periodEn" placeholder="am | pm">
                </div>
            </div>









                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                    <a href="{{ route('times.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
                </div>
        </form>
        <!-- form end -->
    </div>
</section>
@endsection


@section('scripts')
<script>
    function performStore(){
    let formData = new FormData();
    formData.append('available_time',document.getElementById('available_time').value);
    formData.append('periodAr',document.getElementById('periodAr').value);
    formData.append('periodEn',document.getElementById('periodEn').value);
    store('/cms/admin/times' , formData)
  }

</script>
@endsection
