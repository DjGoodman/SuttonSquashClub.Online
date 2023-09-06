<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">


        <div class="jumbotron text-center container container-fluid">
            <h1>Club Calendar</h1>
        </div>
        <div class="container container-fluid">
            <div class="row" style="height: 500px;">
                <iframe
                    src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23616161&ctz=Europe%2FLondon&src=NDgzYjk5NDdmODM3ZDk1NTliYmUwOGY2MjBjMjY2ZTViNWU5YmUzM2ZiODgxMTI5YmI1MDFjZDRiOTJhZWQ4M0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23795548"
                    style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
            </div>

    </x-slot>
</x-layout>
