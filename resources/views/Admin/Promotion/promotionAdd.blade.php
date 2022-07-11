@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add SubCategory</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">
      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.promotionStore')}}" id="SubCategory_form" enctype="multipart/form-data">
          @csrf
          <div class="row mb-4">
                <div class="col-md-12">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Form_Description</label>
                <input type="text" name="form_description" class="form-control" id="form_description">
                </div><br>
            </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload Promotion/Banner Image</label>
              <input type="file" name="banner" class="form-control" id="banner">
            </div>
            <!-- <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Remarks</label>
                <input type="text" name="remarks" class="form-control" id="remarks">
                </div><br>
            <div class="col-md-6"> -->
              <img src="" class="img-responsive" id="show_bimage" style="display:none;" height="100px" width="100px">
            </div>
            
            @error('SubCategory_Image')
            <span style="color:red">{{ $message }}</span>
            @enderror
            </div><br>
            
        </div>
            <div class="col-md-4">
              <button type="add" class="btn btn-info btn-sm" style="background-color: #bf9f6c" name="submit" value="Addto">ADD</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
