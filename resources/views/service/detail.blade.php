@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-light bg-dark">{{ $service->name }} Service Information Details</h1>
                </div>

                <div class="card-body">
                    <form action="">
                       
                      <div class="form-group m-3 row">
                        <label for="name" class="col-sm-6 col-form-label">Service Name <small class="text-danger">*</small></label>
                        <div class="col-sm-6">
                          <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $service->name }}" disabled>
                          @error('name')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group m-3 row">
                        <label for="about" class="col-sm-6 col-form-label">About Service</label>
                        <div class="col-sm-6">
                          <textarea type="text" name="about" class="form-control" disabled>{{  $service->about }}
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group m-3 row">
                          <label for="price" class="col-sm-6 col-form-label">Price <small class="text-danger">*</small></label>
                          <div class="col-sm-6">
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"   value="{{ $service->price }}" disabled>
                            @error('price')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      

                      <div class="form-group m-3 row">
                          <label for="type" class="col-sm-6 col-form-label">Service type <small class="text-danger">*</small></label>
                          <div class="col-sm-6">
                            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"   value="{{ $service->type }}" disabled>
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
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
