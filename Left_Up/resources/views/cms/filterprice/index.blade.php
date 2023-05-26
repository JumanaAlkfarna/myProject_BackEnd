@extends('cms.parent')

@section('title' , 'أسعار الفلاتر')

@section('page title' , '')

@section('active title' , 'عرض أسعار الفلاتر')


@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('filterprices.create') }}" type="button" class="btn btn-secondary">إضافة سعر فلاتر جديدة</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>الرقم</th>
                <th>السعر</th>
                <th>رقم السيارة</th>
                <th>اسم الفلتر</th>

                <th>الإعدادت</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($filterprices as $filterprice )
                <tr>
                    <td>{{ $filterprice->id }}</td>
                    <td>{{ $filterprice->price }}</td>
                    <td>{{ $filterprice->car_id }}</td>
                    <td>{{ $filterprice->filter->nameAr }}</td>


                    <td>
                        <div class="btn-group">
                            <a href="{{ route('filterprices.edit' , $filterprice->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" onclick="performDestroy({{ $filterprice->id }} , this)" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                              </button>
                          </div>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      {{ $filterprices->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/filterprices/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


