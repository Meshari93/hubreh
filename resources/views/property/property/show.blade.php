@extends('layouts.app')

@section('content')
         <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Property {{ $property->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/property') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/property/' . $property->id . '/edit') }}" title="Edit Property"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('property' . '/' . $property->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Property" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <a href="{{ url('property/' . $property->id . '/createsection') }}" title="Add Section"><button class="btn btn-success right btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> New Section</button></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $property->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Name </th>
                                      <td> {{ $property->type }} : {{ $property->name }} </td>
                                    </tr>
                                    <tr>
                                      <th> Type </th>
                                      <td> {{ $property->type }} </td>
                                    </tr>
                                    <tr>
                                      <th> Describstion </th>
                                      <td> {{ $property->describstion }} </td>
                                    </tr>
                                    <tr>
                                      <th> Phon Num One </th>
                                      <td> {{ $property->phon_num_one }}</td>
                                    </tr>
                                    <tr>
                                      <th> Phon Num two </th>
                                      <td> {{ $property->phon_num_two }}</td>
                                    </tr>
                                    <tr>
                                      <th> Status	 </th>
                                      <td> {{ $property->status	 }} </td>
                                    </tr>
                                    <tr>
                                      <th> Evaluation	 </th>
                                      <td> {{ $property->evaluation	 }} </td>
                                    </tr>
                                    <tr>
                                      <th> number section	 </th>
                                      <td> {{ $property->num_section	 }} </td>
        