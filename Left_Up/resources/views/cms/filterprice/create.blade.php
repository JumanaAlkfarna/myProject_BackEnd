@extends('cms.parent')

@section('title', 'booking')
@section('main_title', 'Create booking')
@section('sub_title', 'create booking')

@section('styles')

@endsection


@section('content')
    <div class="card card-primary">
        <div class="card-header text-left">
            <h3 class="card-title ">إنشاء سعر فلتر</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="price"> السعر</label>
                        <input type="text" class="form-control" name="price" id="price"
                            placeholder="أدخل السعر">
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="filter_id">اسم الفلتر</label>
                            <select class="form-control select2" id="filter_id" name="filter_id" style="width: 100%;">
                                @foreach ($filters as $filter)
                                    <option value="{{ $filter->id }}">{{ $filter->nameAr }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="car_id">نوع السيارة</label>
                            <select class="form-control select2" id="car_id" name="car_id" style="width: 100%;">
                                @foreach ($cars as $car)
                                    <option value="{{ $car->id }}">{{ ($car->brand->nameAr . ' - ' . $car->modeel->nameAr . ' - '. $car->year->year .' - '.$car->cylinder->num) ?? "" }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>








            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                <a href="{{ route('filterprices.index') }}" type="button" class="btn btn-info">العودة للخلف</a>

            </div>
        </form>
    </div>
@endsection


@section('scripts')

    <script>
        function performStore() {

            let formData = new FormData();
            formData.append('price', document.getElementById('price').value);
            formData.append('car_id', document.getElementById('car_id').value);
            formData.append('filter_id', document.getElementById('filter_id').value);

            store('/cms/admin/filterprices', formData);
        }
    </script>

@endsection
