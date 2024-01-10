@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center d-inline">Employee List</h1>
                </div>

                <div class="card-body">
                   
                    <a href="{{ route('employee.create') }}" class="btn btn-outline-success mb-3">
                        <i class="fas fa-user-plus"></i>
                    </a>

                    <table class="table table-striped">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Position</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <th scope="row" >{{ $employee->id }}</th>
                                    <td >{{ $employee->name }}</td>
                                    <td >{{ $employee->email }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td >{{ $employee->gender }}</td>
                                    <td >{{ $employee->position }}</td>
                                    <td >{{ $employee->salary }}</td>
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-outline-warning"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('employee.show',$employee->id) }}" class="btn btn-outline-info"><i class="fa fa-info"></i></a>
                                        </div>
                                        
                                        <form action="{{ route('employee.destroy',$employee->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                  </tr>
                                @endforeach 
                              
                            </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
