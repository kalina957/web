@extends('layouts.app')

@section('content')

    <html>
<head>
    <title>Export Data to Excel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<div class="container">
    <h3 align="center">Export Users Data to Excel</h3><br />
    <div align="center">
        <a href="{{ route('export_excel.excel') }}" class="btn btn-success">Export to Excel</a>
    </div>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tr>
                <td>User ID</td>
                <td>User Name</td>
                <td>User Email</td>
            </tr>
            @foreach($users_data as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </table>
    </div>

</div>
</body>
</html>

@endsection
