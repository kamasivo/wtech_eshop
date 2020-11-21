@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/cart.css') }}">

@section('content')
<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
    <div class="d-flex align-items-center mb-3">
        <h4 class="mb-0 ml-3">Košík</h4>
        <button class="btn btn-light mr-2 ml-auto">
            <a href="{{ url('/cart/removeAll') }}" class="d-flex justify-content-center align-items-center">
                <p class="text-danger mr-2 mb-0">Zmazať košík</p>
                <i class="fa fa-trash text-danger"></i>
            </a>
        </button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Názov produktu</th>
                <th scope="col">Cena</th>
                <th scope="col">Počet</th>
                <th scope="col">Akcia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th>{{$product->name}}</th>
                <td>{{$product->price}} €</td>
                <td>
                    <i class="fa fa-minus"></i>
                    <input class="number-input" type="number" placeholder="{{$cart[$product->id - 1]->count}}" min="1" />
                    <i class="fa fa-plus"></i>
                </td>
                <td>
                    <a href="{{ url('/cart/' . $product->id . '/remove') }}">
                        <i class="fa fa-times icons text-danger"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <section class="d-flex flex-column">
        <button class="btn btn-success align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="delivery-data">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-light mr-2 mb-0">Pokračovať v objednávke</p>
                    <i class="fa fa-arrow-right text-light"></i>
                </div>
            </a>
        </button>
        <button class="btn btn-secondary align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="/">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa fa-arrow-left text-light"></i>
                    <p class="text-light ml-2 mb-0">Na hlavnú obrazovku</p>
                </div>
            </a>
        </button>
    </section>
</section>

@endsection