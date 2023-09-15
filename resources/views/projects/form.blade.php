@csrf
<div class="mb-3">
    <label for="title" class="form-label">عنوان المشروع</label>
    <input type="text" class="form-control" id="title" name="title" value='{{$project->title}}'>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label" >وصف المشروع</label>
    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$project->description}}</textarea>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
