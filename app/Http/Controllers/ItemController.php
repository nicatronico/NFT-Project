<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Author;
use App\Models\Collection;

use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item();

        $item->image = $request->path;
        $item->price = $request->price;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->royalties = $request->royalties;
        $item->size = $request->size;

        $author=DB::table('authors')->where('name', $request->author)->first();
        
        if(!$author){
            $data = ['name'=>$request->author, 'description'=>"New author. One item created only"];
          //  $description = "New author. One item created only";
            $author = Author::query()->create($data);
        }                
        $item->author_id = $author->id;


        $collection=DB::table('collections')->where('name', $request->collection)->first();
        
        if(!$collection){
            $collection = Collection::query()->create(['name'=>$request->collection]);
        }                
        $item->collection_id = $collection->id;    
        
        dd($request->category);

        $category=DB::table('categories')->where(["name" => $request->category])->first();
    
       
        $item->category_id = $category->id;      
        

       
      
        return view('components.MyComponents.createitem',
        [
        'image' => $request->path,
        'price' => $request->price,
        'title' => $request->title,
        'description' => $request->description,
        'royalties' => $request->royalties,
        'size' => $request->size,
        'author' => $request->author
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
