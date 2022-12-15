@extends('main')


@section('container')

<div class="d-flex py-5 justify-content-between">
    <a href="{{url()->previous()}}" class="bi bi-chevron-left h1 text-decoration-none "></a>
    <h1>Book Detail</h1>
</div>
<div class="d-flex box-card">
    <img class="card-detail" src="{{ URL('storage/images/')}}/{{$books->image}}" alt="Book Cover">
    <div class="p-5">
      <h3 class="">{{$books->title}}</h3>
      <ul class="list-unstyled">
        <li>Author : {{$books->author}}</li>
        <li>Publisher : {{$books->publisher->name}}</li>
        <li>Year : {{$books->year}}</li>
        <li>Synopsis : </li>
      </ul>
      <p class="card-text">{{$books->synopsis}}</p>
    </div>
</div>

@endsection
