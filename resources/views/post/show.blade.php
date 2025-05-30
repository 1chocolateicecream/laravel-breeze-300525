<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
    <div class="text-gray-900 dark:text-gray-100 mb-2">
    <a href="{{ route('post.index') }}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    </div>
    </div>
</x-app-layout>
