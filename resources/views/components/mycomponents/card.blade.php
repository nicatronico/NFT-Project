
<div class="w-[260px] h-[410px] bg-gray-600 text-white flex flex-col  justify-center items-center gap-y-[10px] rounded-[20px]">
    <div class="w-[230px] mb-[-20px]">
        <img src="{{$source}}" alt="NFT image" class="w-[230px] h-[200px] rounded-[20px]">
        <button class="flex gap-x-[5px] justify-center items-center w-[60px] h-[25px] bg-black rounded-[5px] relative top-[-190px] right-[-160px]">
            <svg width="12" height="10" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z" fill="white"/>
            </svg>
           <span class="text-[12px] font-bold">{{$likes}}</span>
        </button>
    </div>

    <h1 class="w-[230px] text-[18px] font-bold">"{{$title}}"</h1>

    <div class="flex justify-between items-center w-[230px] gap-y-[8px]">
        <div class="flex gap-x-[10px] justify-center items-center">
            <img src="{{$source}}" alt="{{$author}}.' image'" class="w-[35px] h-[35px] rounded-[10px]" >
            <div class="flex flex-col gap-y-[-5px]">
                <span class="text-[14px] text-zinc-400">Creator</span>
                <span class="text-[12px] font-bold">{{$author}}</span>
            </div>
        </div>
        <div class="rounded-[5px] w-[50px] h-[25px] bg-blue-800 flex justify-center items-center">
            <span class="text-[10px] font-bold">BSC</span>
        </div>
    </div>

    <hr class="w-[230px] text-black">

    <div class="w-[230px] flex items-center justify-between">
        <div>
            <span class="text-[14px] text-zinc-400">Current Bid</span>
            <div>
                @php
                    $USD_ETH_Price = 1.755;
                    $USD_Price = $price * $USD_ETH_Price;               
                
                @endphp
                <span class="text-[16px] font-bold leading-7">{{$price}} ETH</span> <span class="text-[14px] leading-7">= $USD_Price</span>
                
            </div>            
        </div>
        <div>
            <svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.496 3.65724C16.2647 3.55428 16.002 3.5474 15.7656 3.63813C15.5293 3.72886 15.3387 3.90976 15.2357 4.14103L15.1081 4.42756C14.435 3.08867 13.3975 1.9671 12.1149 1.19197C10.8324 0.416837 9.35705 0.0196605 7.85873 0.046167C6.3604 0.0726735 4.90001 0.521785 3.64571 1.3418C2.39141 2.16181 1.39419 3.31937 0.768851 4.68123C0.716329 4.79515 0.686775 4.9183 0.68188 5.04365C0.676984 5.169 0.696843 5.29408 0.74032 5.41175C0.783798 5.52941 0.850042 5.63736 0.935264 5.72941C1.02049 5.82146 1.12302 5.89581 1.23699 5.94821C1.35097 6.0006 1.47415 6.03002 1.59951 6.03478C1.72486 6.03954 1.84992 6.01955 1.96754 5.97594C2.08516 5.93234 2.19303 5.86598 2.28499 5.78065C2.37695 5.69533 2.45119 5.59272 2.50346 5.47869C2.97898 4.44299 3.73746 3.56272 4.6915 2.93934C5.64554 2.31596 6.75631 1.97484 7.89579 1.9553C9.03527 1.93575 10.1571 2.23857 11.1319 2.82886C12.1068 3.41914 12.895 4.27287 13.4058 5.29166L12.8652 5.05095C12.6341 4.94955 12.3724 4.94373 12.1371 5.03477C11.9017 5.12581 11.712 5.30631 11.6094 5.5368C11.5068 5.7673 11.4996 6.02905 11.5894 6.26483C11.6792 6.50062 11.8587 6.69126 12.0887 6.7951L14.5937 7.91025L14.5982 7.91228C14.7128 7.96372 14.8364 7.99203 14.9619 7.99561C15.0875 7.99919 15.2125 7.97796 15.3298 7.93314C15.4471 7.88831 15.5544 7.82078 15.6456 7.7344C15.7368 7.64803 15.81 7.54451 15.8611 7.42978L16.9796 4.91756C17.0826 4.68629 17.0895 4.42359 16.9988 4.18724C16.9081 3.95089 16.7273 3.76024 16.496 3.65724Z" fill="white"/>
            </svg>
            <span class="text-zinc-400">View History</span>
        </div>
    </div>
</div>