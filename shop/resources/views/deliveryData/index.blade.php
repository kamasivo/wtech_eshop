@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/deliveryData.css') }}">

@section('content')

<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
    <h4 class="mb-0">Dodacie údaje</h4>
    <form action="/delivery-data/edit" method="POST" class="d-flex flex-column align-items-center justify-content-center mb-3">
        @csrf
        <div class="mt-2 form-group">
            <label>Meno</label>
            <input type="text" name="name" class="form-control" value="{{$user['name']}}" />
            @error('name')
            <div class="alert alert-danger">Zadajte meno</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Priezvisko</label>
            <input type="text" name="surname" class="form-control" value="{{$user['surname']}}" />
            @error('surname')
            <div class="alert alert-danger">Zadajte priezvisko</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Mesto</label>
            <input type="text" name="town" class="form-control" value="{{$user['town']}}" />
            @error('town')
            <div class="alert alert-danger">Zadajte mesto</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Ulica</label>
            <input type="text" name="street" class="form-control" value="{{$user['street']}}" />
            @error('street')
            <div class="alert alert-danger">Zadajte ulicu</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Číslo domu</label>
            <input type="number" name="house_number" class="form-control" value="{{$user['house_number']}}" />
            @error('house_number')
            <div class="alert alert-danger">Zadajte číslo domu</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tel. číslo</label>
            <input type="text" name="phone" class="form-control" value="{{$user['phone']}}" />
            @error('phone')
            <div class="alert alert-danger">Zadajte svoje telefónne číslo</div>
            @enderror
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" value="{{$user['email']}}" />
            @error('email')
            <div class="alert alert-danger">Zadajte e-mail</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="payment">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-light mr-2 mb-0">Zvoliť spôsob platby</p>
                    <i class="fa fa-arrow-right text-light"></i>
                </div>
            </a>
        </button>
    </form>
    <section class="d-flex flex-column">
        <button class="btn btn-secondary align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="cart">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa fa-arrow-left text-light"></i>
                    <p class="text-light ml-2 mb-0">Späť</p>
                </div>
            </a>
        </button>
    </section>
</section>

@endsection