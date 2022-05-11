@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Upload Products</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">
      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.import')}}" id="Product_form" enctype="multipart/form-data">
          @csrf
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Choose File</label>
                    <input type="file" name="file" class="form-control" style="width:100%">
                   
                </div><br>&nbsp;&nbsp;
</div>
                <button type="submit" class="btn btn-primary">Submit</button>
            
         </form>
      </div>
    </div>
  </div>
</div>
@endsection
