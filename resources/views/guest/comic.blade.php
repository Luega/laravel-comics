@extends('guest.layout.base')

@section('documentTitle')
  {{ $namePage }}
@endsection

@section('content')
<main>
    <div class="container-fluid py-5 bg-primary">
        <div class="row w-75 m-auto d-flex flex-column">
            <div class="col text-center">
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title'] }}">
                <h5 class="my-4">{{$comic['type']}}</h5>
                <h2 class="my-4">{{$comic['title']}}</h2>
                <h5 class="my-4">{{$comic['series']}}</h5>
            </div>
            <div class="col mt-5">
                <p><span class="fw-bold">Artist: </span>  
                    @foreach ($comic['artists'] as $artist)
                    @if ($loop->last)
                    <span>{{ $artist }}.</span>
                    @else 
                    <span>{{ $artist}}, </span>
                    @endif
                    @endforeach
                </p>
                <p><span class="fw-bold">Writers: </span>  
                    @foreach ($comic['writers'] as $writer)
                    @if ($loop->last)
                    <span>{{ $writer }}.</span>
                    @else 
                    <span>{{ $writer}}, </span>
                    @endif
                    @endforeach
                </p>
                <p><span class="fw-bold">Description: </span>{{$comic['description']}}</p>
            </div>
            <div class="col mt-3">
                <p><span class="fw-bold">Price: </span>{{$comic['price']}}</p>
                <p><span class="fw-bold">Sale date: </span>{{$comic['sale_date']}}</p>
            </div>
        </div>
    </div>
</main>
@endsection