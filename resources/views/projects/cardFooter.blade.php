<div class="card-footer d-flex align-items-center justify-content-between">
    <div class="ms-2">
        <img src="/images/clock.svg" alt="clock icon">
    </div>
    <div class="mx-2">
        {{ $project->created_at->diffForHumans() }}
    </div>
    <div  class="mx-2">
        <img src="/images/list.svg" alt="list icon">
    </div>

    <div class="me-auto">
        <form action="/projects/{project}" method="POST">
            @method('DELETE')
            @csrf
            <button class=""><img src="/images/trash.svg" alt="trash icon"></button>
        </form>
    </div>
</div>
