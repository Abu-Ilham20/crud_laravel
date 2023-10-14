@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Books</h1>
    </div>
    <hr>
    <form action="{{ route('Book.update', $books->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-5">
          <div class="col mb-3">
            <label for="" class="form-label">Name book</label>
            <input type="text" name="name" class="form-control" placeholder="Book Name" value="{{ $books->name }}">
          </div>
          <div class="col mb-3">
            <label for="" class="form-label">Author </label>
            <input type="text" name="author" class="form-control" placeholder="Authore Name" value="{{ $books->author }}">
          </div>
        </div>
        <div class="row mb-3">
            <div class="col mb-3">
                <label for="" class="form-label">Year</label>
              <input type="text" name="year" class="form-control" placeholder="Year Book" value="{{ $books->year }}">
            </div>
            <div class="col mb-3">
                <label for="" class="form-label">Description</label>
              <textarea  name="description" class="form-control"  placeholder="Description Book">{{ $books->description }}</textarea>
            </div>
        </div>

        <div class="d-grid">
            <button class="btn btn-warning" >Update</button>
          </div>
    </form>
@endsection