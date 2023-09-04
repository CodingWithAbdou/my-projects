@extends('layouts.app')
@section('content')
    <h1 class="my-4 text-center">مشروع جديد</h1>

    <form action="/projects" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">عنوان المشروع</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">وصف المشروع</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">إنشاء</button>
        <a href="/projects" class="btn btn-danger">إالفاء</a>
    </form>
@endsection
