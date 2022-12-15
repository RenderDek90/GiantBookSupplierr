@extends('main')

@section('container')
    <div class="card-collection d-flex justify-content-center my-5">

    @foreach ($p as $bookItem)
        <div class="card mx-2 card-css">
            <img class="card-img-top w-100 h-100" src="{{ URL ('storage/images/')}}/{{$bookItem->image}}" alt="Icon Publisher">
            <div class="card-body">
                <h5 class="card-title">{{$bookItem->name}}</h5>
                <p class="card-text">{{$bookItem->address}}</p>
                <a href="/publisher_detail/{{$bookItem->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
    </div>


    @endsection
