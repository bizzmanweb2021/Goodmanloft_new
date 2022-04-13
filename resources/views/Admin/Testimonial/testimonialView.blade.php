@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Testimonial view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-12">
                    <a class="btn bg-gradient-dark mb-0" href="{{route('admin.testimonialCreate')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Testimonial</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>

                    </tr>

                  </thead>
                    <tbody>
                      @foreach(App\Models\Testimonial::all() as $test)
                      <tr>
                        <td><a href="{{ route('admin.edit.testimonial',$test->id) }}"><i class="fa fa-edit"></i></a></td>
                        <td>{{ $test->id }}</td>
                        <td>{{$test->name}}</td>
                        <td>{{$test->review}}</td>

                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
