<div class="w-[900px] bg-inherit flex flex-col gap-[60px] items-center">

    <div class="w-[900px] h-[820px] bg-inherit flex flex-wrap gap-[60px] overflow-hidden">
       
    @php
        
        $items = DB::select('select * from items');
        
    @endphp 
    

    @foreach($items as $item)
        @php
            $path = $item->image;
            $title = $item->title;
            $author_id = $item->author_id;
            $author = DB::table('authors')->select('name')->where('id', '=', $item->author_id)->get();
            $author = $author[0]->name;

            $likes = DB::table('likes')->select('likeable_type')->where('likeable_id', '=', $item->id, 'and', 'likeable_type', '=', 'App\Models\Item')->get();
            $likes = count($likes);
            $price = $item->price;
           
        @endphp
            <x-MyComponents.card id="card">
                <x-slot:path>
                    {{$path}}
                </x-slot>

                <x-slot:title>
                    {{$title ?? ''}}
                </x-slot>

                <x-slot:author>
                    {{$author ?? ''}}
                </x-slot>

                <x-slot:likes>
                    {{$likes ?? ''}}
                </x-slot>

                <x-slot:price>
                    {{$price ?? ''}}
                </x-slot>
           </x-MyComponents.card>       
    
    @endforeach
    </div>

    <button class="w-[120px] h-[35px] border-white border-2 text-white text-[14px] font-bold rounded-full">Load More</button>

</div>

