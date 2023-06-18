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
        $request -> validate(
            [
                'image' => 'required',
                'price' => 'required',
                'title' => 'required',
                'description' =>  'required',
                'royalties' =>  'required',
                'size' =>  'required',
                'author' =>  'required',
                'collection' => 'required'
                ]
        );
        
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
      //  'path' => $request->path,
        'path' => "https://images.pexels.com/photos/2150/sky-space-dark-galaxy.jpg?auto=compress&cs=tinysrgb&w=600",
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
        
    }

    public function getAllItems(){
        $items = Item::query()->get();
        return(['items' -> $items]);
    }

    

   

}
