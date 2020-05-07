@extends('layouts.app')

@section('title', 'Edit item')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 aling="center">Edit Item</h3>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <form method="post" action="{{route('item.update', $id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('put') }}
                <div class="form-group">
                    <input type="text" name="itemName" class="form-control"
                           value="{{$item->itemName}}" placeholder="Enter Item Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control"
                          value="{{$item->description}}" placeholder="Enter Item description" />
                </div>
                <div class="form-group">
                    <input type="number" name="price" class="form-control"
                           value="{{$item->price}}" placeholder="Enter Item price" />
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <br>
                    <select name="type" >
                        <option value="painting">Painting</option>
                        <option value="photograph">Photograph</option>
                        <option value="sculpture">Sculpture</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column">
                    <label for="image">Item Image</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit"/>
                </div>

            </form>
        </div>
    </div>
@endsection
