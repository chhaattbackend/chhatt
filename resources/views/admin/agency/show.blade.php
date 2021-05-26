@extends('layouts.app')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="heading col-sm-12">
                    <h1>{{ $agency->name }}</h1>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6>Owner: </h6> {{ $agency->user->name }}     
                        </div>
                        <div class="col-sm-3">
                            <h6>Realtors: </h6> {{ count($realtors) }}     
                        </div>
                        <div class="col-sm-3">
                            <h6>Properties: </h6> {{ $properties }}     
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <h6>Number: </h6> {{ $agency->user->phone }}     
                        </div>
                        <div class="col-sm-10">
                            <h6>Address: </h6> {{ $agency->user->address }}     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-sm-3">
            <img src="img_5terre.jpg" width="200" height="200">
        </div>
    </div>
    

    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Area</th>
                                <th>Contact</th>
                                <th>Properties Posted</th>
                               


                            </tr>
                        </thead>
                        <tbody>
                        @foreach($realtors as $realtor)
                        <tr>
                                
                                <td>{{ $realtor['id'] }}</td>
                                    <td>{{ $realtor['user'] }}</td>
                                    <td>{{ $realtor['area'] }}</td>
                                    <td>{{ $realtor['contact'] }}</td>
                                    <td>{{ $realtor['properties'] }}</td>   
                                </tr>
                                @endforeach
                                
                          
                                <p>No Data Found</p>
                        </tbody>
                    </table>
                    <div class="align-right paginationstyle">
                      
                    </div>
                </div>
@endsection