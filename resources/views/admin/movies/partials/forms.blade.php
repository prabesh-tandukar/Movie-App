<div class="mb-4">
    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
    <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" value="{{ old('title', $movie->title ?? '') }}" required>
</div>

<div class="mb-4">
    <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
    <input type="number" name="rating" id="rating" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" value="{{ old('rating', $movie->rating ?? '') }}" min="0" max="100" required>
</div>

<div class="mb-4">
    <label for="release_date" class="block text-sm font-medium text-gray-700">Release Date</label>
    <input type="date" name="release_date" id="release_date" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" value="{{ old('release_date', $movie->release_date ?? '') }}" required>
</div>

<div class="mb-4">
    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
    <textarea name="description" id="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" required>{{ old('description', $movie->description ?? '') }}</textarea>
</div>

<div class="mb-4">
    <label for="title" class="block text-sm font-medium text-gray-700">Genres</label>
    <input type="text" name="genres" id="genres" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" value="{{ old('title', $movie->genres ?? '') }}" required>
</div>

<div class="mb-4">
    <label for="main_image" class="block text-sm font-medium text-gray-700">Main Image</label>
    <input type="file" name="main_image" id="main_image" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" {{ isset($movie) ? '' : 'required' }}>
</div>

<div class="mb-4">
    <label for="other_images" class="block text-sm font-medium text-gray-700">Other Images</label>
    <input type="file" name="other_images[]" id="other_images" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" multiple>
</div>

<div class="mb-4">
    <label for="is_now_playing" class="block text-sm font-medium text-gray-700">Now Playing</label>
    <input type="checkbox" name="is_now_playing" id="is_now_playing" value="1">{{ old('is_now_playing', $movie->is_now_playing ?? false) ? 'checked' : '' }}</input>
</div>

<div class="mb-4">
    <label for="actors" class="block text-sm font-medium text-gray-700">Actors</label>
    <select name="actors[]" id="actors" class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" multiple>
        @foreach($actors as $actor)
            <option value="{{ $actor->id }}" {{ (isset($movie) && $movie->actors->contains($actor->id)) ? 'selected' : '' }}>
                {{ $actor->name }}
            </option>
        @endforeach
    </select>
</div>


