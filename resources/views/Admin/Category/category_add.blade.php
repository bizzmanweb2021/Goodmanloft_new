@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Category</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.image.resize')}}" id="Category_form" enctype="multipart/form-data">
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
          <div class="row ">
            <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 ">Product Category Name</label>
                <input type="text" name="Category_name" class="form-control">
                @error('Category_name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div><br>
            <div class="col-md-6">
              <label class="text-truncate  text-body ms-3 w-80 ">Upload Category Image</label>
              <input type="file" name="Category_Image" class="form-control" id="Category_Image">
            </div>
            <div class="col-md-6">
              <img src="" class="img-responsive" id="show_bimage" style="display:none;" height="100px" width="100px">
            </div>
            @error('Category_Image')
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

<!-- <script type="text/javascript">
	$(document).ready(function()
  {
    $('#Brand_image').on('change',function(e)
    {
	    e.preventDefault();
	    var reader=new FileReader;
	    reader.onload=function(e)
      {
		    $('#show_bimage').attr("src",e.target.result);
		    $('#show_bimage').show();
	    }
      reader.readAsDataURL(e.target.files['0']);
    })

  });
</script> -->



@endsection
