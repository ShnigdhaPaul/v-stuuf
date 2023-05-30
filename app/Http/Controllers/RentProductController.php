<?php

namespace App\Http\Controllers;

use App\Models\rentProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RentProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $products = rentProduct::paginate(10);
       
        return view('rent.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            {
                $request->validate([
                    'name' => ['required', 'min:3'],
                    'description'=>  ['required'],
                    'availibility'=>  ['required'],
                    'price' =>  ['required'],
                    'quantity' =>  ['required'],
        
                ]);
        
               if($request->hasFile('image')) {
                     $image = $request->file('image');
                     $imageName = time().'.'.$image->getClientOriginalName();
                     Storage::disk('public')->putFileAs('products', $image, $imageName);
        
                    try {
        
                            rentProduct::create([
                                'name' => $request->name,
                                'description'=> $request->description,
                                'availibility'=>$request->availibility,
                                'price' => $request->price,
                                'quantity' => $request->quantity,
                                'image' => $imageName,
                                'user_id' => Auth::id()
                            ]);
                            return redirect()->route('dashboard.index')->with('msg', 'product inserted successfully');
        
                    }catch(\Exception $e) {
                       return  redirect()->back()->with('msg', 'problem with store products');
                     }
               } else {
                   return redirect()->back()->with('msg', 'you should select an image');
               }
            }
        
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = rentProduct::find($id);
        return view('rent.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = rentProduct::find($id);
        return view('rent.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = rentProduct::find($id);

        $request->validate([
            'name' => ['required', 'min:3'],
                    'description'=>  ['required'],
                    'availibility'=>  ['required'],
                    'price' =>  ['required'],
                    'quantity' =>  ['required'],

        ]);

       if($request->hasFile('image')) {
        unlink(public_path().'/storage/products/'.$product->image);
             $image = $request->file('image');
             $imageName = time().'.'.$image->getClientOriginalName();
             Storage::disk('public')->putFileAs('products', $image, $imageName);

             try {

                    $product->update([
                        'name' => $request->name,
                        'description'=> $request->description,
                        'availibility'=>$request->availibility,
                        'price' => $request->price,
                        'quantity' => $request->quantity,
                        'image' => $imageName,
                        'user_id' => Auth::id()
                    ]);

                    
                    return redirect()->route('rent.index')->with('msg', 'product updated successfully');

             }catch(\Exception $e) {
               return  redirect()->back()->with('msg', 'problem with update products');
             }
       } else {

        try {

            $product->update([
                'name' => $request->name,
                'description'=> $request->description,
                'availibility'=>$request->availibility,
                'price' => $request->price,
                'quantity' => $request->quantity,
               
                'user_id' => Auth::id()
            ]);
            return redirect()->route('rent.index')->with('msg', 'product updated successfully');

     }catch(\Exception $e) {
       return  redirect()->back()->with('msg', 'problem with update products');
     }
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = rentProduct::find($id);
        $owner= $product->user->id;
        $authuser=Auth::id();
        if($owner==$authuser){

               if(is_file(public_path().'/storage/products/'.$product->image)) {
                   unlink(public_path().'/storage/products/'.$product->image);
                  $product->delete();
                  return  redirect()->back()->with('msg', 'Deleted successfully');
               } else {
                $product->delete();
                return  redirect()->back()->with('msg', 'Deleted successfully');
               }
            }else{return  redirect()->back()->with('msg', 'you do not have the perrmission');
            }

    }
    }
