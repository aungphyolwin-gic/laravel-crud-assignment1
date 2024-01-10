@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center  bg-gray">Add a new Service</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="POST">
                        @csrf

                        <div class="form-group m-3 row">
                          <label for="name" class="col-sm-6 col-form-label">Service Name <small class="text-danger">*</small></label>
                          <div class="col-sm-6">
                            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                          <label for="about" class="col-sm-6 col-form-label">About Service</label>
                          <div class="col-sm-6">
                            <input type="text" name="about" class="form-control"  value="{{ old('detail') }}">
                           
                          </div>
                        </div>
                        <div class="form-group m-3 row">
                            <label for="price" class="col-sm-6 col-form-label">Price <small class="text-danger">*</small></label>
                            <div class="col-sm-6">
                              <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"  value="{{ old('price') }}">
                              @error('price')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        

                        <div class="form-group m-3 row">
                            <label for="type" class="col-sm-6 col-form-label">Service type <small class="text-danger">*</small></label>
                            <div class="col-sm-6">
                              <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"  value="{{ old('type') }}">
                              @error('type')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                          
                        <div class="form-group m-3 row">
                          <div class="text-center">
                            <a href="{{ route('service.index') }}" class="btn btn-outline-dark">
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
