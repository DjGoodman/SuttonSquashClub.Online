@props(['img','header','text','slug','linktext'])

<div class="card">
    <img src = "{{$img}}"  class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $header }}</h5>
        <p class="card-text">{{ $text }}<br />
            <a href="/{{ $slug }}.php">{{ $linktext }}</a>
        </p>
    </div>
</div>