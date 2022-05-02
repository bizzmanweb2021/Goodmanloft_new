@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Category</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.aboutStore') }}" id="Category_form" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="row ">
            <div class="col-md-12">
                <label class="text-truncate  text-body ms-3 w-80 mb-0"> Description</label>
                <textarea type="text" name="description" class="form-control" style="heigth:100px; width:100%;"></textarea>
            </div><br>
            <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 ">Title</label>
                <input type="text" name="title" class="form-control">

            </div><br>
            <div class="col-md-6">
              <label class="text-truncate  text-body ms-3 w-80 ">Upload Image</label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="col-md-6">
              <img src="" class="img-responsive" id="show_bimage" style="display:none;" height="100px" width="100px">
            </div>
            @error('image')
            <span style="color:red">{{ $message }}</span>
            @enderror
          </div><br>

            <div class="col-md-4">
              <button type="add" class="btn btn-info btn-sm " style="background-color: #bf9f6c" name="submit" value="Addto">ADD</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
