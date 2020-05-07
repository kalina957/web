<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class WaterMarkController extends Controller
{
    public function imageWatermark()
    {
        $img = Image::make(public_path('public/storage/gallery.jpg'));

        /* insert watermark at bottom-right corner with 10px offset */
        $img->insert(public_path('public/storage/gal.png'), 'bottom-right', 10, 10);

        $img->save(public_path('public/storage/new-image.jpg'));

        $img->encode('jpg');
        $type = 'jpg';
        $new_image = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return view('show_watermark', compact('new_image'));
    }


}
