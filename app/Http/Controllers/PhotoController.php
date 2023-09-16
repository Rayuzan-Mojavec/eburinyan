<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::latest()->paginate(5);
        return view('photos.photos', [
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $number = Photo::generatePhotoId();
        return view('photos.create')->with('number', $number);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoRequest $request)
    {
        $rules = [
            'photos' => 'image|file|required|max:65536',
            'title' => 'required',
            'id' => 'required'
        ];

        $validation = $request->validate($rules);

        if ($request->file('photos')) {
            $validation['photos'] = $request->file('photos')->store('photos');
        }

        Photo::create($validation);

        return redirect('/photos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        return view('photos.photo-view', [
            "photo" => $photo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('photos.edit', [
            "photo" => $photo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        $rules = [
            'photos' => 'image|file|max:65536',
            'title' => 'required',
        ];

        $validation = $request->validate($rules);

        if ($request->file('photos')) {
            if ($request->older) {
                Storage::delete($request->older);
            }
            $validation['photos'] = $request->file('photos')->store('photos');
        }

        Photo::where('id', $photo->id)->update($validation);

        return redirect('/photos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        if($photo->photos){
            Storage::delete($photo->photos);
        }

        Photo::destroy($photo->id);

        return redirect('/photos');
    }
}
