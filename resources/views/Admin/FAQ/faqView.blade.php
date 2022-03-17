@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">About view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-12">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('admin.faqAdd') }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add FAQ</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Question</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Answer</th>

                    </tr>

                  </thead>
                    <tbody>
                    @foreach($faq as $item)
                      <tr>
                        <td>{{$item["Question"]}}</td>
                        <td>{!! $item["Answer"]  !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
