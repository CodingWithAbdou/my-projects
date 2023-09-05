@extends('layouts.app')
@section('content')
        <header class="d-flex align-items-center justify-content-between my-4">
            <div>
                <h2>المشاريع</h2>
            </div>

            <div>
                <a href="/projects/create" class="btn btn btn-primary">إنشاء مشروع جديد</a>
            </div>
        </header>

        <section class="row">
            @forelse ($projects as $project)
                <div class="col-4 mb-2">
                    <div class="card  ">
                        <div class="card-body">
                            @switch($project->status)
                                @case(1)
                                    <div class="text-success">
                                        تم بنجاح
                                    </div>
                                    @break
                                @case(2)
                                    <div class="text-danger ">
                                        ملغى
                                    </div>
                                    @break
                                @default
                                    <div class="text-warning">
                                        قيد التنفيذ
                                    </div>
                            @endswitch
                            <a href="/projects/{{$project->id}}"><h5 class="card-title">{{ $project->title }}</h5></a>
                            <p> {{ Str::limit($project->description , 150) }}</p>
                            @include('projects.cardFooter')
                        </div>
                    </div>
                </div>
            @empty
                <div class="py-4 d-flex align-items-center justify-content-center gap-2">
                    <h3> لاتوجد مواعيد لعرضها</h3>
                    <a href="/projects/create" class="btn btn-primary">أنشء مشروعا جديدا</a>
                </div>
            @endforelse
        </section>
@endsection
