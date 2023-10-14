@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Show Detail Books</h1>
    </div>
    <hr>
        <div class="row mb-5">
          <div class="col mb-3">
            <label for="" class="form-label">Name book</label>
            <input type="text" name="name" class="form-control" placeholder="Book Name" value="{{ $books->name }}" readonly>
          </div>
          <div class="col mb-3">
            <label for="" class="form-label">Author </label>
            <input type="text" name="author" class="form-control" placeholder="Authore Name" value="{{ $books->author }}" readonly>
          </div>
        </div>
        <div class="row mb-3">
            <div class="col mb-3">
                <label for="" class="form-label">Year</label>
              <input type="text" name="year" class="form-control" placeholder="Year Book" value="{{ $books->year }}" readonly>
            </div>
            <div class="col mb-3">
                <label for="" class="form-label">Description</label>
              <textarea  name="description" class="form-control"  placeholder="Description Book" readonly>{{ $books->description }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col mb-3">
                <label for="" class="form-label">Created At</label>
              <input type="text" name="created_at" class="form-control" placeholder="created_at" value="{{ $books->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label for="" class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="updated_at" value="{{ $books->updated_at }}" readonly>
            </div>
        </div>

@endsection