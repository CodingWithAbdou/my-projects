@section('title' , 'إنشاء مشروع جديد')
@extends('layouts.app')
@section('content')
    <h1 class="my-4 text-center">مشروع جديد</h1>

    <form action="/projects" method="POST">
        @include('projects.form' , $project = new App\Models\Project)
        <button type="submit" class="btn btn-primary">إنشاء</button>
        <a href="/projects" class="btn btn-danger">إالفاء</a>
    </form>
@endsection
