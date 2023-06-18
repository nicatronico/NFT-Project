
<div class="bg-inherit flex gap-x-[35px] overflow-hidden justify-center">
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

<div id = buttons_container class="flex gap-x-[25px] items-center justify-center">
    <button id = buttonLeft>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <x-MyComponents.button-indicator width="15px" height="15px" color="white"/>
    <x-MyComponents.button-indicator width="10px" height="10px" color="inherit"/>
    <x-MyComponents.button-indicator width="10px" height="10px" color="inherit"/>
    <x-MyComponents.button-indicator width="10px" height="10px" color="inherit"/>

    <button id = buttonLeft>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</div>


