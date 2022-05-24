<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>


    <div class="overflow-x-hidden bg-gray-100">
    
        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Liste des Posts</h1>
                        <div>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option>Latest</option>
                                <option>Last Week</option>
                            </select>
                        </div>
                    </div>

                   <?php $i = 0 ?>
                    @forelse ($posts as $post)
                    <div class="mt-6">
                        <div class="px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
<x-PostComponent ></x-PostComponent >
                    @empty
                    <div class="mt-6">
                        <div class="px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <p>Il n'y a pas de post</p>
                        </div>
                    </div>
                    @endforelse


                    <div class="mt-8">
                        <div class="flex">
                            {{ $posts->onEachSide(2)->links() }}
                        </div>
                    </div>
                </div>
                <x-authorComponent :firstPost="$recent">
                </x-authorComponent>

                {{-- @include('partials.sidebar') --}}


            </div>
        </div>
        @include('partials.footer')
    </div>



</x-app-layout>