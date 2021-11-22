<!DOCTYPE html>

<title>blog</title>
{{-- <link rel="stylesheet" href="app.css"> --}}
<link rel="stylesheet" href="{{asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<footer class="footer bg-transparent relative pt-1 border-b-2 border-blue-700 mt-12">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-around">
                <div class="flex flex-col text-green-600 hover:text-green-500">
                    <span class="font-bold text-gray-700 uppercase mb-2">Social</span>
                    <span class="my-2"><a href="#" class="  text-md ">Twitter</a></span>
                    <span class="my-2"><a href="#" class="  text-md ">FaceBook</a></span>
                    <span class="my-2"><a href="#" class="  text-md ">Instgram</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Work</span>
                    <span class="my-2"><a href="#" class=" text-md hover:text-blue-500">GitHub</a></span>
                    <span class="my-2"><a href="#" class="  text-md hover:text-blue-500">LinkedIn</a></span>
                    <span class="my-2"><a href="#" class=" text-md hover:text-blue-500">Up Work</a></span>
                </div>
                {{-- <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 3</span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    © 2021 by Dev Dhaif
                </p>
            </div>
        </div>
    </div>
</footer>