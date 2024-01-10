@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-light bg-dark">Employee Information Details</h1>
                </div>

                <div class="card-body">
                    <form action="">
                       
                        <div class="form-group m-3 row">
                          <label for="name" class="col-sm-6 col-form-label">Employee Name</label>
                          <div class="col-sm-6">
                            <input type="name" name="name" class="form-control" value="{{ $employee->name }}" disabled>
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                          <label for="email" class="col-sm-6 col-form-label">Email </label>
                          <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" value="{{ $employee->email }}" disabled>
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                            <label for="age" class="col-sm-6 col-form-label">Age </label>
                            <div class="col-sm-6">
                              <input type="text" name="age" class="form-control" value="{{ $employee->age }}" disabled>
                            </div>
                          </div>
                        
                          <fieldset class="form-group ">
                            <div class="row m-3">
                              <legend class="col-form-label col-sm-6">Gender</legend>
                              <div class="col-sm-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="male" @if ($employee->gender =='male') checked @endif disabled>
                                  <label class="form-check-label" for="gender">
                                    Male
                                  </label>
                                </div>
                                <div class="form-check col-sm-6">
                                  <input class="form-check-input" type="radio" name="gender" value="female"  @if ($employee->gender =='female') checked @endif  disabled>
                                  <label class="form-check-label" for="gender">
                                    Female
                                  </label>
                                </div>
                                </div>
                              </div>
                            </div>
                          </fieldset>

                        <div class="form-group m-3 row">
                            <label for="position" class="col-sm-6 col-form-label">Employee position</label>
                            <div class="col-sm-6">
                              <input type="position" name="position" class="form-control" value="{{ $employee->position }}" disabled>
                            </div>
                          </div>
                          <div class="form-group m-3 row">
                            <label for="salary" class="col-sm-6 col-form-label">Employee Salary</label>
                            <div class="col-sm-6">
                              <input type="salary" name="salary" class="form-control" value="{{ $employee->salary }}" disabled>
                            </div>
                          </div>
                        <div class="form-group m-3 row">
                          <div class="text-center">
                            <a href="{{ route('employee.index') }}" class="btn btn-outline-dark">
                              <i class="fa fa-angle-double-left fa-lg"></i>
                            </a>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
