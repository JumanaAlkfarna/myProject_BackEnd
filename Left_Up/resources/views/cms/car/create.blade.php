@extends('cms.parent')

@section('title', 'السيارات')
@section('page title', 'إنشاء سيارة')
@section('active title', '')

@section('styles')

@endsection


@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">إنشاء بيانات سيارة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">


                <div class="row">

                    <div class="form-group col-md-6">
                        <label>ماركة السيارة</label>
                        <select class="form-control select2" id="brand_id" name="brand_id" style="width: 100%;">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->nameAr }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group col-md-6">
                        <label>موديل السيارة</label>
                        <select class="form-control select2" id="modeel_id" name="modeel_id" style="width: 100%;">
                            @foreach ($modeels as $modeel)
                                <option value="{{ $modeel->id }}">{{ $modeel->nameAr }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>


            <div class="row">
                <div class="form-group col-md-6">
                    <label>ماركة السيارة</label>
                    <select class="form-control select2" id="brand_id" name="brand_id" style="width: 100%;">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->nameEn }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group col-md-6">
                    <label>موديل السيارة</label>
                    <select class="form-control select2" id="modeel_id" name="modeel_id" style="width: 100%;">
                        @foreach ($modeels as $modeel)
                            <option value="{{ $modeel->id }}">{{ $modeel->nameEn }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label>سنة إنتاج السيارة</label>
                        <select class="form-control select2" id="year_id" name="year_id" style="width: 100%;">
                            @foreach ($years as $year)
                                <option value="{{ $year->id }}">{{ $year->year }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group col-md-6">
                        <label>اسطوانات السيارة</label>
                        <select class="form-control select2" id="cylinder_id" name="cylinder_id" style="width: 100%;">
                            @foreach ($cylinders as $cylinder)
                                <option value="{{ $cylinder->id }}">{{ $cylinder->num }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>








            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                <a href="{{ route('cars.index') }}" type="button" class="btn btn-info">العودة للخلف</a>

            </div>
        </form>
    </div>
@endsection


@section('scripts')

    <script>
        function performStore() {

            let formData = new FormData();

            formData.append('brand_id', document.getElementById('brand_id').value);
            formData.append('year_id', document.getElementById('year_id').value);
            formData.append('modeel_id', document.getElementById('modeel_id').value);
            formData.append('cylinder_id', document.getElementById('cylinder_id').value);




            store('/cms/admin/cars', formData);
        }
    </script>

@endsection
