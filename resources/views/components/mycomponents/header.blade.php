<header class="flex flex-row items-center justify-between  w-screen bg-{{$color}} text-white px-[150px]">   
    <x-MyComponents.axieslogo/>
    <x-nav-link class="flex flex-row items-center justify-center gap-x-[40px]">
        <a href="#">Home</a>       
        <a href="#">Explore</a>
        <a href="#">Activity</a>
        <a href="#">Community</a>
        <a href="#">Pages</a>
        <a href="#">Contact</a>    
    </x-nav-link>

    <div class="flex flex-row items-center gap-x-[20px] ms-[100px]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="search" width="16px" height="16px" fill="white"><g data-name="Layer 2"><path d="m20.71 19.29-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" data-name="search"></path></g></svg>

        <button class="rounded-3xl border-2 border-blue-700 w-[170px] h-[35px] flex gap-x-[10px] justify-center items-center">
            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8072 4.98483H17.3332C17.3332 2.15383 15.6369 0.5 12.7628 0.5H5.23688C2.3628 0.5 0.666504 2.15383 0.666504 4.94872V11.0513C0.666504 13.8462 2.3628 15.5 5.23688 15.5H12.7628C15.6369 15.5 17.3332 13.8462 17.3332 11.0513V10.7913H13.8072C12.1708 10.7913 10.8443 9.49793 10.8443 7.9025C10.8443 6.30707 12.1708 5.01372 13.8072 5.01372V4.98483ZM13.8072 6.22701H16.711C17.0546 6.22701 17.3332 6.49861 17.3332 6.83365V8.94247C17.3292 9.27588 17.0529 9.54521 16.711 9.54911H13.8739C13.0455 9.55998 12.3211 9.00698 12.1332 8.22027C12.0391 7.73191 12.1712 7.22797 12.4941 6.84351C12.817 6.45906 13.2976 6.2334 13.8072 6.22701ZM13.9332 8.44415H14.2072C14.5591 8.44415 14.8443 8.16608 14.8443 7.82306C14.8443 7.48004 14.5591 7.20197 14.2072 7.20197H13.9332C13.7649 7.20004 13.6028 7.26387 13.4832 7.3792C13.3635 7.49453 13.2961 7.65177 13.2961 7.81584C13.2961 8.16005 13.5802 8.44019 13.9332 8.44415ZM4.61465 4.98483H9.31835C9.67017 4.98483 9.95539 4.70676 9.95539 4.36375C9.95539 4.02073 9.67017 3.74266 9.31835 3.74266H4.61465C4.26569 3.74263 3.98167 4.01633 3.97761 4.35652C3.97759 4.70073 4.26163 4.98088 4.61465 4.98483Z" fill="white"/>
            </svg>
    
            <span>Wallet connect</span>
        
        </button>
    </div>
</header>