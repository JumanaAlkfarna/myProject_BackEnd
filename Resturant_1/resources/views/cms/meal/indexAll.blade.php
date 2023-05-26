@extends('cms.parent')

@section('title' , ' Meal')

@section('main-title' , 'Index Meal')

@section('sub-title' , 'index meal')

@section('styles')

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('meal-bin') }}" type="button" class="btn btn-warning"> Go to Recycle Bin</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>Meal Number</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Setting</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($meals as $meal )
                    <tr>
                        <td>{{ $meal->meal_number }}</td>
                        <td>
                            <img class="img-circle img-bordered-sm" src="{{asset('storage/images/meal/'.$meal->image)}}" width="60" height="60" alt="User Image">
                         </td>
                        <td>{{ $meal->name }}</td>
                        <td>{{ $meal->price }}</td>
                        <td>{{ $meal->description }}</td>

                        <td>
                            <div class="btn-group">
                                <a href="{{ route('meals.edit' , $meal->id ) }}" type="button" class="btn btn-info">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" onclick="performDestroy({{ $meal->id }} , this)" class="btn btn-danger">
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
            {{ $meals->links()}}
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/meals/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection
