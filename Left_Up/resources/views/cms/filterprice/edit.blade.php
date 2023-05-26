@extends('cms.parent')

@section('title' , 'أسعار الفلاتر')

@section('page title' , '')

@section('active title' , 'تعديل أسعار الفلاتر')


@section('styles')

@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">تعديل أسعار الفلاتر</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nameAr">السعر</label>
                    <input type="text" class="form-control" id="nameAr" name="nameAr"
                    value="{{ $filterprices->price }}"  placeholder="أدخل السعر">
                </div>


            </div>






      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$filterprices->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('filterprices.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();


formData.append('price', document.getElementById('price').value);


storeRoute('/cms/admin/update-filterprices/' +id , formData);
}

</script>
@endsection
