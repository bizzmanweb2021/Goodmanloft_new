@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit Testimonial</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.update.Testimonial',$test[0]->id ) }}"  enctype="multipart/form-data">
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
            <label class="text-truncate  text-body ms-3 w-80 mb-0">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $test[0]->name }}">
          </div><br>
        </div>
          <div class="row mb-3">
            <div class="col-md-12">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Review</label>
                <textarea type="text" name="review" class="form-control">{{ $test[0]->review }}</textarea>
            </div><br>
        </div>

            <div class="col-md-4">
              <button type="add" class="btn btn-info btn-sm" style="background-color: #bf9f6c" name="submit" value="Addto">ADDto</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>




@endsection
