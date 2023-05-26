@extends('cms.parent')

@section('title' , 'الاسطوانات')

@section('page title' , '')

@section('active title' , 'عرض عدد الاسطوانات')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض الاسطوانات </h3>
                        <a href="{{ route('cylinders.create') }}" type="button" class="btn btn-info">إضافة عدد اسطوانات جديدة</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>  عدد الاسطوانات</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cylinders as $cylinder)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $cylinder->id }}</td>
                                    <td>{{ $cylinder->num}}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('cylinders.edit' , $cylinder->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $cylinder->id }} , this)">
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
                {{ $cylinders->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/cylinders/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
