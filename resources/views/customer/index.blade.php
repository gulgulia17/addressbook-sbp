@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Home</h1>
@stop
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
          <li class="nav-item">
            <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! route('customer.create') !!}"><i class="fa fa-plus mr-2"></i>Add Customers</a>
          </li>
          @include('layouts.right_toolbar', compact('datatable'))
        </ul>
      </div>
      <div class="card-body table-responsive">
        @include('customer.table')
        <div class="clearfix"></div>
      </div>
  </div>
  </div>
</div>
@stop

@section('css') @stop
