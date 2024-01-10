@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-light bg-dark">Add a new Employee</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf

                        <div class="form-group m-3 row">
                          <label for="name" class="col-sm-6 col-form-label">Employee Name <small class="text-danger">*</small></label>
                          <div class="col-sm-6">
                            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                          <label for="email" class="col-sm-6 col-form-label">Email <small class="text-danger">*</small></label>
                          <div class="col-sm-6">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}">
                            @error('email')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                            <label for="age" class="col-sm-6 col-form-label">Age <small class="text-danger">*</small></label>
                            <div class="col-sm-6">
                              <input type="text" name="age" class="form-control @error('age') is-invalid @enderror"  value="{{ old('age') }}">
                              @error('age')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        
                          <fieldset class="form-group ">
                            <div class="row m-3">
                              <legend class="col-form-label col-sm-6">Gender<small class="text-danger">*</small></legend>
                              <div class="col-sm-6">
                                <div class="form-check @error('gender') is-invalid @enderror">
                                  <input class="form-check-input" type="radio" name="gender" value="male" @if (old('gender')) checked @endif >
                                  <label class="form-check-label" for="gender">
                                    Male
                                  </label>
                                </div>
                                <div class="form-check col-sm-6">
                                  <input class="form-check-input" type="radio" name="gender" value="female"  @if (old('gender')) checked @endif>
                                  <label class="form-check-label" for="gender">
                                    Female
                                  </label>
                                </div>
                                @error('gender')
                                  <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                              </div>
                            </div>
                          </fieldset>

                        <div class="form-group m-3 row">
                            <label for="position" class="col-sm-6 col-form-label">Employee position <small class="text-danger">*</small></label>
                            <div class="col-sm-6">
                              <input type="position" name="position" class="form-control @error('position') is-invalid @enderror"  value="{{ old('position') }}">
                              @error('position')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group m-3 row">
                            <label for="salary" class="col-sm-6 col-form-label">Employee Salary <small class="text-danger">*</small></label>
                            <div class="col-sm-6">
                              <input type="salary" name="salary" class="form-control @error('salary') is-invalid @enderror"  value="{{ old('salary  ') }}">
                              @error('salary')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        <div class="form-group m-3 row">
                          <div class="text-center">
                            <a href="{{ route('employee.index') }}" class="btn btn-outline-dark">
                              <i class="fa fa-angle-double-left fa-lg"></i>
                            </a>
                            <button type="submit" class="btn btn-outline-primary">Add</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
