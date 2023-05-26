@extends('cms.parent')

@section('title', 'أوقات العمل')

@section('page title', '')

@section('active title', 'عرض أوقات العمل ')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid px-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="">عرض أوقات العمل</h3>
                            <a href="{{ route('times.create') }}" type="button" class="btn btn-info">إضافة وقت عمل جديد </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">



                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>أوقات العمل</th>
                                        <th>الفترة بالعربي</th>
                                        <th>الفترة بالانجليزي</th>
                                        <th>الإعدادات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($times as $time)
                                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                        <tr>
                                            <td>{{ $time->id }}</td>

                                            <td>{{ $time->available_time }}</td>
                                            <td>{{ $time->periodAr }}</td>
                                            <td>{{ $time->periodEn }}</td>

                                            <td>
                                                <div class="btn group">
                                                    {{-- <a href="{{ route('times.edit', $time->id) }}" type="button"
                                                        class="btn btn-info">
                                                        <i class="fas fa-edit"> </i>
                                                    </a> --}}
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="performDestroy({{ $time->id }} , this)">
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
                    {{ $times->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        function performDestroy(id, reference) {
            let url = "/cms/admin/times/" + id;
            confirmDestroy(url, reference);
        }
    </script>
@endsection
