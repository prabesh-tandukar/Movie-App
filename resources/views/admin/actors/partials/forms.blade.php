<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $actor->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="birthday">Birthday</label>
    <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday', $actor->birthday ?? '') }}" required>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" required>{{ old('description', $actor->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control" {{ isset($actor) ? '' : 'required' }}>
</div>
