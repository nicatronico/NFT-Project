
<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Explore" url="Home/Pages/Explore"/>
    <div class="w-screen bg-gray-900 flex justify-center py-[80px] gap-x-[50px]">
        <div class="flex flex-col gap-y-[30px] w-[150px] text-white"> 
         
            <div>
                <h2 class="text-[18px] font-bold">Categories</h2>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Art" value="Art"/>
                    <label>Art</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Music" value="Mucic"/>
                    <label>Music</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="DomainNames" value="DomainNames"/>
                    <label>Domain Names</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="VitualWorlds" value="VitualWorlds"/>
                    <label>Vitual Worlds</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="TradingCards" value="TradingCards"/>
                    <label>Trading Cards</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Collectibles" value="Collectibles"/>
                    <label>Collectibles</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Sports" value="Sports"/>
                    <label>Sports</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Utilities" value="Utilities"/>
                    <label>Utilities</label>
                </div>

                
                
            </div>


            <hr>

            <div>
                <h2 class="text-[18px] font-bold">Collections</h2>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Abstraction" value="Abstraction"/>
                    <label>Abstraction</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Music" value="Mucic"/>
                    <label>Music</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Patternlicious" value="Patternlicious"/>
                    <label>Patternlicious</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Sketchify" value="Sketchify"/>
                    <label>Sketchify</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Cartoonism" value="Cartoonism"/>
                    <label>Cartoonism</label>
                </div>

               

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Virtuland" value="Virtuland"/>
                    <label>Virtuland</label>
                </div>

                <div class="text-[14px] flex gap-x-[10px] mt-[8px]">                
                    <input type="checkbox" id="Papercut" value="Papercut"/>
                    <label>Papercut</label>
                </div>                
                
            </div>

        
            
        </div>

        <x-MyComponents.cardsdivdisplay/>   

    </div>
    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>

