<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $randoms = Product::all()->random(12);
        return view('admin',compact('randoms'));
    }
    public function dogaView()
    {
        $doga = Product::where('galeriname' , '=' , 'dogagalerisi')->get();
        return view('doga-galerisi', compact('doga'));

    }
    public function portreView()
    {
        $portre = Product::where('galeriname' , '=' , 'portregalerisi')->get();
        return view('portre-galerisi', compact('portre'));

    }
    public function hayvanView()
    {
        $hayvan = Product::where('galeriname' , '=' , 'hayvangalerisi')->get();
        return view('hayvan-galerisi', compact('hayvan'));

    }
    public function mimariView()
    {
        $mimari = Product::where('galeriname' , '=' , 'mimargalerisi')->get();
        return view('mimar-galerisi', compact('mimari'));

    }

    public function createPhotoView(){
        return view('create');
    }

    public function createPhoto(Request $request){
        $filePhotoUrl = $request->file('photo');
        if(isset($filePhotoUrl)){
            $photoName = uniqid('photo_').'.'.$filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('photos'),$photoName);
        }
        Product::create([
            'urun' => $photoName,
            'galeriname' => $request->get('galery_name'),
            'price' => $request->get('price')
        ]);
        return redirect()->back();
    }

}
