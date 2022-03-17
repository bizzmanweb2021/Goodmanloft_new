@extends('layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">User list</h6>
@endsection
@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Registered Users</h6>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Unique_Id</th>
<th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Name</th>
    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Email</th>
    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Phone</th>
    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Country</th>
    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">State</th>
    <th class="text-uppercase  text-center text-secondary text-xxs font-weight-bolder">Pincode</th>
    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Location</th>
 <th class="text-uppercase  text-secondary text-xxs font-weight-bolder">More Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($Users as $one)
                    <tr>
      <td class="text-xs text-center text-secondary mb-0">{{$one->unique_id}}</td>     
       <td><h6 class="text-xs  text-center text-secondary mb-0">{{$one->name}}</h6></td>
  <td><p class="text-xs text-center text-secondary mb-0">{{$one->email}}</p></td>
                      <td>
                        <p class="text-xs text-center text-secondary mb-0">{{$one->phone}}</p>
                      </td>
           <td><p class="text-xs text-center text-secondary mb-0">{{$one->Country}}</p></td>
            <td><p class="text-xs  text-center text-secondary mb-0">{{$one->State}}</p></td>
 <td><p class="text-xs text-center text-secondary mb-0">{{$one->ZipCode}}</p></td>

  <td><p class="text-xs text-center text-secondary mb-0">{{$one->Location}}</p></td>
                      
            
                      <td class="align-middle">
         <a href="{{URL::signedRoute('user.view',$one->id)}}" class="text-white font-weight-bold btn btn-primary text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <i class="fa fa-eye"></i>
        </a>
        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
@endsection