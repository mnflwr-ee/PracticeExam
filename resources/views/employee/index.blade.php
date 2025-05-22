@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

        <a href="{{ route('employee.create') }}" class="btn btn-info"> Add New Employee</a>

            <div class="row">
                <div class="card-body">
                    <table class="table table table-bordered table-stiped fs-1 text-black"
                    style="background-color:white;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>ZIP</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($employees as $items)
                            <tr>
                                <td class="">{{$items->id}}</td>
                                <td>{{$items->fname}}</td>
                                <td>{{$items->lname}}</td>
                                <td>{{$items->midname}}</td>
                                <td>{{$items->age}}</td>
                                <td>{{$items->address}}</td>
                                <td>{{$items->zip}}</td>
                                <td>
                                    <span class="badge bg-succes"> <a href="{{ route('employee.edit', $items->id) }}" class="btn btn-success"> Edit </a> </span>      
                                    <span class="badge bg-danger"> <a href="{{ route('employee.delete', $items->id) }}" class="btn btn-danger"> Delete </a> </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection