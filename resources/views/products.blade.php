@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   @foreach($products as $one)
                    <div class="product">
                        <h3>{{$one->name}}</h3>
                        <a href="{{asset('product/'.$one->id)}}"
                       class='btn btn-block btn-defaut'>
                    Подробнее
                    </a>
                    </div>
                   @endforeach
                    
                    
                    
                    <div align="center">{!!$products->links();!!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


