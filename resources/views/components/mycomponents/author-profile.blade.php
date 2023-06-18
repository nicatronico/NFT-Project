
<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Author" path="Home/Pages/Author" linkName="Author"/>
 
    <div class="w-[900px] bg-inherit flex flex-col gap-y-[40px] py-[40px]">        
        <x-MyComponents.author-card>
            <x-slot:path>
                {{$path ?? 'https://images.pexels.com/photos/1468379/pexels-photo-1468379.jpeg?auto=compress&cs=tinysrgb&w=600'}}
            </x-slot:path> 
                
            <x-slot:author>
                {{$author ?? 'La china'}}
            </x-slot:path> 

        </x-MyComponents.author-card>
        
        
        <x-MyComponents.cardsdivdisplay/>
    </div>

    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>


