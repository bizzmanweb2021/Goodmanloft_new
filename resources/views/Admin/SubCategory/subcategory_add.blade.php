@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add SubCategory</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.image.resize.sub')}}" id="SubCategory_form" enctype="multipart/form-data">
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
          {{method_field('POST')}}
          <div class="row mb-3">
          <div class="col-md-6">
            <label class="text-truncate  text-body ms-3 w-80 mb-0">Product SubCategory Name</label>
            <input type="text" name="SubCategory_name" class="form-control">
            @error('SubCategory_name')
            <span style="color: red">{{ $message }}</span>
            @enderror
          </div><br>
        </div>
          <div class="row mb-3">
            <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Category Name</label>
                <div class="col-75">
                    <select id="Category_Name" name="Category_Name" class="form-control" style="width:95%">
                    @foreach($cat as $item)
                    <option value="{{ $item->id }}">{{ $item->Category_Name }}</option>
                    @endforeach

                    </select>
                </div>
            </div><br>
            <div class="col-md-6">
              <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload SubCategory Image</label>
              <input type="file" name="SubCategory_Image" class="form-control" id="SubCategory_Image">
            </div>
            <div class="col-md-6">
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
