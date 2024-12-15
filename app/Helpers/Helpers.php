<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

if (!function_exists('uploadImages')) {
    function uploadImages($files)
    {
        $publicPath = 'uploads';
        $absolutePath = public_path($publicPath);
        File::makeDirectory($absolutePath, 0755, true, true);
        $uploadedFilePaths = [];
        foreach ($files as $file) {
            $dateTime = date('Ymd_His');
            $newFileName = $dateTime . '_' . $file->getClientOriginalName();
            $file->move($absolutePath, $newFileName);
            $uploadedFilePaths[] = $publicPath . '/' . $newFileName;
        }
        return $uploadedFilePaths;
    }
}
