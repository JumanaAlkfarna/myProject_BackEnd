@extends('cms.parent')

@section('title' , 'الزيت')

@section('page title' , '')

@section('active title' , 'إضافة زيت')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">إضافة زيت</h3>
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

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="price">السعر</label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="أدخل الاسم بالعربي">
                    </div>
                        <div class="form-group col-md-6">
                            <label for="image">الصورة</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="">
                        </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                           <label for="status">التصنيف</label>
                           <select class="form-select form-select-sm" name="status" style="width: 100%;"
                                 id="status" aria-label=".form-select-sm example">
                                 <option selected value="five">five </option>
                                <option value="ten">ten </option>
                             </select>
                    </div>
                </div>








                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                    <a href="{{ route('oils.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('price',document.getElementById('price').value);
    formData.append('status',document.getElementById('status').value);

    formData.append('image',document.getElementById('image').files[0]);

    store('/cms/admin/oils' , formData)
  }

</script>
@endsection
