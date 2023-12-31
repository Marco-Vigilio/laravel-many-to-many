@extends('layouts.app')

@section('content')
<div class="container" id="projects-conteiner">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"> ID: {{ $project->id }} ---- {{ $project->slug }}</h5>
                <!---->
                
                Technologies:
                @if(count($project->technologies) > 0)
                    @foreach ($project->technologies as $technology)
                        {{ $technology->type_technology}} --
                    @endforeach
                @endif
                
                


                @if(str_starts_with($project->image, 'http'))
                    <img src="{{ $project->image }}" alt="{{ $project->title }}">
                @else
                    <img src="{{ asset('storage/'. $project->image) }}" alt="{{ $project->title }}">
                @endif
                
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $project->title }}
                    </h5>
                    <p class="card-text">
                        {{ $project->content }}
                    </p>
                    <a href="{{ route('admin.projects.edit', $project)}}" class="btn btn-sm btn-success">
                        Edit
                    </a>
                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-warning">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
