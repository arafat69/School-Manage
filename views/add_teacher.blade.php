<?php $page = 'teacher'; ?>

@extends('master')
@section('content')
    <div class="page-title">
        <h3>Add New Teacher</h3>
    </div>

    <form action="{{ url('/add_new_teacher') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card m-0">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" class="fw-bold">Teacher Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Qualification</label>
                                    <input type="text" class="form-control" name="qualification"
                                        placeholder="Qualification/Base">
                                    @error('qualification')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Select Department</label>
                                    <select name="department" class="choices form-select">
                                        @foreach ($department as $department)
                                            <option value="{{ $department->name }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                                    @error('phone')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="fw-bold">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-0 mt-1 mt-md-0">
                    <div class="card-body">
                        <h5>Select Teacher Photo</h5>
                        <div class="st_img">
                            <img src="assets/images/avatar/avatar-1.png" width="100%" height="100%" id="output">
                        </div>
                        <input type="file" name="photo" id="image" accept="image/*" onchange="loadFile(event)">
                        <label for="image" class="btn btn-primary mt-1"><i class="bi bi-image"></i> Select A
                            Photo</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-0 mt-1">
            <div class="card-body">
                @if (session('Admin_Login_id'))
                    <button class="btn btn-primary btn-lg">Submit</button>
                @else
                    <button class="btn btn-primary btn-lg" disabled>Please Login</button>
                @endif
            </div>
        </div>
    </form>
@stop
