<footer>
    <div>
        <x-MyComponents.axieslogo/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor magnam sit eveniet voluptatum, alias eaque laborum quod atque cum voluptates sequi ea explicabo, molestiae quos tempore dolorem deleniti earum repellat!</p>
        <div>
            <button> <x-bi-facebook /> </button>
            <button>@svg('bi-twitter')</button>
            <button> <x-bi-google /> </button>
            <button>@svg('bi-twitch')</button>
        </div>
    </div>


    <div>
        <h2>My account</h2>
        <a href="#">Authors</a>
        <a href="#">Collection</a>
        <a href="#">Author Profile</a>
        <a href="#">Create Collection</a>
    </div>        

    <div>
        <h2>Resources</h2>
        <a href="#">Help & support</a>
        <a href="#">Live Auctions</a>
        <a href="#">Item Details</a>
        <a href="#">Activity</a>
    </div>

    <div>
        <h2>Company</h2>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
        <a href="#">Our Blog</a>
        <a href="#">Discover</a>
    </div>

    <div>
        <h2>Company</h2>
        
        <form action="">
            <input type="text">
            <button>
                {{svg('ri-send-plane-2-fill')}}   
            </button>
        </form>
    </div>
</footer>