@section('title' , 'التعديل على المشروع الجديد')
@extends('layouts.app')
@section('content')
    <h1 class="my-4 text-center">التعديل على المشروع</h1>

    <form action="/projects/{{$project->id}}" method="POST">
        @method('PUT')
        @include('projects.form')
        <button type="submit" class="btn btn-primary">تعديل</button>
        <a href="/projects" class="btn btn-danger">إالفاء</a>
    </form>
@endsection
