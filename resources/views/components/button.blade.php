<!DOCTYPE html>

<title>blog</title>
{{-- <link rel="stylesheet" href="app.css"> --}}
<link rel="stylesheet" href="{{asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<button class="bg-green-500 rounded-xl px-4 mt-3 text-white ">

    {{$slot}}
</button>
