@extends('layouts.app')

@section('page-title', 'Laravel Comics')


@section('main-content')
    <section class="list-cards">
            @foreach ($data as $product)
                <article class="card">
                    <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                    <h4>
                        {{ $product['title'] }}
                    </h4>
                </article>
            @endforeach
    </section>

@endsection
