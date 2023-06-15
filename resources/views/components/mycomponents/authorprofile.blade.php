<x-MyComponents.maintemplate>
    <x-MyComponents.changingheadertext title="Author" url="Home/pages/Author"/>
    <x-MyComponents.authorprofile/>
        {{$slot}}
    <x-MyComponents.footer/>
</x-MyComponents.maintemplate>