@extends('layouts.master')

@section('content')
<div class="album py-5 bg-light">
  <div class="container">

      @if(count($cars) == 0)
          <p class="text-muted text-center">This Page contains not cars please click on
              <a href="/cars/create">Add more cars</a> to add cars.
          </p>
      @endif

      <div class="row">

        @foreach($cars as $car)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <div style="height: 30%;">
                        <img class="card-img-top img-fluid" src="/images/{{ $car->image }}" alt="Car image" height="200px">
                    </div>

                    <div class="card-body">
                        <div class="mb-3 text-muted ">
                                {{ $car->make->make }} |
                                {{ $car->year }} {{ $car->model->model }} |
                                {{ $car->category->category }}
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <a href="/cars/{{ $car->id }}" class="editview">View</a>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <a href="/cars/{{ $car->id }}/edit" class="editview">Edit</a>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </div>
                            <small class="text-muted">Posted {{ \Carbon\Carbon::createFromTimeStamp(strtotime($car->created_at))->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
</div>
<h4 class="mt-5"><a href="/cars/create">Add more cars</a></h4>
@endsection
