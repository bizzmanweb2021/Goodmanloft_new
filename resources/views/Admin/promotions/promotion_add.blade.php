@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Promotion view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
    <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                </div>
                <div class="col-6 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{route('promotions.store')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Promotion</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
