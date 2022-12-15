{{-- @dd($cate->category) --}}

@extends('main')

@section('container')
<h1 class="card-title">Category {{$cate->name}}</h1>

<div class="card-collection d-flex justify-content-around my-5">
    @foreach ($cate->category as $item)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100 h-100" src="{{ URL('storage/images/')}}/{{$item->image}}" alt="Icon Publisher">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{$item->author}}</p>
                <a href="/detail/{{$item->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
    </div>

@endsection
