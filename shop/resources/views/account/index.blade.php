@extends('layout.app')

@section('content')
<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
  <div class="d-flex align-items-center mb-3">
    <h3>Môj účet</h3>
  </div>
  <form action="/edit" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Meno</label>
      <input type="text" name="name" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['name']}}" />
    </div>
    <div class="form-group">
      <label for="surname">Priezvisko</label>
      <input type="text" name="surname" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['surname']}}" />
    </div>
    <div class="form-group">
      <label for="town">Mesto</label>
      <input type="text" name="town" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['town']}}" />
    </div>
    <div class="form-group">
      <label for="street">Ulica</label>
      <input type="text" name="street" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['street']}}" />
    </div>
    <div class="form-group">
      <label for="house_number">Číslo domu</label>
      <input type="number" name="house_number" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['house_number']}}" />
    </div>
    <div class="form-group">
      <label for="phone">Tel. číslo</label>
      <input type="text" name="phone" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['phone']}}" />
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control col-12 col-md-10 col-xl-6" value="{{$user['email']}}" />
    </div>
    <button type="submit" class="btn btn-success col-12 col-md-10 col-xl-6">
      Zmeniť osobné údaje
    </button>
  </form>
</section>
@endsection