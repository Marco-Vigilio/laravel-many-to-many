@extends('layouts.app')

@section('content')
<div class="container" id="projects-conteiner">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @dump($technologies)

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">
                    Title
                </label>
                <input type="text" class="form-control" id="title" placeholder="Insert your project title" name="title" value="{{ old('title', '')}}">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">
                    Image
                </label>
                <!--
                <input type="text" class="form-control" id="image" placeholder="https://image.jpg" name="image" value="{{ old('image', '')}}">
                --> 
                <input type="file" name="image" id="image" class="form-control" value="{{ old('image', '')}}">       
            </div>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="technology_id" class="form-label">
                    Technologies: 
                </label>
                @foreach ($technologies as $technology)
                <input class="form-check-input" type="checkbox" name="technology_id[]" id="technology_id" value="{{$technology->id}}">
                <label for="technology_id" class="me-3">
                    {{ $technology->type_technology}}
                </label>
                @endforeach
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">
                    Content
                </label>
                <textarea class="form-control" id="content" rows="7" name="content" >
                    {{ old('content', '')}}
                </textarea>
            </div>

            <div class="mb-3">
                <button type="submit">
                    Create new project
                </button>
                <button type="reset">
                    Reset
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
