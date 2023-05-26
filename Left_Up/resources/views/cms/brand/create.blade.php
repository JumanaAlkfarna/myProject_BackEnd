@extends('cms.parent')

@section('title' , 'الماركة')

@section('page title' , '')

@section('active title' , 'إضافة ماركة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">إضافة ماركة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nameAr">الاسم باللغة العربية</label>
                        <input type="text" class="form-control" id="nameAr" name="nameAr"
                            placeholder="أدخل الاسم بالعربي">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nameEn">الاسم باللغة الانجليزية</label>
                        <input type="text" class="form-control" id="nameEn" name="nameEn"
                            placeholder="أدخل الاسم بالانجليزي">
                    </div>
                </div>








                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                    <a href="{{ route('brands.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('nameEn',document.getElementById('nameEn').value);
    formData.append('nameAr',document.getElementById('nameAr').value);
    store('/cms/admin/brands' , formData)
  }

</script>
@endsection
