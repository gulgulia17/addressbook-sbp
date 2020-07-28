@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Profile</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><strong>{{$userData->name}}'s</strong> Profile</div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('user.profile.update',$userData->id)}}" method="post">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Please enter your name." value="{{old('name') ?? $userData->name}}">
                            @error('name')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Please enter your email." value="{{old('email') ?? $userData->email}}">
                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                    </div>
                    <button class="btn btn-primary btn-lg w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><strong>{{$userAddress->user->name ?? $userData->name}}'s</strong> Address</div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="@empty($userAddress) {{route('user.profile.address')}} @else {{route('user.profile.addressupdate',$userAddress->id)}} @endempty" method="post">
                    @csrf @empty(!$userAddress) @method('patch') @endempty
                    <div class="form-group">
                        <label for="addressline1">Address</label>
                        <input type="text" name="addressline1" id="addressline1" class="form-control"
                            placeholder="Please enter your name." value="{{old('addressline1') ?? $userAddress->addressline1 ?? null}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="addressline2" id="addressline2" class="form-control"
                            placeholder="Please enter your addressline2." value="{{old('addressline2') ?? $userAddress->addressline2 ?? null}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="addressline3" id="addressline3" class="form-control"
                            placeholder="Please enter your addressline3." value="{{old('addressline3') ?? $userAddress->addressline3 ?? null}}">
                    </div>
                    <div class="form-group">
                        <label for="pincode">Pincode</label>
                        <input type="tel" name="pincode" id="pincode" class="form-control"
                            placeholder="Please enter your pincode." value="{{old('pincode') ?? $userAddress->pincode ?? null}}">
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="tel" name="number" id="number" class="form-control"
                            placeholder="Please enter your number." value="{{old('number') ?? $userAddress->number ?? null}}">
                    </div>
                    <button class="btn btn-primary btn-lg w-100"> @empty($userAddress) Submit @else Update @endempty</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css') @stop