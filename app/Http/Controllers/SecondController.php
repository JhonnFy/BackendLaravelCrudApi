<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SecondController extends Controller
{
    public function view_index(){
        return view('index');
    }

    #Almacenar
    public function store(Request $request){

        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $post =new Post([
                "company_name" =>$request->company_name,
                "addres" =>$request->addres,
                "phone_number" =>$request->phone_number,
                "record" =>$request->record,
                "cover" =>$imageName,
            ]);
           $post->save();
        }

        return redirect("/");

    }
    

}
