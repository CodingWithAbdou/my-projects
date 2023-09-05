@extends('layouts.app')
@section('content')
    <header class="d-flex align-items-center justify-content-between my-4">
        <div>
            <h2><a href="/projects">المشاريع</a> / {{ $project->title }}</h2>
        </div>

        <div>
            <a href="/projects/{{$project->id}}" class="btn btn btn-primary">تعديل المشروع</a>
        </div>
    </header>

    <section class="row">
        <div class="col-lg-4 mb-2">
            <div class="card  my-2">
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
                    <p>{{ $project->description}} </p>
                    @include('projects.cardFooter')
                </div>
            </div>
            <div class="card ">
                <div class="card-body">
                    <h3>تغير حالة المشروع</h3>
                    <form action="/projects/{{$project->id}}" method="POST" >
                        @csrf
                        @method('PATCH')
                        <select name="status"  class="form-select" onchange="this.form.submit()">
                            <option value="0" {{($project->status == 0) ? 'selected': ''}}>قيد الانجاز</option>
                            <option value="1" {{($project->status == 1) ? 'selected': ''}}>منجز</option>
                            <option value="2" {{($project->status == 2) ? 'selected': ''}}>ملغي</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
