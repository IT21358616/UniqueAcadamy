@extends('layouts.app')
@section('title', 'Dashboard')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Hello</h3>
                    <p></p>
                </div>
                <div class="icon">
                    <i class="fa fa-box-open"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>

        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3></h3>
                    <p></p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar-sign"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        {{-- <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Total</h3>

                    <p>20$</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3></h3>
                    <p></p>
                </div>
                <div class="icon">
                    <i class="fa fa-calendar"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>

        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Earnings
                </div>


                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->


@endsection