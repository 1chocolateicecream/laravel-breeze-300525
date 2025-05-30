<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
    <div class="text-gray-900 dark:text-gray-100 mb-2">
    <h1>Create post</h1>
    </div>
    </div><br>
<div class="text-gray-900 dark:text-gray-100 mb-2">
    <x-error-message :errors="$errors" />
</div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 p-4">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="text-gray-900 dark:text-gray-100 mb-2">
        <div>
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        </div>
        <div class="text-gray-900 dark:text-gray-100 mb-2">
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content">{{ old('content') }}</textarea>
        </div>
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</div>
</x-app-layout>
