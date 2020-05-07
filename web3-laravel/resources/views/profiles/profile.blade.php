@extends('layouts.app')

@section('content')

        <form enctype="multipart/form-data" action="{{Route('profile1')}}" method="POST" style="width:60%;border-radius: 5%">
            <h2 style="padding-left: 40px">{{Auth::user()->name}}'s profile</h2>
            <div style="display: flex;justify-content:space-between; flex-direction: row;width:1000px" >
                <div class="form-group block" style="width:60%;padding: 70px">
                    <div style="background-color: #fae1b7; border-radius: 50%;padding: 5%;height: 350px;width: 350px">
                        <img src="uploads/avatars/{{Auth::user()->avatar}}" style="padding: 5px;height: 300px;float:top;">
                    </div>
                </div>
                <div style="width:40%;background-color: #fae1b7;border-radius: 50%;padding:90px">
                    <div>
                        <h5>Edit your profile:</h5>

                        <label for="email" class=" col-form-label " style="display: block">{{ __('Name: ') }}</label>
                        <input type="text" name="userName" value="{{Auth::user()->name}}">
                    </div>

                    <div>
                        <label for="email" class=" col-form-label " style="display: block">{{ __('Email: ') }}</label>
                        <input type="text" name="userEmail" value="{{Auth::user()->email}}">
                    </div>
                    <label style="display: block; padding-top: 5%">
                        Update Profile Image
                    </label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary m-3" style="display: block">
                </div>
            </div>

        </form>

                <br>
                <h3 align="center"> Your Art</h3>
                <p><a href="{{action('ProfileController@create')}}">Add new item</a></p>
                <br>

                <table class="table table-borderless">
                    <tr>
                        <th>Image</th>
                        <th>Item name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <!--
                        <th>Available</th>-->
                    </tr>
                    @foreach($arts as $art)
                        <tr>
                            <td><a href="/item/{{ $art['id'] }}"><img src="{{asset( 'uploads/items/'.$art->image)}}"  alt="" style=" width:200px;height: 150px;float:left;margin-right: 25px"></a></td>
                            <td><a href="/item/{{ $art['id'] }}">{{$art['itemName']}}</a></td>
                            <td>{{$art['description']}}</td>
                            <td>{{$art['price']}}</td>
                        <!--<td>{{$art['available']}}</td> -->
                            <td>
                                <a href="{{action('ProfileController@edit', $art['id'])}}">Edit</a>
                            </td>
                            <td>
                                <form method="post" class="delete_form" action="{{action('ProfileController@destroy', $art['id'])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </table>
@endsection
