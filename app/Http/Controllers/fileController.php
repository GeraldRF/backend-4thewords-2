<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;


class fileController extends Controller
{
    public function upload(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $imageName = time() . '.' . $request->image->extension();


            $request->image->move(public_path('uploads'), $imageName);
        } catch (UploadException $ex) {
            return response(null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response(['url' => $imageName], Response::HTTP_CREATED);
    }

    public function getUpload($url)
    {
        $path = public_path('uploads/' . $url);

        return response()->file($path);
    }

    public function removeUpload($url)
    {
        $path = public_path('uploads/' . $url);
        unlink($path);
        return response('removed', Response::HTTP_OK);
    }
}
