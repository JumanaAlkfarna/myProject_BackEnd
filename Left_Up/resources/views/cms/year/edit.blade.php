@extends('cms.parent')

@section('title' , 'السنة')

@section('page title' , '')

@section('active title' , 'تعديل سنة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">تعديل سنة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="year">السنة</label>
                        <input type="text" class="form-control" id="year" name="year"
                        value="{{ $years->year }}"  placeholder="أدخل السنة">
                    </div>

                </div>




                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performUpdate({{ $years->id }})" class="btn btn-primary">تعديل</button>
                    <a href="{{ route('years.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('year',document.getElementById('year').value);
    storeRoute('/cms/admin/update-years/'+id , formData)
  }

</script>
@endsection
