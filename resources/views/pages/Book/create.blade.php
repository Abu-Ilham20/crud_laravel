@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Books</h1>
        <a href="{{ route('Book.create') }}" class="btn btn-primary">Add Book</a>
    </div>
    <hr>
   
    <form method="POST" action="{{ route('Book.store') }}">
        @csrf
        <div class="row mb-5">
          <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Book Name">
          </div>
          <div class="col">
            <input type="text" name="author" class="form-control" placeholder="Authore Name">
          </div>
        </div>
        <div class="row mb-3">
            <div class="col">
              <input type="text" name="year" class="form-control" placeholder="Year Book">
            </div>
            <div class="col">
              <textarea  name="description" class="form-control"  placeholder="Description Book"> </textarea>
            </div>
          </div>

          <div class="d-grid">
            <button class="btn btn-primary" >Submit</button>
          </div>
      </form>

@endsection