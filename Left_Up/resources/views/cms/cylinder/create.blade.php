@extends('cms.parent')

@section('title' , 'الاسطوانات')

@section('page title' , '')

@section('active title' , 'إضافة عدد الاسطوانات')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">إضافة عدد الاسطوانات</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="num">عدد الاسطوانات</label>
                        <input type="number" class="form-control" id="num" name="num"
                            placeholder="أدخل العدد">
                    </div>

                </div>








                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                    <a href="{{ route('cylinders.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('num',document.getElementById('num').value);
    store('/cms/admin/cylinders' , formData)
  }

</script>
@endsection
