
<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Item Detail" url="Home/Pages/ItemDetail"/>
    
    <div class="w-screen bg-gray-900 flex justify-center gap-x-[30px]">
        <div class="w-[1000px] bg-gray-900 flex flex-col justify-center py-[80px] gap-x-[50px] gap-y-[25px]">
            <div class="flex justify-center gap-x-[60px]">
                <div class="min-w-[350px] flex flex-col bg-gray-600">
                    <img src="https://images.pexels.com/photos/8105039/pexels-photo-8105039.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Item image" class="w-[350px] h-[360px]">
                </div>
                <div class="w-[450px] flex flex-col text-white">
                    <h1 class="text-2xl font-bold">"The Fantasy Flower Illustration"</h1>
                    <div>
                        <div class="flex gap-x-[10px]">
                            <button class="flex gap-x-[5px] justify-center items-center w-[60px] h-[25px] bg-gray-700 relative top-[15px] right-[0px]  rounded-full">
                                <x-bi-eye />
                                <span class="text-[12px] font-bold">{{$likes ?? '0'}}</span>
                            </button>
                            <button class="flex gap-x-[5px] justify-center items-center w-[60px] h-[25px] bg-black relative top-[15px] right-[0px] rounded-full bg-gray-700">
                                <svg width="12" height="10" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z" fill="white"/>
                                </svg>
                                <span class="text-[12px] font-bold">{{$likes ?? '0'}}</span>
                            </button>
                        </div>

                       <div class="flex bg-slate-700 w-[250px] rounded-lg mt-[40px] items-center justifiy-center px-[10px] gap-x-[10px] mb-[20px]">
                            <div class="w-[35px] h-[35px]">
                                <img src="https://images.pexels.com/photos/895259/pexels-photo-895259.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-[35px] h-[35px] rounded-lg">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-400">Created by</span>
                                <span class="text-white font-bold">Firulays</span>
                            </div>
                       </div>


                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut optio officiis. Autem, officia. Nihil in aut quos repudiandae, numquam beatae voluptatem? Error ipsam delectus recusandae fuga deserunt voluptate beatae.</p>


                        <div class="flex bg-slate-700 w-[250px] h-[35px] rounded-lg mt-[40px] items-center px-[10px] gap-x-[10px] mb-[20px] text-[12px]">                         
                                <span class="text-gray-400">Price </span>
                                <span class="">4.78 ETH</span>
                                <span class=" "> = $12.246</span>
                       </div>


                    </div>
                </div>
            </div>
            <h2 class="mt-[35px]">More From This Author</h2>
            <x-MyComponents.small-carrousell/>
        </div>
    </div>
    
    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>