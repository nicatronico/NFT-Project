
<div class="w-screen">
    <x-MyComponents.changingheader>        
            <div class="w-screen h-[216px] flex flex-col justify-center items-center bg-gray-500 gap-y-[12px] border-t-2 border-t-gray-400">
                <h1 class="w-[320px] h-[60px] text-[50px] font-bold leading-[60px] text-white text-center">{{$title}}</h1>
                <nav  class="text-[18px] font-normal leading-[28px] text-gray-400">
                    <a href="">Home</a>/<a href="">Pages</a>/<a href="{{$path}}" class="text-white">{{$linkName}}</a>
                </nav>
            </div>
    </x-MyComponents.changingheader>
</div>