@extends('layouts.app')

@section('content')
    <section class="bg-section">
        <div class="container d-flex justify-content-between flex-wrap">
            <h1 class="text-center">Prodotti</h1>
            <div class="row g-3 wrap d-flex justify-content-between">
                @foreach ($Movies as $Movies)
                    <div class="col-3 ">
                        @include('partials.card')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
