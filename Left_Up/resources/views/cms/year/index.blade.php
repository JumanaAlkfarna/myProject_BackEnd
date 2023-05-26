@extends('cms.parent')

@section('title' , 'السنة')

@section('page title' , '')

@section('active title' , 'عرض السنوات')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض السنوات </h3>
                        <a href="{{ route('years.create') }}" type="button" class="btn btn-info">إضافة سنة جديدة</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>  السنة</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($years as $year)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $year->id }}</td>
                                    <td>{{ $year->year}}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('years.edit' , $year->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $year->id }} , this)">
                                            <i class="fas fa-trash"></i>
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
                {{ $years->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/years/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
