@extends('layouts.master')

@section('content')

<section class=" mt-5 text-muted justify-content-center row ">
    <div class="col-lg-6">
        <h3 class="text-center">Add a car</h3>
        <hr>
    </div>
</section>

<section class="justify-content-center row text-muted">
    <form class="mt-5 col-lg-6" action="/cars" method="post" enctype="multipart/form-data">

        @include('layouts.errors')

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="make">Make</label>
                <select id="makeId" name="make_id" class="form-control" required>
                    <option value=0>make ...</option>
                    @foreach( \App\Make::all() as $make )
                        <option value={{ $make->id }}>{{ $make->make }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="model">Model</label>
                <select id="model" name="model_id" class="form-control" required>
                    <option value=0>model ...</option>
                </select>
            </div>

            <div class="form-group col-md-4">
              <label for="year">Year</label>
              <input type="number" class="form-control" name="year" placeholder="Year" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category_id" class="form-control" required>
                <option selected>Choose...</option>
                @foreach( \App\Category::all() as $category)
                    <option value={{ $category->id }}>{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" required>
                <label class="custom-file-label" for="customFile">Choose an image</label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add a car</button>
        </div>
    </form>
</section>

@endsection
