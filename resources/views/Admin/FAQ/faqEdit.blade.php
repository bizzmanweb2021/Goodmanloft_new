@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit FAQ</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">

      <div class="card-body p-3">
        <form method="POST" action="{{ route('admin.update.Faq',$faq[0]->id) }}">
            @csrf
            <div class="row ">
                    <div class="col-md-6">
                        <label class="text-truncate  text-body ms-3 w-80 ">Question</label>
                        <input type="text" name="Question" class="form-control" value="{{ $faq[0]->Question }}">
                    </div><br>
            </div><br>
            <div class="row  mb-4">
                <div class="col-md-12">
                    <label class="text-truncate  text-body ms-3 w-80 ">Answer</label>
                    <textarea type="text" name="Answer" style="heigth:100px; width:100%;" class="form-control">{{ $faq[0]->Answer }}</textarea>
                </div><br>
        </div><br>
            <div class="col-md-4">
              <button type="add" class="btn btn-info btn-sm " style="background-color: #bf9f6c" name="submit" value="Save">Save</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

