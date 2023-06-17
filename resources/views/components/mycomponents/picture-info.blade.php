

<div class="flex gap-x-[10px] rounded-lg">               
            <div class="w-[{{$size}}] h-[{{$size}}] bg-gray-900" >
                <img src="{{$authorPicture}}" alt="" class="w-[{{$size}}] h-[{{$size}}] rounded-lg">
            </div>
            <div class="flex flex-col gap-y-[-5px] text-white justify-end">
                {{$slot}}
            </div>
</div>