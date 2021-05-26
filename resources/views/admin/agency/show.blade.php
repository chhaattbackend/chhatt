@extends('layouts.app')
@section('content')

    <section class="content-header">
        <div class="row">
        <div class=" col-sm-12 row justify-content-center">
            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ $agency->image }}" width="200" height="200">
        </div>
    </div>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="agencyheading col-sm-12">
                    <h1>{{ $agency->name }}</h1>
                    <div class="row">
                        <div class="col-sm-9">
                            <h6>Owner: </h6> {{ $agency->user->name }}
                        </div>
                        <div class="col-sm-2">
                            <h6>Realtors: </h6> {{ count($agency->agents) }}
                        </div>
                        <div class="col-sm-1">
                            <h6>Properties: </h6> {{ $totalproperties }}
                            {{-- <h6>Properties: </h6> {{ array_sum(array_map("count", $agency->properties)) }} --}}


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
    


    {{-- <div class="card-body table-responsive p-0">
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
                @foreach ($realtors as $realtor)
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
    </div> --}}

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
                <tr>
                    <td>{{ $agency->name }}</td>
                    <td>{{ $agency->user->name }}</td>
                    <td>{{ optional($agency->areaOne)->name }},{{ optional($agency->areaTwo)->name }}</td>
                    <td>{{ $agency->user->phone }}</td>
                    {{-- <td>{{ count($agency->properties) }}</td> --}}
                    <td>
                            <a target="_blank"
                href="{!! route('properties.by_parent', ['agency_id' => $agency->id]) !!}">{{ count($agency->properties) }}</a><br>
                        </td>
                </tr>


                @foreach ($agents as $agent)
                    <tr>

                        <td>{{ $agent->id }}</td>
                        <td>{{ $agent->user->name }}</td>
                        <td>{{ optional($agent->agency->areaOne)->name }},{{ optional($agent->agency->areaTwo)->name }}
                        </td>
                        <td>{{ $agent->user->phone }}</td>
                        {{-- <td>{{ count($agent->properties) }}</td> --}}
                        <td>
                            <a target="_blank"
                href="{!! route('properties.by_parent', ['agent_id' => $agent->user->id]) !!}">{{ count($agent->user->properties) }}</a><br>
                        </td>
                    </tr>
                @endforeach

                <br>
            </tbody>
        </table>

        
        <div class="align-right paginationstyle">

        </div>
    </div>

    

    
@endsection
