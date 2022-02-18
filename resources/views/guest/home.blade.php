@extends('guest.layout.base')

@section('documentTitle')
     {{ $namePage }}
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row w-75 m-auto">
                <div class="col d-flex flex-wrap justify-content-center">
                    @foreach($comics as $comic)
                    <div class="card m-3" style="width: 18rem;">
                        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">"{{ $comic['title']}}"</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection