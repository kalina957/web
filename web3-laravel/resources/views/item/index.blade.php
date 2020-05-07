@extends('layouts.app')

@section('title', 'Page Title')

@section('content')


    <div class="flex-center position-ref full-height" id="app">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-4 mb-4">
                        <a href="{{action('ItemController@show', $item['id'])}}">
                            <img src="{{asset( 'uploads/items/'.$item['image'])}}"  class="w-100"
                                 onmouseout="src='{{asset( 'uploads/items/'.$item['image'])}}'"
                            onmouseover= "src='{{asset( 'uploads/pixelate/'.$item['image'])}}'" >
                            <label> {{$item['itemName']}}</label>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
