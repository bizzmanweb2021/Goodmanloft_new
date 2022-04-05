@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Products</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">
      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.image.resize.pro')}}" id="Product_form" enctype="multipart/form-data">
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
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Name</label>
                    <input type="text" name="Product_name" class="form-control" style="width:100%">
                    @error('Product_name')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div><br>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                  <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Description</label>
                  <textarea type="text" name="Product_Description" class="form-control" style="heigth:100px; width:100%;"></textarea>
                </div><br>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Dimension</label>
                    <input type="text" name="Product_Dimension" class="form-control" style="width:100%" placeholder="L x B x H">
                </div><br>
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Weight</label>
                    <input type="text" name="Weight" class="form-control" style="width:100%">
                </div><br>
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Size</label>
                    <select type="Product_Size" name="Product_Size" id="Product_Size" class="form-control" style="width:100%">
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    </select>
                </div><br>
            </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Quantity</label>
                        <input type="text" name="Quantity" class="form-control" style="width:100%">
                    </div><br>
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Product on Sale/Not Sale</label>
                        <select type="sale" name="sale" id="sale" class="form-control" style="width:100%">
                        <option value="Sale">On Sale</option>
                        <option value="Not Sale">Not On Sale</option>
                        </select>
                    </div><br>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Price</label>
                        <input type="text" name="Price" class="form-control" style="width:100%" placeholder="In $">
                    </div><br>
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Category Name</label>
                        <div class="col-75">
                            <select id="Category_Name" name="Category_Name" class="form-control" style="width:95%">
                            <option value="">--Select--</option>
                                @foreach($cat as $item)
                            <option value="{{ $item->id }}">{{ $item->Category_Name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div><br>
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Product SubCategory Name</label>
                        <div class="col-75">
                            <select id="SubCategory_name" name="SubCategory_name" class="form-control" style="width:95%">
                            </select>
                        </div>
                    </div><br>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Stock Availability</label>
                        <select type="stock_availability" name="stock_availability" id="stock_availability" class="form-control" style="width:100%">
                        <option value="Unavailable">Unavailable</option>
                        <option value="Available">Available</option>
                        </select>
                    </div><br>
                    <div class="col-md-4">
                        <div class="upload">
                            <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload Product Image</label>
                            <input type="file" name="Product_image" class="form-control" id="Product_image">
                        </div>
                    </div>
                    @error('Product_image')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <div class="col-md-4">
                        <div class="upload">
                            <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload Gallery Photo</label>
                            <input type="file" class="form-control" id="gallery_photo" name="gallery_photo[]" multiple>
                        </div>
                    </div>
                    @error('gallery_photo')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>
            <div class="row mb-4">
              <div class="col-md-4">
              <button type="submit" class="btn btn-info btn-sm" style="background-color: #bf9f6c">ADDto</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $('#Category_Name').change(function(){
        $.ajax({
            url: "{{ route('admin.getSubCategoryById') }}",
            type: 'GET',
            dataType: 'json',
            data: {
                id: $(this).val(),
            },
            success: function(data){
                var len = data.length;
                $('#SubCategory_name').empty();
                for (var i = 0; i<len; i++)
                {
                   $('#SubCategory_name').append('<option value="'+data[i]['id']+'">'+data[i]['SubCategory_Name']+'</option>')
                }
            }

        })
    });
</script>



@endsection
