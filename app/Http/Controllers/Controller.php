<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function updateprofile(Request $request, $file)
    {
        $p = $request->input();
        $path = '';

        if ($request->file($file)) {
            $request->validate([
                $file => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imagePath = $request->file($file);
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file($file)->storeAs('public/profileimage', time() . $imageName);
            $path = str_replace('public/', '', $path);
        }
        return $path;
    }


    public function saveThumbnailImage(Request $request, $file)
    {

        $path = '';

        if ($file) {
            // $request->validate([
            //     $file => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            $imagePath = $file;
            $imageName = $imagePath->getClientOriginalName();
            $path = $file->storeAs('public/thumbnailimage', time() . $imageName);
            $path = str_replace('public/', '', $path);
        }
        return $path;
    }

    public function getBreadCrumbs($page, $sub_page)
    {
        return '<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="/" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">'.$page.'</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">'.$sub_page.'</li>
                </ul>';
    }
}
