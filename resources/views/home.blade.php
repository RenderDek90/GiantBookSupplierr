{{-- @dd($books) --}}

@extends('main')

@section('container')

    <h1 class="text-center py-4">Book List</h1>
    <div class="card-collection d-flex justify-content-center flex-wrap gap-3">

    @foreach ($books as $item)
        <div class="card card-css">
            <img class="card-img-top w-100 h-100" src="{{ URL('storage/images/')}}/{{$item->image}}" alt="GambarBuku">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p>by</p>
                <p class="card-text">{{$item->author}}</p>
                <a href="/detail/{{$item->id}}" class="btn btn-primary">Book Detail</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection
