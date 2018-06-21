@extends('layouts.master')

@section('content')
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top img-fluid" src="/images/{{ $car->image }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-outline-secondary">
                            <a href="/cars/{{ $car->id }}/edit" class="editview">Edit</a>
                        </button>
                        <form class="" action="/cars/{{ $car->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form
                        <small class="text-muted">Posted {{ \Carbon\Carbon::createFromTimeStamp(strtotime($car->created_at))->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<h4 class="mt-5"><a href="/cars/create">Add more cars</a></h4>
@endsection
