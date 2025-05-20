@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- <a href="{{ route('employee.create') }}" class="btn btn-info">Add New Employee</a> -->
            <div class="row">

                <div class="col-6 m-auto">
                    <div class="card card-secondary">
                        <div class="card-header"
                            style="background: linear-gradient(90deg, #0b325c, #0056b3); color: white;">
                            <h3 class="card-title">Add new employee</h3>
                        </div>


                        <form action="{{ route('employee.store') }}" method="POST">
                            @csrf
                            <div class="row card-body col-12">
                                <div class="form-group col-12">

                                </div>
                                @error('fname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror


                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">First Name</label>
                                    <input type="number" class="form-control" id="zip" name="zip" placeholder="">
                                </div>
                                @error('zip')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="number" class="form-control" id="age" name="age" placeholder="">
                                </div>
                                @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror






                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="number" class="form-control" id="zip" name="zip" placeholder="">
                                </div>
                                @error('zip')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="number" class="form-control" id="age" name="age" placeholder="">
                                </div>
                                @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success col-12"
                                    style="background: linear-gradient(90deg, #1b1584, #000000); border: none;">
                                    Submit
                                </button>
                            </div>



                        </form>


                    </div>
                </div>

                <div class="card-head">

                </div>

                <div class="card-body">



                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <!--  <th>Middle Name</th> -->
                                <!-- <th>Age</th> -->
                                <th>Address</th>
                                <th>Phone</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($employees as $items)
                                <tr>

                                    <td class="">{{ $items->id }}</td>
                                    <td>{{ $items->fname }}</td>
                                    <td>{{ $items->lname }}</td>
                                    <td>{{ $items->midname }}</td>
                                    <td>{{ $items->age }}</td>
                                    <!-- <td>{{ $items->address }}</td> -->
                                    <!-- <td>{{ $items->zip }}</td> -->
                                    <td>
                                        <span class="badge bg-primary" style="padding: 0;">
                                            <a href="{{ route('employee.edit', $items->id) }}" class="btn btn-primary mx-3"
                                                style="padding: 0.5rem 1rem; font-size: 0.875rem; line-height: 1; display: inline-flex; align-items: center; justify-content: center;">
                                                <h5 style="margin: 0;">Edit</h5>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge" style="padding: 0;">
                                            <a href="{{ route('employee.delete', $items->id) }}"
                                                class="btn btn-outline-primary text-primary mx-3"
                                                style="padding: 0.5rem 1rem; font-size: 0.875rem; line-height: 1; display: inline-flex; align-items: center; justify-content: center;">
                                                <h5 style="margin: 0;">Delete</h5>
                                            </a>
                                        </span>

                                    </td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="card-footer">

                </div>


                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    @endsection
