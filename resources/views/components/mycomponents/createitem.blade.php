
<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Create Item" path='CreateItem' linkName='CreateItem'/>
    <div class="w-screen bg-gray-900 flex justify-center px-[255px] py-[80px] gap-x-[80px]">
        <div class="flex flex-col gap-y-[30px]"> 
           <x-MyComponents.card :path="$path ?? ''" :likes="0" :title="$title ?? ''" :author="$author ?? ''" :price="$price ?? ''"/>
            <button type='submit' form = "form" class="w-[260px] h-[35px] text-white text-[18px] rounded-[5px] border-2 border-inherit">Save the new item</button>
        </div>

   

        <div>
            <form id = "form" action="{{action([\App\Http\Controllers\ItemController::class, 'store'])}}" method ="post" class="w-[450px] flex flex-col gap-y-[15px] bg-inherit text-white">
                @csrf
                <label for="path" class="text-[20px] font-bold leading-[26px] text-white">Upload file</label>
                <input type="text" placeholder="PNG, JPG, GIF, WEBP or MP4, Max 200mb" name="path" class="w-[450px] h-[75px] rounded-[8px] border-2 border-white bg-inherit text-[12px]">
                @error('path')
                    <p>{{$path}}</p>
                @enderror
                
                
                
                <div class="w-[120px] h-[40px] relative rounded-[30px] border-2 border-white top-[-72px] left-[310px] text-white flex justify-center items-center">
                    <span>Upload File</span> 
                </div>

                <input type="file" name="inputFile" class="w-[118px] h-[60px] relative top-[-128px] left-[311px] text-gray-900 bg-transparent opacity-0">

                <div class="flex justify-between mt-[-120px]">

                    <div class="w-[330px] flex flex-col justify-center gap-y-[24px]">
                        <label for="author" class="text-[20px] font-bold leading-[26px] text-white">Author</label>
                        <input type="text" name="author" class="w-[260px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('author')
                            <p>{{$author}}</p>
                        @enderror
                    </div>

                   
                    <div class="w-[150px] flex flex-col justify-center gap-y-[24px]">
                        <label for="Category" class="text-[20px] font-bold leading-[26px] text-white">Category</label>
                        <select form='form' name="category" id="category" class="w-[150px] h-[35px] rounded-[8px] border-2 border-white bg-inherit text-white">
                            <option value="Art" class="bg-zinc-500">Art</option>
                            <option value="Music" class="bg-zinc-500">Music</option>
                            <option value="Domain Names" class="bg-zinc-500">Domain Names</option>
                            <option value="Virtual Worlds" class="bg-zinc-500">Virtual Worlds</option>
                            <option value="Trading Cards" class="bg-zinc-500">Trading Cards</option>
                            <option value="Collectibles" class="bg-zinc-500">Collectibles</option>
                            <option value="Sports" class="bg-zinc-500">Sports</option>
                            <option value="Utility" class="bg-zinc-500">Utility</option>
                        </select>
                    </div>

                </div>

                <label for="price" class="text-[20px] font-bold leading-[26px] text-white">Price</label>
                <input type="text" name="price" class="w-[450px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                @error('price')
                    <p>{{$price}}</p>
                @enderror

                <label for="title" class="text-[20px] font-bold leading-[26px] text-white">Title</label>
                <input type="text" name="title" class="w-[450px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                @error('title')
                    <p>{{$title}}</p>
                @enderror


                <label for="description" class="text-[20px] font-bold leading-[26px] text-white">Description</label>
                <input type="text" name="description" class="w-[450px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                @error('description')
                    <p>{{$description}}</p>
                @enderror


                <div class="w-[450px] flex items-center justify-between">

                    <div class="w-[145px] flex flex-col justify-center gap-y-[10px]">
                        <label for="royalties" class="text-[20px] font-bold leading-[26px] text-white">Royalties</label>
                        <input type="text" name="royalties" class="w-[145px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('royalties')
                            <p>{{$royalties}}</p>
                        @enderror
                    </div>

                    <div class="w-[145px] flex flex-col justify-center gap-y-[10px]">
                        <label for="size" class="text-[20px] font-bold leading-[26px] text-white">Size</label>
                        <input type="text" name="size" class="w-[145px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('size')
                            <p>{{$size}}</p>
                        @enderror
                    </div>

                    <div class="w-[145px] flex flex-col justify-center gap-y-[10px]">
                        <label for="collection" class="text-[20px] font-bold leading-[26px] text-white">Collection</label>
                        <input type="text" name="collection" class="w-[145px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('collection')
                            <p>{{$collection}}</p>
                        @enderror
                  
                    </div>

                </div>
            </form>
        </div>
    </div>



    
    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>

