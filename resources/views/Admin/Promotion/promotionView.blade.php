@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Promotion/Banner view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-12">
                    <a class="btn bg-gradient-dark mb-0" href="{{route('admin.promotionAdd')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Promotion/Banner</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Promotion/Banner</th>
                    </tr>

                  </thead>
                  <tbody>
                      @foreach($Promotions as $item)
                      <tr>
                          <td>{{ $item["id"] }}</td>
                        <td><img src="{{ url('/' . $item["banner"] )}}" width=200px; height=80px; /> </td>
                        </tr>
                      @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
