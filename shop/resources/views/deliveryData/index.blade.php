@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/deliveryData.css') }}">

@section('content')

<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
    <h4 class="mb-0">Dodacie údaje</h4>
    <form class="d-flex flex-column align-items-center justify-content-center mb-3">
        <div class="mt-2 form-group">
            <label>Meno</label>
            <input type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Priezvisko</label>
            <input type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Mesto</label>
            <input type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Ulica</label>
            <input type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Číslo domu</label>
            <input type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Tel. číslo</label>
            <input type="" class="form-control" />
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" />
        </div>
    </form>
    <section class="d-flex flex-column">
        <button class="btn btn-success align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="payment">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-light mr-2 mb-0">Zvoliť spôsob platby</p>
                    <i class="fa fa-arrow-right text-light"></i>
                </div>
            </a>
        </button>
        <button class="btn btn-secondary align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="#">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa fa-arrow-left text-light"></i>
                    <p class="text-light ml-2 mb-0">Späť</p>
                </div>
            </a>
        </button>
    </section>
</section>

@endsection