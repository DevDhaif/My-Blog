<!DOCTYPE html>

<title>blog</title>
{{-- <link rel="stylesheet" href="app.css"> --}}
<link rel="stylesheet" href="{{asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<body>
    {{$slot}}
</body>