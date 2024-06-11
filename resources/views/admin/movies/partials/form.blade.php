<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $movie->title ?? '') }}" required>
</div>

<div class="form-group">
    <label for="rating">Rating</label>
    <input type="number" name="rating" id="rating" class="form-control" value="{{ old('rating', $movie->rating ?? '') }}" min="0" max="100" required>
</div>

<div class="form-group">
    <label for="release_date">Release Date</label>
    <input type="date" name="release_date" id="release_date" class="form-control" value="{{ old('release_date', $movie->release_date ?? '') }}" required>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" required>{{ old('description', $movie->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="main_image">Main Image</label>
    <input type="file" name="main_image" id="main_image" class="form-control" {{ isset($movie) ? '' : 'required' }}>
</div>

<div class="form-group">
    <label for="other_images">Other Images</label>
    <input type="file" name="other_images[]" id="other_images" class="form-control" multiple>
</div>

<div class="form-group">
    <label for="actors">Actors</label>
    <select name="actors[]" id="actors" class="form-control" multiple>
        @foreach($actors as $actor)
            <option value="{{ $actor->id }}" {{ isset($movie) && $movie->actors->contains($actor->id) ? 'selected' : '' }}>
                {{ $actor->name }}
            </option>
        @endforeach
    </select>
</div>
