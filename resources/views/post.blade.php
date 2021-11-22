<x-nav></x-nav>

<x-layout>
    
    <article class="max-w-3xl mx-auto p-3 m-3">
        <h1 class="text-3xl leading-6 mt-3">{{$post->title}}</h1>
        <p class="mt-3">
            {!!$post->body!!}
        </p>
        <x-button>

            <a href="/">back</a>
        </x-button>
        {{-- <a href="/" class="text-green-600 mt-3">go back</a> --}}
    </article>
    
    </x-layout>