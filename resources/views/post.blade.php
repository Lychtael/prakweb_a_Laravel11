<x-layout>
    <x-slot:title>{{ $title }}</x-slot> 
        <article class='py-10 max-w-screen-md border-b'>
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div class="text-base text-gray-500">
                <a href="">{{ $post['author'] }}</a> | kemarin
            </div>
            <p class="my-4 font-light">{{ ($post['body']) }}</p>
            <a href="/posts" class="font-medium text-blue-700 hover:underline">&laquo; Kembali </a>
        </article>
</x-layout>