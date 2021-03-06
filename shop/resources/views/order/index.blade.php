@extends('layout.app')

@section('content')
<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
    <div class="d-flex align-items-center mb-3">
        <h4 class="mb-0 ml-3">Zoznam objednávok</h4>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Číslo objednávky</th>
                <th scope="col">Produkt</th>
                <th scope="col">Cena produktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $ord)
            <tr>
                <td>{{$ord->order_number}}</td>
                <td>
                    {{$products[$loop->index]->name}}
                </td>
                <td>
                    {{$products[$loop->index]->price}} €
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class="btn btn-secondary align-self-center mb-3 col-11 col-md-8 col-xl-6">
        <a href="/">
            <div class="d-flex justify-content-center align-items-center">
                <i class="fa fa-arrow-left text-light"></i>
                <p class="text-light ml-2 mb-0">Na hlavnú obrazovku</p>
            </div>
        </a>
    </button>

    @endsection