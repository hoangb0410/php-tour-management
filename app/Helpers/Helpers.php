<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

if (!function_exists('uploadImage')) {
    function uploadFile($file)
    {
        $publicPath = 'uploads';
        $absolutePath = public_path($publicPath);
        File::makeDirectory($absolutePath, 0755, true, true);
        $dateTime = date('Ymd_His');
        $newFileName = $dateTime . '_' . $file->getClientOriginalName();
        $file->move($absolutePath, $newFileName);
        return $publicPath . '/' . $newFileName;
    }
}
