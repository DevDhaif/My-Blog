<x-nav></x-nav>

<x-layout>
    

<div class="relative max-w-7xl mx-auto">

    </div>
    <div class="bg-gray-100  sm:px-6 lg:px-8">
        <div class="text-center py-16 px-4">
      
        <h2 class="headline card">Latest articles</h2>
      
        <p class="mt-5 max-w-2xl mx-auto   text-xl leading-7 text-gray-500 ">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt vero eligendi sunt deleniti aliquam ipsum dolore, dolores laudantium nesciunt. Perspiciatis?
        </p>
        </div>
      
        <!-- cards -->
        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 md:grid-cols-2 lg:max-w-none md:max-w-none">
            @foreach ($posts as $post)
                
            
          <!-- each card -->
          <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <!-- image section -->
            <div class="flex-shrink-0">
                <a href="posts/{{$post->slug}}">
              <img class="h-48 w-full object-cover " src="https://media.istockphoto.com/photos/business-professionals-working-at-new-office-desk-picture-id1271153817?b=1&k=20&m=1271153817&s=170667a&w=0&h=uepHSQJa-qN5LTMyeuffMclSV2xqpt90aYzyqHYGUqg=" alt="">
                </a>
            </div>
            <!-- content section -->
            <div class=" flex-1 p-6 flex flex-col justify-between">
              <div class=" flex-1  ">
                <p class="text-sm leading-5 font-medium text-indigo-600"> blog</p>
              <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                <a href="posts/{{$post->slug}}">
                    {!!$post->title!!}
                </a>
              </h3>
              <p class="mt-3 text-base leading-6 text-gray-600 "> {!!$post->excerpt!!}</p>

              <p class="mt-3 leading-6 text-gray-100 max-h-32 "> {!!$post->body!!}</p>

            </div>
              <!-- author section -->
              <div class="mt-6 flex items-center">
                <div class=" flex-shrink-0">
      
                <img class="w-10 h-10 rounded-full" src="https://images.news18.com/ibnlive/uploads/2021/06/1623900306_untitled-design-2021-06-17t085747.057.png?im=FitAndFill,width=1200,height=1200" alt="">
                </div>
                <div class="ml-3">
                  <p class="text-sm leading-5 font-medium text-gray-900">
                     {!!$post->author!!} 
                    </p>
                  <div class="flex text-sm leading-5 text-gray-500">
                    <time datetime="2021-08-21">
                        {!!$post->time!!}
                      </time>
                    <span class="mx-1">
                      &middot;
                    </span>
                   <span>
                     6 min read
                   </span>
                  </div>
                </div>
              </div>
            </div>
          </div> 
      
          @endforeach
      
          
        </div>
      </div>
    </x-layout>
<x-footer class="mt-52"></x-footer>
{{-- <div class="relative bg-gray-500 py-16 px-4   sm:px-6 lg:px-8 mx-auto">
    <div class="relative max-w-7xl mx-auto">
       <div class="bg-red-400 grid grid-cols-1 h-screen lg:grid-cols-3 md:grid-cols-2 gap-4 w-screen mt-12  max-w-lg mx-auto  lg:max-w-none ">
        @foreach ($posts as $post)
            
        
        <div class="flex  flex-col rounded-lg shadow-2xl overflow-hidden hover:opacity-80 cursor-pointer bg-gray-50">
           <div class="flex-shrink-0">
                <a href="posts/{{$post->slug}}">
                <img class="h-48 w-full object-cover " src="https://media.istockphoto.com/photos/business-professionals-working-at-new-office-desk-picture-id1271153817?b=1&k=20&m=1271153817&s=170667a&w=0&h=uepHSQJa-qN5LTMyeuffMclSV2xqpt90aYzyqHYGUqg=" alt="">
            </a>
            </div>
             <div class="p-6 flex flex-1  flex-col justify-between max-h-42 ">
               <div class="flex-1">
                    <p class="text-lg text-indigo-600 leading-6 font-semibold">
                        
                        <a href="posts/{{$post->slug}}">
                            {{$post->title}}
                        </a>
                    </p>
                    
                    <p class="mt-2 text-base font-medium leading-5 text-gray-600 h-18 max-h-32 overflow-hidden">
                        {{$post->excerpt}}
                    </p>
                </div>
                 <div class=" mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-12 h-12 rounded-full" src="https://images.news18.com/ibnlive/uploads/2021/06/1623900306_untitled-design-2021-06-17t085747.057.png?im=FitAndFill,width=1200,height=1200" alt="">
                    </div>
                    <div class="ml-4">
                        <p class="text-base text-gray-900 leading-7 font-bold">Dhaifallah Ahmed</p>
                        <div class="mt-2 text-gray-400 text-base font-medium leading-4">
                            <time datetime="2021-10-16"> OCT 16, 2021 </time>
                            <span class="mx-1">
                                &middot;
                            </span>
                            <span>6 min read </span>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
         @endforeach 
       </div>
    </div>
</div> --}}


    {{-- <div x-data="{ show: false }">
        <button @click="show = !show" class="p-2 bg-yellow-400">Show</button>
        <h1 x-show="show">Alpine Js is working !</h1>
    </div>
    <hr>

    <div x-data>
        <button @click="alert('Alpine Js is working !')" class="bg-green-800 p-2 rounded-xl">Click</button>
    </div> --}}