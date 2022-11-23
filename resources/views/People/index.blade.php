@extends('people.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9" style="justify-content: center;margin: auto;">
                <div class="card">
                    <div class="card-header"><h3>People in the Philippines</h3></div>
                    <div class="card-body">
                        <a href="{{ url('/people/create') }}" class="btn btn-success btn-sm" title="Add New People">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New People
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($people as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <a href="{{ url('/people/' . $item->id) }}" title="View People"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/people/' . $item->id . '/edit') }}" title="Edit People"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/people' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete People" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
    </div>
@endsection