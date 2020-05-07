<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileController extends Controller
{
    public function user()
    {
        return Auth::user();
    }

    public function index()
    {
        $id = Auth::id();
        $arts = Item::where('user_id', $id)->get();
        return view('profiles.profile', ['arts' => $arts]);
    }

    public function profile(){
        return view('profiles.profile', array('user' => Auth::user()) );
    }

    public function create()
    {
        return redirect()->action('ItemController@create');
        //return view('item.create');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $this->authorize('viewEdit', $item);
        //return view('item.edit', compact('item', 'id'));
        return view('item.edit', compact('item', 'id'));
    }

    public function destroy($id)
    {
        $this->authorize('delete', Auth::user());
        $item = Item::find($id);
        $item->delete();
        return redirect()->action('ProfileController@index');
    }

    public function update_avatar(Request $request){
        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $name = $request->input('userName');
            $email= $request->input('userEmail');
            $filename = time() . '.' . 'png';
           // Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

          //  Image::make($avatar)->resize(300, 300)->mask(Image::make(public_path('uploads/mask.jpg')))->response('jpg')
            //    ->save( public_path('/uploads/avatars/' . $filename ) );

            Image::make($request->file('avatar'))->resize(300, 300)->mask(Image::make(public_path('uploads/mask.jpg')))
                ->save( public_path('/uploads/avatars/' . $filename ) )->response('png');
            $user = Auth::user();
            $user->avatar = $filename;
            $user->name = $name;
            $user->email = $email;
            $user->save();

        }
        $id = Auth::id();
        $arts = Item::where('user_id', $id)->get();
        return view('profiles.profile', array('user' => Auth::user()), ['arts' => $arts] );
    }

}
