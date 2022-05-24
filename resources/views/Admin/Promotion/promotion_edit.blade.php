@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit Promotion</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">
      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.update.promo',$promo[0]->id)}}">
          @csrf
          <div class="row mb-4">
                <div class="col-md-12">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Description</label>
                <input type="text" name="form_description" class="form-control" id="form_description" value="{{ $promo[0]->form_description }}">
                </div><br>
            </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload Promotion/Banner Image</label>
              <input type="file" name="banner" class="form-control" id="banner" value="{{ $promo[0]->banner }}">
            </div><br>
            <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Remarks</label>
                <input type="text" name="remarks" class="form-control" id="remarks" value="{{ $promo[0]->remarks}}">
                </div><br>
            </div>
            <div class="row mb-4">
              <div class="col-md-4">
              <button type="submit" class="btn btn-info btn-sm" style="background-color: #bf9f6c">Save</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
