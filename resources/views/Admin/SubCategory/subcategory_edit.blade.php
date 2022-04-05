@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit SubCategory</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.update.Subcate',$sub[0]->id) }}">
            @csrf
            <div class="row ">
                    <div class="col-md-6">
                        <label class="text-truncate  text-body ms-3 w-80 ">Product SubCategory Name</label>
                        <input type="text" name="SubCategory_Name" class="form-control" value="{{ $sub[0]->SubCategory_Name }}">
                    </div><br>
            </div><br>
            <div class="col-md-4">
              <button type="add" class="btn btn-info btn-sm " style="background-color: #bf9f6c" name="submit" value="Addto">Save</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

