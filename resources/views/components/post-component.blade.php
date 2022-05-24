
<div class="mt-6">
    <div class="px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <span class="font-light text-gray-600 flex">
                <div class="bg-black w-5 rounded text-center mr-2">
                    {{-- <span class="font-light text-white">
                        {{ $posts->FirstItem() + $i }}
                        <?php $i++ ?>
                    </span> --}}
                </div>{{ $post->created_at->translatedFormat('d M Y') }} / {{ $post->created_at->Format('h:i:s') }}
            
            </span>
                <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
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