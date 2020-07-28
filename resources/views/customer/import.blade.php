@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Import Customers</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>Customers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{!! route('customer.create') !!}"><i class="fa fa-plus mr-2"></i>Add Customers</a>
                  </li>
                  @include('layouts.right_toolbar')
                </ul>
              </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Choose file to import</label>
                      <div class="custom-file">
                        <input type="file" name="importFile" class="custom-file-input @error('importFile') is-invalid @enderror" id="customFile" aria-describedby="helpId" accept=".xlsx">
                        <small id="helpId" class="text-muted">Only use XLSX format</small>
                        @error('importFile')
                          <div class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                          </div>
                         @enderror
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>

                    <button class="btn btn-primary btn-lg w-100">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css') @stop

@section('js') @stop