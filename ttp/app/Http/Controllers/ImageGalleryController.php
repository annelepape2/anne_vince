<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class ImageGalleryController extends Controller
{
    public function index()
    {
        $images = ImageGallery::get();
        return view('image-gallery',compact('images'));
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        $input['title'] = $request->title;
        $input['theme'] = $request->theme;
        ImageGallery::create($input) && ModeTheme::create($input);


        return back()
            ->with('Bravo','L\'image est bien téléchargé.');
    }


    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()
            ->with('Bravo','L\'image a bien été supprimé.');
    }
}
