<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\ItemApiController;
use App\Http\Resources\ItemResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Item;
use App;


class ItemApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {

        $items = Item::paginate();
        return ItemResource::collection($items);
    }

    public function show($id)
    {
        $item = Item::find($id);
        //return new ItemResource($item);
        return new ItemResource($item);
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $this->validate($request,[
            'itemName'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:5000'
        ]);
        $item=new Item();
        $item -> itemName = $request->get('itemName');
        $item -> description = $request->get('description');
        $item -> price = $request->get('price');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = Str::slug($request->input('filename')).'_'.time();
            $folder = '/uploads/items';
            $filePath =  $filename. '.' . $image->getClientOriginalExtension();
            $this-> uploadOne($image, $folder, 'public' ,$filename);
            $item -> image = $filePath;
        }
        $item -> user_id = $id;

        //$item = Item::create($request->all());
        //return new ItemResource($item);
        $item->save();
        return redirect('/profile');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('item.edit', compact('item', 'id'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'itemName' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $item = Item::find($id);
        $item->user_id = Auth::id();
        $item->itemName = $request->get('itemName');
        $item->description = $request->get('description');
        $item->price = $request->get('price');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = Str::slug($request->input('filename')).'_'.time();
            $folder = '/uploads/items';
            $filePath =  $filename. '.' . $image->getClientOriginalExtension();
            $this-> uploadOne($image, $folder, 'public' ,$filename);
            $item -> image = $filePath;
        }


        $item->save();
        return redirect('/profile');
    }

    public function destroy($id){
        $item = Item::findorfail($id);
        $item->delete();
        return response()->json(null,200);
    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}
