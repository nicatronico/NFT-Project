<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>        
    </x-slot>
    <x-MyComponents.header/> 
    <div class="bg-gray-950 flex flex-col justify-center items-center gap-x-[20px] text-white p-[5px] h-[430px]">
        <span class="text-[25px]">Welcome to:</span>
        <x-MyComponents.axieslogo/>
        <span class="text-[20px]">What do you want to do next?</span>
        <span class="text-[20px]">Choose an option from the nav bar.</span>
        
    </div>
    <x-MyComponents.footer/>

</x-app-layout>
