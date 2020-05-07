@extends('layouts.app')

@section('title', 'Item Detail')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center"> {{ $item->itemName }} Details</h3>
            <br>
                <div class="row">
                    <div style="width: 50%">
                        <img src="{{asset( 'uploads/items/'.$item->image)}}" style="width: 100%"><!--style=" width:300px;height: 300px;float:left;margin-right: 25px" -->
                    </div>
                    <div style="width: 45%; padding-left: 5%">
                        <label class="h5">Price: </label>
                        <label> {{$item['price']}}</label>
                        <br>
                        <label class="h5">Description: </label>
                        <label> {{$item['description']}}</label>
                        <br>
                        <label class="h5">Type: </label>
                        <label> {{$item['type']}}</label>
                    </div>
                </div>
        </div>
    </div>

@endsection
