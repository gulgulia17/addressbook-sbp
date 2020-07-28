@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>{{$customer->customername}}'s Details</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
            <li class="nav-item">
              <a class="nav-link" href="{!! route('customer.index') !!}"><i class="fa fa-list mr-2"></i>Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{!! route('customer.create') !!}"><i class="fa fa-plus mr-2"></i>Add Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-info mr-2"></i>{{$customer->customername}}'s Details</a>
            </li>
            @include('layouts.right_toolbar',compact('customer'))
          </ul>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-1 col-2 font-weight-bold">Name :</div>
                <div class="col-md-11">{{$customer->customername}}</div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-2 font-weight-bold">Number :</div>
                <div class="col-md-11">{{$customer->number}}</div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-2 font-weight-bold">Address :</div>
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="d-block">{{$customer->addressline1}}</span>
                            <span class="d-block">{{$customer->addressline1}}</span>
                            <span class="d-block">{{$customer->addressline1}}</span>
                        </div>
                    </div>
                </div>
            </div>
          <div class="clearfix"></div>
        </div>
    </div>
    </div>
  </div>
@stop

@section('css') @stop

@section('js') @stop