@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit Contact Us</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">
      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.update.contact',$contact[0]->id)}}">
          @csrf
          <div class="row mb-4">
                <div class="col-md-12">
                <label class="text-truncate  text-body ms-3 w-80 mb-0">Address</label>
                <input type="text" name="Address" class="form-control" id="Address" value="{{ $contact[0]->Address }}">
                </div><br>
                </div><br>
                <div class="row mb-4">
                <div class="col-md-6">
                    <label class="text-truncate  text-body ms-3 w-80 ">Phone_No</label>
                    <input type="number"  name="Phone_No" style="heigth:100px; width:100%;" class="form-control" id="Phone_No" value="{{ $contact[0]->Phone_No }}">
                   </div><br>
        </div><br>
        <div class="row mb-4">
                <div class="col-md-6">
                    <label class="text-truncate  text-body ms-3 w-80 ">Email_Id</label>
                    <input type="email_id" name="Email_Id" style="heigth:100px; width:100%;" class="form-control" id="Email_Id" value="{{ $contact[0]->Email_Id }}">
                </div><br>
        </div><br>
            </div>
          <div class="row mb-3">       
            <div class="row mb-4">
              <div class="col-md-4">
              <button type="submit" class="btn btn-info btn-sm" style="background-color: #bf9f6c">Save</button>
              <!-- <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button> -->
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


