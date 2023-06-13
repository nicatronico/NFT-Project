<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Author;
use App\Models\Collection;

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
            $author = Author::query()->create(['name'=>$request->author, 'description'=>"New author. One item created only"]);
        }        
        
        $item->author_id = $author->id;
      


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
