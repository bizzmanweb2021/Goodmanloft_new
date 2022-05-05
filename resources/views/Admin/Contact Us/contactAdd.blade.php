@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Contact Details</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.contactStore') }}" id="Category_form" enctype="multipart/form-data">
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
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Address</label>
                <textarea type="text" name="address" class="form-control" style="heigth:100px; width:100%;"></textarea>
            </div><br>
            <div class="col-md-6">
                <label class="text-truncate  text-body ms-3 w-80 ">Phone_No</label>
                <input type="number" name="phone_no" class="form-control">

            </div><br>
            <div class="col-md-6">
              <label class="text-truncate  text-body ms-3 w-80 ">Email_ID</label>
              <input type="email_id" name="email_id" class="form-control" id="email">
            </div>
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
