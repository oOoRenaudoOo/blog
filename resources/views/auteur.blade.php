<x-app-layout>
    <x-slot name="header">
        <div><a href="#" class="flex items-center"><img
            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
        <h1 class="font-bold text-gray-700 hover:underline">{{ Auth::user()->name }}</h1>
    </a></div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            {{-- affichage tutoriel --}}
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                    <div class="flex items-center">
                       <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 px-2 py-3 block">Editer {{ $post->title }}</a> 
                       <a href="#" class="bg-red-500 px-2 py-3 block" onclick="event.preventDefault
                                document.getElementById('destroy-post-form').submit()">Supprimer {{ $post->title }}
                        <form action="{{ route('posts.destroy', $post) }}" method="post" id="destroy-post-form">
                            @csrf
                            @method('delete')
                        </form>
                    </a> 
                    </div>
                @endforeach
            </div> --}}
            {{-- fin affichage tutoriel --}}

            <div class="overflow-x-hidden bg-gray-100">
    
                <div class="px-6 py-8">
                    <div class="container flex justify-between mx-auto">
                        <div class="w-full lg:w-8/12">
                            <div class="flex items-center justify-between">
                                <h1 class="text-xl font-bold text-gray-700 md:text-2xl">@if ($user->id == Auth::user()->id) Vos Post @else Liste des Posts @endif</h1>
                                <div>
                                    <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option>Latest</option>
                                        <option>Last Week</option>
                                    </select>
                                </div>
                            </div>
                            @php
                               $i=1   
                            @endphp

                           
                            @forelse ($user->posts as $post)
                            <div class="mt-6">
                                <div class="px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <span class="font-light text-gray-600 flex">
                                            <div class="bg-black w-5 rounded text-center mr-2">
                                                <span class="font-light text-white">
                                                    {{ $i }}
                                                    @php
                                                        $i++
                                                    @endphp
                                                </span>
                                            </div>{{ $post->created_at->translatedFormat('d M Y') }} / {{$post->created_at->format('h:i:s') }}
                                        
                                        </span>
                                            <a href="#"
                                            class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                                            {{ $post->category->name}}
                                        </a>
                                    </div>
                                    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{ $post->title }}</a>
                                        <p class="mt-2 text-gray-600">{{ Str::limit($post->content, 120) }}</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-4"><a href="{{ route('posts.show',$post) }}"
                                            class="text-blue-500 hover:underline">Voir plus</a>
                                        <div><a href="#" class="flex items-center"><img
                                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                                <h1 class="font-bold text-gray-700 hover:underline">{{ $post->user->name }}</h1>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="mt-6">
                                <div class="px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                    <p>Il n'y a pas de post</p>
                                </div>
                            </div>
                            @endforelse
        
                        </div>
                        <x-authorComponent :firstPost="$user->posts[$user->posts->count()-1]">
                        </x-authorComponent>
        
                        {{-- @include('partials.sidebar') --}}
        
        
                    </div>
                </div>
                @include('partials.footer')
            </div>

        </div>
    </div>
</x-app-layout>
