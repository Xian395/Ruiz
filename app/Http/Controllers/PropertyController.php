<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;


class PropertyController extends Controller
{


    public function index(Request $request){
        $property = property::all();
        return view('property.list', compact('property'));
    }

    public function show(string $property, User $user)
    {
        $property = property::findOrFail($property);
        return view('property.show', compact('property'));
    }

    public function store(Request $request){
        $validated = $request->validate([
          'title' => 'required',
          'area' => 'required',
          'desc' => 'required',
          'status' => 'required',
          'price' => 'required',
          'type' => 'required',
          'image' => 'required|mimes:jpg,png,jpeg|max:1024'
          
            
          
        ]);


        $newImageName = time() . '-' . $request->status . '.' .
        $request->image->extension();
        $request->image->move(public_path('img/properties/'), $newImageName);



        $save = property::create([
            'title' => $request->title,
            'area'  => $request->area,
            'desc'  => $request->desc,
            'status' => $request->status,
            'price'  => $request->price,
            'type'  => $request->type,
            'image'  => $newImageName
           
        ]);

        $save->save();
       
        Alert::success('Property Successfully Listed!!');
    
        return view('property.create');

    }


    public function edit(Property $property)
    {
        return view('property.edit', ['property' => $property]);
    }

    public function update(Request $request, Property $property)
    {

        $property = property::all();

        $request->validate([
            'title' => 'required',
            'area' => 'required',
            'desc' => 'required',
            'status' => 'required',
            'price' => 'required',
            'type' => 'required',
            
        ]);

        
         $Property = property::findOrfail($property);
         $Property->update($request->all());
       

 
         return view('property.list');
    }
    








    public function x_removeProperty(Request $request){
        $alert = [
            'message' => 'Unable to do action',
            'result' => false
        ];

        $id = decrypt($request->id);

        $isDeleted = property::where('id', $id)->delete();
        if($isDeleted){
            $alert = [
                'message' => 'Property has been Deleted!',
                'result' => true,
                'icon' => 'success',
                'title' => 'success'
            ];
            
        }

        return json_encode($alert);
    }
   

}