@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit Contact Us</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.update.contact',$contact[0]->id) }}">
            @csrf
            <div class="row ">
                    <div class="col-md-6">
                        <label class="text-truncate  text-body ms-3 w-80 ">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $contact[0]->Address }}">
                    </div><br>
            </div><br>
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="text-truncate  text-body ms-3 w-80 ">Phone_No</label>
                    <textarea type="number" name="phone_no" style="heigth:100px; width:100%;" class="form-control">{{ $contact[0]->Phone_No }}</textarea>
                </div><br>
        </div><br>
        <div class="row mb-4">
                <div class="col-md-6">
                    <label class="text-truncate  text-body ms-3 w-80 ">Email_Id</label>
                    <textarea type="email_id" name="email_id" style="heigth:100px; width:100%;" class="form-control">{{ $contact[0]->Email_Id }}</textarea>
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

