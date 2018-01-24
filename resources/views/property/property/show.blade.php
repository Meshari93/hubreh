@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">Informatiom : {{ $property->name }}</div>
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
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
         <div class="row">
            <div class="col-md-6">
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Ouner Information</div>
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
                                      <th>ID Ouner</th>
                                      <td> {{ $property->user_id}} </td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Name </th>
                                      <td>{{ $property->owner->first_name	}} {{ $property->owner->last_name }}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Email </th>
                                      <td>{{ $property->owner->email	}}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Phone Number </th>
                                      <td>{{ $property->owner->phone_num	}}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Nashioty </th>
                                      <td>{{ $property->owner->nashioty	}}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Location </th>
                                      <td>{{ $property->owner->location	}}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Pirth Day </th>
                                      <td>{{ $property->owner->pirth_day	}}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Gender </th>
                                      <td>{{ $property->owner->gender	}}</td>
                                    </tr>
                                    <tr>
                                      <th> Ouner	Status </th>
                                      <td>{{ $property->owner->Status	}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Table -->
            <div class="col-md-12">


            @foreach($property->section as $section )
              <div class="col-md-6">
                  <div class="panel panel-default">
                      <div class="panel-heading">{{ $section->name }}</div>
                      <div class="panel-body">
                          <a href="{{ url('/section/' . $section->id . '/edit') }}" title="Edit Section"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                          <form method="POST" action="{{ url('section' . '/' . $section->id) }}" accept-charset="UTF-8" style="display:inline">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-danger btn-xs" title="Delete Section" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                          <br/>
                          <br/>
                          <div class="table-responsive">
                              <table class="table table-borderless">
                                  <tbody>
                                      <tr>
                                        <th> Ouner	Name </th>
                                        <td>{{ $section->name	}}</td>
                                      </tr>
                                      <tr>
                                        <th> Ouner	Room number </th>
                                        <td>{{ $section->room_num	}}</td>
                                      </tr>
                                      <tr>
                                        <th> Ouner	Capacity </th>
                                        <td>{{ $section->capacity	}}</td>
                                      </tr>
                                      <tr>
                                        <th> Section	Status </th>
                                        <td>{{ $section->status	}}</td>
                                      </tr>
                                      @foreach($section->serves as $serves )
                                      <tr>
                                        <th> Section	Status </th>
                                        <td>{{ $serves->serves	}}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>

                              </table>
                              <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                </ol> -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">

                                    @foreach($section->picture as $picture )
                                    @if( $picture->img1 !=NULL  )
                                    <div class="item active">
                                        <img src="../../images/store/sectionimage/{{$picture->img1}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img2 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img2}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img3 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img3}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img4 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img4}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img5 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img5}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img6 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img6}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img7 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img7}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img8 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img8}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img9 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img9}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img10 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img10}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @if( $picture->img11 !=NULL  )
                                    <div class="item">
                                        <img src="../../images/store/sectionimage/{{$picture->img11}}" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    @endif

                                    @endforeach


                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                          </div>
                      </div>
                  </div>
              </div>
            @endforeach
            </div>
        </div>
 @endsection
