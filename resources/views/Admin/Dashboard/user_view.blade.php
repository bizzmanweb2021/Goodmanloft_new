@extends('layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">User view</h6>
@endsection
@section('content')


<div class="row pt-5">
        <div class="col-md-10 mt-3 offset-md-1">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">User Information</h6>
            </div>
            <div class="card-body pt-4 p-3">
              
<div class="row">
                  
                  <div class="card col-md-6">

      <ul class="list-group">

                    <h6 class="mb-3 text-sm">{{$User->name}}</h6>
<li class="list-group-item"><span class="mb-2 text-xs">Unique Id: <span class="text-dark font-weight-bold ms-sm-2"><b></span>{{$User->unique_id}}</span></b></li>
                    
<li class="list-group-item"><span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"><b></span>{{$User->email}}</span></b></li>

<li class="list-group-item"><span class="text-xs">Phone: <span class="text-dark ms-sm-2 font-weight-bold"><b></span>+{{$User->phone}}</span></b></li>

<li class="list-group-item"><span class="text-xs">Address: <span class="text-dark ms-sm-2 font-weight-bold"></span><b>{{$User->Address}}</b></span></li>

<li class="list-group-item"><span class="text-xs">Location: <span class="text-dark ms-sm-2 font-weight-bold"></span><b>{{$User->Location}}</b></span></li><br>
</ul>
                  
</div>
<div class="card col-md-6 pt-2">
  <br>
<li class="list-group-item"><span class="text-xs">ZipCode: <span class="text-dark ms-sm-2 font-weight-bold"></span><b>{{$User->ZipCode}}</b></span></li>

<li class="list-group-item"><span class="text-xs">Country: <span class="text-dark ms-sm-2 font-weight-bold"></span><b>
  {{$User->Country}}
</b></span></li>


<li class="list-group-item"><span class="text-xs">Device ID: <span class="text-dark ms-sm-2 font-weight-bold"></span>{{$User->Device_ID}}</span></li>

<li class="list-group-item"><span class="text-xs">Registration Time: <span class="text-dark ms-sm-2 font-weight-bold"><b>
              
</span><b>{{$User->created_at}}</b></span></li><br>

</div>      
      </div>
          </div>
        </div>
        
      </div>

<br><br><br><br><br>



  @endsection