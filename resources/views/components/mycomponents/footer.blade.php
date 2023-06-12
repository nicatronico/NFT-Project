<footer class="flex flex-row gap-x-[100px] w-screen px-[150px] py-[80px] bg-black text-white w-screen h-[360px] text-[12px]">
    <div class="w-[200px] relative top-[-20px]">
        <x-MyComponents.axieslogo/>
        <p class="w-60 my-[18px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor magnam sit eveniet voluptatum, alias eaque laborum quod atque cum voluptates sequi ea explicabo, molestiae quos tempore dolorem deleniti earum repellat!</p>
        <div class="flex gap-x-[12px]">
            <button class="w-[30px] h-[30px] bg-gray-600 flex justify-center items-center rounded-lg"> <x-bi-facebook /> </button>
            <button class="w-[30px] h-[30px] bg-gray-600 flex justify-center items-center rounded-lg">@svg('bi-twitter')</button>
            <button class="w-[30px] h-[30px] bg-gray-600 flex justify-center items-center rounded-lg"> <x-bi-google /> </button>
            <button class="w-[30px] h-[30px] bg-gray-600 flex justify-center items-center rounded-lg">@svg('bi-twitch')</button>
        </div>
    </div>


    <div class="w-[350px] flex flex-col gap-y-[16px]">
        <h2 class="text-[16px] font-semibold w-[100px]">My account</h2>
        <a href="#">Authors</a>
        <a href="#">Collection</a>
        <a href="#">Author Profile</a>
        <a href="#">Create Collection</a>
    </div>        

    <div class="w-[310px] flex flex-col gap-y-[16px]">
        <h2 class="text-[16px] font-semibold">Resources</h2>
        <a href="#">Help & support</a>
        <a href="#">Live Auctions</a>
        <a href="#">Item Details</a>
        <a href="#">Activity</a>
    </div>

    <div class="w-[310px] flex flex-col gap-y-[16px]">
        <h2 class="text-[16px] font-semibold">Company</h2>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
        <a href="#">Our Blog</a>
        <a href="#">Discover</a>
    </div>

    <div class="w-[312px]">
        <h2 class="text-[16px] font-semibold">Subscribe Us</h2>
        
        <form action="" class="flex my-[15px]">
            <input type="text" class="w-[220px] h-[35px] rounded-lg border border-gray-400 bg-black">
            <button class="bg-blue-500 w-[35px] h-[35px] relative right-[35px] rounded-r-lg">
                {{svg('ri-send-plane-2-fill')}}   
            </button>
        </form>
    </div>
</footer>