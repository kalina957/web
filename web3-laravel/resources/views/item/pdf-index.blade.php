@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <html>
    <head>
        <title>Converting Items Data into PDF</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            .box{
                width:600px;
                margin:0 auto;
            }
        </style>
    </head>
    <body>
    <br />
    <div class="container">
        <h3 align="center">Converting Items Data into PDF</h3><br />

        <div class="row">
            <div class="col-md-7" align="right">
                <h4>Items Data</h4>
            </div>
            <div class="col-md-5" align="right">
                <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
            </div>
        </div>
        <br />
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Available</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items_data as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->itemName }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->available }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </body>
    </html>
@endsection
