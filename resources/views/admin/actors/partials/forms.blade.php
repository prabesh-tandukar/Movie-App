<div class="mb-4">
    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
    <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" value="{{ old('name', $actor->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
    <input type="date" name="birthday" id="birthday" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" value="{{ old('birthday', $actor->birthday ?? '') }}" required>
</div>

<div class="form-group">
    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
    <textarea name="description" id="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" required>{{ old('description', $actor->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
    <input type="file" name="image" id="image" class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md bg-white" {{ isset($actor) ? '' : 'required' }}>
</div>
