<div class="w-[900px] h-[200px] bg-zinc-800 rounded-lg">
   <div class="w-[900px] h-[155px] bg-inherit flex justify-end items-center rounded-t-lg">
       
        <img src="{{$path ?? ''}}" alt="" class="w-[150px] h-[165px] bg-gray-400 rounded-lg relative top-[20px] left-[-25px]">
        
        <div class="flex justify-between w-[700px] h-[100px] ">
            <div class="flex flex-col w-[350px] h-[100px]">
                <span class="text-[16px] text-white">Author Profile</span>
                <h1 class="text-[20px] text-white font-bold">{{$author ?? ''}}</h1>
            </div>
            <div class="flex justify-between w-[350px] h-[100px] px-[40px]">                
                <div class="flex gap-x-[12px]">
                    <button class="w-[30px] h-[30px] bg-white flex justify-center items-center rounded-lg"> <x-bi-facebook /> </button>
                    <button class="w-[30px] h-[30px] bg-white flex justify-center items-center rounded-lg">@svg('bi-twitter')</button>
                    <button class="w-[30px] h-[30px] bg-white flex justify-center items-center rounded-lg"> <x-bi-google /> </button>
                    <button class="w-[30px] h-[30px] bg-white flex justify-center items-center rounded-lg">@svg('bi-twitch')</button>
                </div>
                <button class="flex justify-center items-center w-[90px] h-[35px] border-white border-2 text-white text-[14px] font-bold rounded-full">Follow</button>
            </div>
        </div>
   </div>
   <div class="w-[900px] h-[45px] bg-zinc-700 flex justify-end items-center rounded-b-lg">
        <nav class="w-[650px] h-[26px] bg-inherit text-white text-[16px] font-bold flex gap-x-[60px] items-center rounded-b-lg">
            <a href="">ALL</a>
            <a href="">ART</a>
            <a href="">ALL</a>
            <a href="">MUSIC</a>
            <a href="">COLLECTIBLES</a>
            <a href="">SPORT</a>
        </nav>
   </div>
</div>