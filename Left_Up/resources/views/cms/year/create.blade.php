@extends('cms.parent')

@section('title' , 'السنة')

@section('page title' , '')

@section('active title' , 'إضافة سنة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">إضافة سنة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="year">السنة</label>
                        <input type="text" class="form-control" id="year" name="year"
                            placeholder="أدخل السنة">
                    </div>

                </div>








                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                    <a href="{{ route('years.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('year',document.getElementById('year').value);
    store('/cms/admin/years' , formData)
  }

</script>
@endsection
