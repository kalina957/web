<?php

  namespace App\Http\Controllers;
    use App\Http\Resources\ItemResourceCollection;
    use App\Http\Resources\ItemResource;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\UploadedFile;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use App\Item;
    use App;
    use Intervention\Image\Facades\Image;

    class ItemController extends Controller
    {


        public function __construct()
        {
            $this->middleware('auth', ['except' => ['index', 'show']]);
        }

        public function index()
        {
            $items = Item::all()->toArray();
            return view('item.index', compact('items'));
        }

        public function show($id)
        {
            $item = Item::find($id);
            //return new ItemResource($item);
            return view('item.details', compact('item'));
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
            $item -> type = $request->get('type');
            if($request->hasFile('image')){
                $image = $request->file('image');
                $destinationPath = public_path('/pixelate');
                $img = Image::make($image->path())->pixelate(20);
                $img->save($destinationPath.'.'.$image->getClientOriginalExtension());
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
            return redirect()->action('ProfileController@index');
        }

//        public function show($id)
//        {
//           // $this->authorize('view','item');
//            $item = Item::find($id);
////            return view('item.details', compact('item'));
//            return $item;
//        }

        public function edit($id)
        {
            $this->authorize('update',Auth::user());
            $item = Item::find($id);
            return view('item.edit', compact('item', 'id'));
        }

        public function update(Request $request, $id)
        {
            $this->authorize('update',Auth::user());
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
            $item -> type = $request->get('type');
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = Image::make($image)->pixelate(30);
                $destinationPath = public_path('uploads\pixelate');
                $filename = Str::slug($request->input('filename')).'_'.time();
                $input['imagename'] = '_' . time().'.'.$image->getClientOriginalExtension();
                $img->save($destinationPath.'\\'.$input['imagename']);
                $folder = '/uploads/items';
                $filePath =  $filename. '.' . $image->getClientOriginalExtension();
                $this-> uploadOne($image, $folder, 'public' ,$filename);
                $item -> image = $filePath;
            }


            $item->save();
            return redirect()->action('ProfileController@index');
        }

        public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
        {
            $name = !is_null($filename) ? $filename : Str::random(25);

            $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

            return $file;
        }

        /*
            //items
        public function index(){
             Item::all()->toArray();
        }

        public function show(Item $id){
            $item = Item::find($id);
            return view('item.details', compact('item'));
        }

        public function store(Request $request){

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
            $item->save();

            return new ItemResource($item);
            //return redirect()->action('ProfileController@index');
        }

        public function update(Request $request, Item $id){

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

            $item->update($request->all());
            return new ItemResource($item);
            //return response()->json($item, 200);
            //return redirect()->action('ProfileController@index');
        }

        public function destroy(Item $id){
            $id->delete();
            return response(['message' => 'Deleted!']);
            //return response()->json(null, 204);
        }
        */
    }
