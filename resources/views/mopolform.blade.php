@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials._messages')

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Create Record
                </div>
                <div class="card-body">

                   {!! Form::open(['route'=>'mopol.store', 'method'=>'POST']) !!}
                   <div class="row">
                        <div class="col-md-6">
                             <div class="form-group">
                            <label for="Serial No">Serial Number</label>
                            <input type="text" name="serialno" class="form-control" value="{{ old('serialno')}}" id="">
                        </div>
                       </div>
                        <div class="col-md 6">
                               <div class="form-group">
                                   <label for="apfn">AP/FN</label>
                                   <input type="text" name="APFN"  class="form-control" id="">
                               </div>
                           </div>

                    </div>
                    <div class="row">
                           <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="rank">Rank</label>
                                       <input type="text" name="rank" class="form-control" id="">
                                   </div>
                               </div>
                               <div class="col-md-8">
                                   <label for="Names">Names</label>
                                   <input type="text" name="names" class="form-control" id="">
                               </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="duty_post">Duty Post</label>
                                <input type="text" name="duty_post" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                    <h2>Arms</h2>
                    <hr>
                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="arms_serial_no">Serial No</label>
                                <input type="text" name="arms_serial_no" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('make', 'Make') !!}
                            {!! Form::text('make', null, ['class'=>'form-control']) !!}
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            {!! Form::label('breachnumber', 'Breach Number') !!}
                            {!! Form::text('breach_number', null, ['class'=>'form-control']) !!}
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('armournation_stock', 'Armournation Stock') !!}
                                {!! Form::text('armournation_stock', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                {!! Form::submit('Submit', ['class'=>'btn btn-block btn-dark']) !!}

                            </div>
                        </div>
                    </div>
                   {!! Form::close() !!}


                </div>

            </div>
        </div>
        <div class="col-md-2">
                <div class="card">
                        <div class="card-header">
                            <div class="card-title">Menu</div>

                        </div>
                        <div class="card-body">
                            <ul class="nav navbar-nav">
                                <li class="nav-item"><a href="/home">Dashboard</a> </li>
                                <li class="nav-item">
                                    <a href="{{ route('mopol.create')}}">Create Record</a>
                                </li>
                            </ul>
                        </div>
                    </div>
        </div>
    </div>
</div>
@stop

