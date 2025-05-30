<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
    <div class="text-gray-900 dark:text-gray-100 mb-2">
    <h1>Edit post</h1>
    </div>
    </div><br>

    <x-error-message :errors="$errors" />

    <form action="{{ route('post.update', $post) }}" method="post">
        @csrf
        @method("PUT")
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
        <div>
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
</div>
    </form>
</x-app-layout>
