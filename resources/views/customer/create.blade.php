@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Add Customers</h1>
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
            <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-plus mr-2"></i>Add Customers</a>
          </li>
          <div class="ml-auto d-inline-flex">
            <li class="nav-item">
              <a class="nav-link pt-1" id="import" href="{{route('customer.import')}}" ><i class="fas fa-file-import"></i> {{__('Import')}}</a>
            </li>
          </div>
        </ul>
      </div>
      <div class="card-body table-responsive">
        <div class="clearfix"></div>
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="customername">Customer Name</label>
              <input type="text" name="customername" id="customername" class="form-control @error('customername') is-invalid @enderror" placeholder="Please enter the name of your customer." value="{{old('customername')}}">
              @error('customername')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
              @enderror
            </div>
            <div class="form-group">
                <label for="number">Customer Number</label>
                <input type="tel" name="number" id="number" class="form-control @error('number') is-invalid @enderror" placeholder="Please enter the number of your customer." value="{{old('number')}}">
                @error('number')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="addressline1">Customer Address</label>
                <input type="text" name="addressline1" id="addressline1" class="form-control @error('addressline1') is-invalid @enderror" placeholder="Locality / House no ,of your cusotmer." value="{{old('addressline1')}}">
                @error('addressline1')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="addressline2" id="addressline2" class="form-control @error('addressline2') is-invalid @enderror" placeholder="Town / City, of your cusotmer." value="{{old('addressline2')}}">
                @error('addressline2')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="addressline3" id="addressline3" class="form-control @error('addressline3') is-invalid @enderror" placeholder="State of your customer." value="{{old('addressline3')}}">
                @error('addressline3')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="pincode">Customer Pincode</label>
                <input type="tel" name="pincode" id="pincode" class="form-control @error('pincode') is-invalid @enderror" placeholder="Please enter the pincode of your customer." value="{{old('pincode')}}">
                @error('pincode')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <button class="btn-primary btn btn-lg w-100">Submit</button>
        </form>
      </div>
  </div>
  </div>
</div>
@stop

@section('css') @stop
@section('js') @stop