@extends('layouts.app')
@section('title','Profile')
@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Details
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name" class="req_fld">Name</label>
                    <input class="form-control" type="text" name="name" value="">
                    {{-- <input class="form-control" type="text" name="name" value="{{$user->name}}"> --}}

                </div>
                <div class="col-md-4 form-group">
                    <label for="email" class="req_fld">Email</label>
                    <input class="form-control" type="text" name="email" value="" >

                </div>
                <div class="col-md-4 form-group">
                    <label for="contact_no" class="req_fld">Contact Number</label>
                    <input class="form-control" type="text" name="contact_no" value="">

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="gender" class="req_fld">Gender</label>

                    <input class="form-control" type="text" name="contact_no" value="">

                </div>


            </div>
        </div>
    </div>    

   @endsection     