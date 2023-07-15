<?php


namespace App\Services;

use File;
use Illuminate\Support\Facades\Storage;

class ImageUpload{
    function imageUpload($file, $folder){
        try {
            $ext = "." . strtolower($file->getClientOriginalExtension());
            $imageName = rand(1000, 9999) . time() . $ext;
            Storage::disk('public')->put($folder . $imageName, File::get($file));
            return $imageName;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}