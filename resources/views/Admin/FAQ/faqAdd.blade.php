@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Category</h6>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

@endsection
@section('content')

{{-- <div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.faqStore') }}" id="Category_form" enctype="multipart/form-data">
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
            <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 ">Question</label>
                <input type="text" name="question" class="form-control">
            </div><br>
            <div class="col-md-12">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Answer</label>
                <textarea type="text" name="answer" class="form-control" style="heigth:100px; width:100%;"></textarea>
            </div><br>


          </div><br>

            <div class="col-md-4">
              <button type="add" class="btn btn-info btn-sm " style="background-color: #bf9f6c" name="submit" value="Addto">ADD</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.faqStore') }}" id="Category_form" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="text-truncate  text-body ms-3 w-80 ">Question</label>
                                <input type="text" name="question" class="form-control">
                            </div><br>
                            <div class="col-md-12">
                                <label class="text-truncate  text-body ms-3 w-80 mb-0">Answer</label>
                                <textarea type="text" name="answer" class="ckeditor form-control" style="heigth:100px; width:100%;"></textarea>
                            </div><br>
                        </div><br>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@section('javascript')
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection
@endsection
