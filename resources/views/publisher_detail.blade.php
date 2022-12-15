@extends('main')

@section('container')

<div class="d-flex align-content-center my-5">
<img class="card-img-top w-25 h-25" src="{{ URL('storage/images/')}}/{{$p->image}}" alt="Icon Publisher">
<div>
<h3 class="card-title">{{$p->name}}</h3>
<p class="card-text"><i id="icon-atr" class="bi bi-geo-alt-fill"></i>{{$p->address}}</p>
<p class="card-text"><i id="icon-atr" class="bi bi-telephone-fill"></i>  {{$p->phone}}</p>
<p class="card-text"><i id="icon-atr" class="bi bi-envelope-fill"></i>  {{$p->email}}</p>
</div>
</div>

<div class="card-collection d-flex justify-content-around my-5 flex-wrap">
    @foreach ($p->Book as $item)
        <div class="card m-2 card-css">
            <img class="card-img-top w-100 h-100" src="{{ URL('storage/images/')}}/{{$item->image}}" alt="Icon Publisher">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{$item->author}}</p>
                <a href="/detail/{{$item->id}}" class="btn btn-primary">Book Detail</a>
            </div>
        </div>
    @endforeach
    </div>

@endsection
