

<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Create Item" url="src"/>
    <div class="w-screen h-[922px] bg-gray-900 flex justify-center px-[255px] py-[80px] gap-x-[80px]">
        <div>  
            <x-MyComponents.card :source="$url" :likes="$likes" :title="$title" :author="$author" :price="$price"/>        
               
                     
        </div>
        <div>
            <form action="" class="w-[750px] flex flex-col gap-y-[24px] bg-inherit">
                <label for="path" class="text-[20px] font-bold leading-[26px] text-white">Upload file</label>
                <input type="text" placeholder="PNG, JPG, GIF, WEBP or MP4, Max 200mb" name="path" class="w-[700px] h-[100px] rounded-[8px] border-2 border-white bg-inherit">
                <button class="w-[150px] h-[50px] relative rounded-[30px] border-2 border-white top-[-100px] left-[520px] text-white">Upload File</button>



                <label for="price" class="text-[20px] font-bold leading-[26px] text-white">Price</label>
                <input type="text" name="price" class="w-[700px] h-[45px] rounded-[8px] border-2 border-white bg-inherit">

                <label for="title" class="text-[20px] font-bold leading-[26px] text-white">Title</label>
                <input type="text" class="w-[700px] h-[45px] rounded-[8px] border-2 border-white bg-inherit">

                <label for="description" class="text-[20px] font-bold leading-[26px] text-white">Description</label>
                <input type="text" name="description" class="w-[700px] h-[80px] rounded-[8px] border-2 border-white bg-inherit">

                <div class="w-[700px] flex items-center justify-between">

                    <div class="w-[210px] flex flex-col justify-center gap-y-[24px]">
                        <label for="royalties" class="text-[20px] font-bold leading-[26px] text-white">Royalties</label>
                        <input type="text" name="royalties" class="w-[210px] h-[45px] rounded-[8px] border-2 border-white bg-inherit">
                    </div>

                    <div class="w-[210px] flex flex-col justify-center gap-y-[24px]">
                        <label for="Size" class="text-[20px] font-bold leading-[26px] text-white">Size</label>
                        <input type="text" name="size" class="w-[210px] h-[45px] rounded-[8px] border-2 border-white bg-inherit">
                    </div>

                    <div class="w-[210px] flex flex-col justify-center gap-y-[24px]">
                        <label for="Collection" class="text-[20px] font-bold leading-[26px] text-white">Collection</label>
                        <select name="collection" id="collection" class="w-[210px] h-[45px] rounded-[8px] border-2 border-white bg-inherit text-white">
                            <option value="abstraction" class="bg-zinc-500">Abstraction</option>
                            <option value="patternlicious" class="bg-zinc-500">Patternlicious</option>
                            <option value="sketchify" class="bg-zinc-500">Sketchify</option>
                            <option value="cartoonism" class="bg-zinc-500">Cartoonism</option>
                            <option value="virtuland" class="bg-zinc-500">Virtuland</option>
                            <option value="papercut" class="bg-zinc-500">Papercut</option>
                        </select>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>

