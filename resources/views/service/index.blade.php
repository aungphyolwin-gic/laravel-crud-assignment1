@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center d-inline">Available Service List</h1>
                </div>

                <div class="card-body">
                   
                    <a href="{{ route('service.create') }}" class="btn btn-outline-success mb-3">
                        <i class="fa fa-puzzle-piece fa-lg"></i>
                    </a>
                    <table class="table table-striped">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">About</th>
                                <th scope="col">Price</th>
                                <th scope="col">Type</th>
                               
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1 ?>
                                @foreach ($services as $service)
                                <tr>
                                    <th scope="row" >{{ $number++ }}</th>
                                    <td >{{ $service->name }}</td>
                                    <td >{{ $service->about }}</td>
                                    <td>{{ $service->price }}</td>
                                    <td >{{ $service->type }}</td>
                                    
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{ route('service.edit',$service->id) }}" class="btn btn-outline-warning"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('service.show',$service->id) }}" class="btn btn-outline-info"><i class="fa fa-info"></i></a>
                                        </div>
                                        
                                        <form action="{{ route('service.destroy',$service->id) }}" method="POST" class="d-inline">
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
