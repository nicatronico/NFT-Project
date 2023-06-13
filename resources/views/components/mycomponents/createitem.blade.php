

<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Create Item" url="src"/>
    <div class="w-screen bg-gray-900 flex justify-center px-[255px] py-[80px] gap-x-[80px]">
        <div> 
          
              
        </div>
        <div>
            <form action="" enctype="multipart/form-data" method ="post" class="w-[450px] flex flex-col gap-y-[15px] bg-inherit">
                @csrf
                <label for="path" class="text-[20px] font-bold leading-[26px] text-white">Upload file</label>
                <input type="text" placeholder="PNG, JPG, GIF, WEBP or MP4, Max 200mb" name="path" class="w-[450px] h-[75px] rounded-[8px] border-2 border-white bg-inherit text-[12px]">
                @error('path')
                    <p>{{$path}}</p>
                @enderror
                
                
                
                <button class="w-[120px] h-[40px] relative rounded-[30px] border-2 border-white top-[-72px] left-[310px] text-white">Upload File</button>

                <input type="file" class="w-[100px] h-[50px] relative top-[-120px] left-[320px] text-gray-900 bg-gray-900 invisible">


                <div class="flex justify-between">

                    <div class="w-[330px] flex flex-col justify-center gap-y-[24px]">
                        <label for="author" class="text-[20px] font-bold leading-[26px] text-white">Author</label>
                        <input type="text" name="author" class="w-[300px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('author')
                            <p>{{$author}}</p>
                        @enderror
                    </div>
                    
                    <div class="w-[150px] flex flex-col justify-center gap-y-[24px]">
                        <label for="Category" class="text-[20px] font-bold leading-[26px] text-white">Category</label>
                        <select name="collection" id="collection" class="w-[130px] h-[35px] rounded-[8px] border-2 border-white bg-inherit text-white">
                            <option value="art" class="bg-zinc-500">Art</option>
                            <option value="music" class="bg-zinc-500">Music</option>
                            <option value="domainName" class="bg-zinc-500">Domain Names</option>
                            <option value="virtualWorld" class="bg-zinc-500">Virtual Worlds</option>
                            <option value="tradingCard" class="bg-zinc-500">Trading Cards</option>
                            <option value="collectibles" class="bg-zinc-500">Collectibles</option>
                            <option value="sport" class="bg-zinc-500">Sport</option>
                            <option value="utility" class="bg-zinc-500">Utility</option>
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

                    <div class="w-[145px] flex flex-col justify-center gap-y-[24px]">
                        <label for="royalties" class="text-[20px] font-bold leading-[26px] text-white">Royalties</label>
                        <input type="text" name="royalties" class="w-[145px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('royalties')
                            <p>{{$royalties}}</p>
                        @enderror
                    </div>

                    <div class="w-[145px] flex flex-col justify-center gap-y-[24px]">
                        <label for="size" class="text-[20px] font-bold leading-[26px] text-white">Size</label>
                        <input type="text" name="size" class="w-[145px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('size')
                            <p>{{$size}}</p>
                        @enderror
                    </div>

                    <div class="w-[145px] flex flex-col justify-center gap-y-[24px]">
                        <label for="collection" class="text-[20px] font-bold leading-[26px] text-white">Collection</label>
                        <input type="text" name="collection" class="w-[145px] h-[35px] rounded-[8px] border-2 border-white bg-inherit">
                        @error('collection')
                            <p>{{$collection}}</p>
                        @enderror
                    <!--   
                        <select name="collection" id="collection" class="w-[210px] h-[45px] rounded-[8px] border-2 border-white bg-inherit text-white">
                            <option value="abstraction" class="bg-zinc-500">Abstraction</option>
                            <option value="patternlicious" class="bg-zinc-500">Patternlicious</option>
                            <option value="sketchify" class="bg-zinc-500">Sketchify</option>
                            <option value="cartoonism" class="bg-zinc-500">Cartoonism</option>
                            <option value="virtuland" class="bg-zinc-500">Virtuland</option>
                            <option value="papercut" class="bg-zinc-500">Papercut</option>
                        </select>
                    -->

                    </div>

                </div>
            </form>
        </div>
    </div>
    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>

