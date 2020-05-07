<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\App;

    //$items = App::all();
    class Item extends Model
    {
        //protected $table = 'items';
        protected $fillable = ['itemName','description','type','price','available'];

        public function user()
        {
            return $this->belongsTo(App\User::class);
        }
    }

