
<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Author" path="Home/Pages/Author" linkName="Author"/>
 
    <div class="w-[900px] bg-inherit flex flex-col gap-y-[40px] py-[40px]">
        
        <x-MyComponents.author-card :path="{{$path}}" :author="{{$author}}"/>

     
        <x-MyComponents.cardsdivdisplay/>


    </div>

    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>


