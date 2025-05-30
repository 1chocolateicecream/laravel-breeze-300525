<x-app-layout>
    <h1>All posts</h1>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
    <div class="text-gray-900 dark:text-gray-100 mb-2">
        <a href="{{ route('dashboard') }}">Back to dashboard</a><br>
        <a href="{{ route('post.create') }}">Create post</a>
    </div>
    </div><br>
    <ul>
        @foreach($posts as $post)
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
            <li>
                <div class="text-gray-900 dark:text-gray-100 mb-2">
                    <h2>Title: {{ $post->title }}</h2>
                    <p>Content: {{ $post->content }}</p>
                </div>
                <div>
                    <a href="{{ route('post.show', $post) }}">Show</a>
                    <a href="{{ route('post.edit', $post) }}">Edit</a>
                    <form action="{{ route('post.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <button>Delete</button>
                    </form>
                </div>
            </li>
        </div>
        @endforeach

        @include('layouts.footer')
    </ul>
</x-app-layout>
