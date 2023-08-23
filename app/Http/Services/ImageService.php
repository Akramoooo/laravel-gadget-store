<?php

namespace App\Http\Services;

use Illuminate\Image\ImageManager;

class ImageService {

    public function makeImg(object $image, string $path){
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move($path, $filename);
        

        return $filename;
    }
}