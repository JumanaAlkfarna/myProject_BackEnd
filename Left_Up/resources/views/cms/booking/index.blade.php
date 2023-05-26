@extends('cms.parent')

@section('title' , 'الحجز')

@section('page title' , '')

@section('active title' , 'عرض الحجوزات')


@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            {{-- <a href="{{ route('bookings.create') }}" type="button" class="btn btn-secondary">Create New Booking</a> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>الرقم</th>
                <th>التاريخ</th>
                <th>الوقت</th>
                <th>الموقع</th>
                <th>رقم المستخدم</th>
                <th>نوع السيارة</th>
                <th>الحالة</th>

                <th>الاعدادت</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking )
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ ($booking->time->available_time . '  '. $booking->time->periodAr) ?? ""}}</td>
                    <td>{{ ($booking->locationAr . $booking->locationEn)  }}</td>
                    <td>{{ $booking->user->mobile }}</td>
                    <td>{{ $booking->car->id }}</td>
                    <td>{{ $booking->status }}</td>


                    <td>
                        <div class="btn-group">
                            <a href="{{ route('bookings.edit' , $booking->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>

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
      {{ $bookings->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/bookings/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


