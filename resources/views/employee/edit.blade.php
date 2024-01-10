@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-light bg-dark">Edit Employee Information</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('employee.update',$employee->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group m-3 row">
                          <label for="name" class="col-sm-6 col-form-label">Employee Name</label>
                          <div class="col-sm-6">
                            <input type="name" name="name" class="form-control" value="{{ $employee->name }}">
                            @error('name')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                          <label for="email" class="col-sm-6 col-form-label">Email </label>
                          <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
                            @error('email')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                            <label for="age" class="col-sm-6 col-form-label">Age </label>
                            <div class="col-sm-6">
                              <input type="text" name="age" class="form-control" value="{{ $employee->age }}">
                              @error('age')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        
                          <fieldset class="form-group ">
                            <div class="row m-3">
                              <legend class="col-form-label col-sm-6">Gender</legend>
                              <div class="col-sm-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="male" @if ($employee->gender =='male') checked @endif>
                                      
                                 
                                  <label class="form-check-label" for="gender">
                                    Male
                                  </label>
                                </div>
                                <div class="form-check col-sm-6">
                                  <input class="form-check-input" type="radio" name="gender" value="female"  @if ($employee->gender =='female') checked @endif >
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
                            <label for="position" class="col-sm-6 col-form-label">Employee position</label>
                            <div class="col-sm-6">
                              <input type="position" name="position" class="form-control" value="{{ $employee->position }}">
                              @error('position')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group m-3 row">
                            <label for="salary" class="col-sm-6 col-form-label">Employee Salary</label>
                            <div class="col-sm-6">
                              <input type="salary" name="salary" class="form-control" value="{{ $employee->salary }}">
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
                            <button type="submit" class="btn btn-outline-success">Change</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
