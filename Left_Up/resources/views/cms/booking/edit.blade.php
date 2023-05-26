@extends('cms.parent')

@section('title' , 'الحجز')

@section('page title' , '')

@section('active title' , 'تعديل الحجز')


@section('styles')

@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">تعديل الحجز</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">


            <div class="row">

                <div class="form-group col-md-6">
                       <label for="status"> الحالة</label>
                       <select class="form-select form-select-sm" name="status" style="width: 100%;"
                             id="status" aria-label=".form-select-sm example">
                             <option selected> {{ $bookings->status }} </option>
                            <option value="finish">finish </option>
                         </select>
                </div>
            </div>






      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$bookings->id}})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('bookings.index') }}" type="button" class="btn btn-secondary">حذف</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();


formData.append('status',document.getElementById('status').value);


storeRoute('/cms/admin/update-bookings/' +id , formData);
}

</script>
@endsection
