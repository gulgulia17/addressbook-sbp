@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Change Password</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="oldPassword">Current Password</label>
                        <input type="password" name="oldPassword" id="oldPassword"
                            class="form-control @error('oldPassword') is-invalid @enderror"
                            placeholder="Please enter your old password" required autofocus autocomplete="off">
                        @error('oldPassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Current Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Please enter new password." name="password" required />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Current Password</label>
                        <input id="password_confirmation" type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" placeholder="Please enter your newss password again." required>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css') @stop