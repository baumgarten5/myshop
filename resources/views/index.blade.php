@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   @foreach($all as $one)
                    <div>
                    <a href="{{asset('catalog/'.$one->id)}}" class="btn btn-default btn-block">
                          {{$one->name}}
                        </a> 
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


