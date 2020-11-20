@extends('layout.app')

@section('content')
<section
  class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6"
>
  <div class="d-flex align-items-center mb-3">
    <h3>Môj účet</h3>
  </div>
      <form action="/edit" method="POST" >
        @csrf
        <div class="form-group">
          <label for="name">Meno</label>
          <input
            type="text"
            name="name"
            class="form-control col-12 col-md-10 col-xl-6"
            value="{{$user['name']}}"
          />
        </div>
        <div class="form-group">
          <label for="surname">Priezvisko</label>
          <input
            type="text"
            name="surname"
            class="form-control col-12 col-md-10 col-xl-6"
            value="{{$user['surname']}}"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Mesto</label>
          <input
            type="text"
            name="town"
            class="form-control col-12 col-md-10 col-xl-6"
            id="town"
            value="{{$user['town']}}"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Ulica</label>
          <input
            type="text"
            name="street"
            class="form-control col-12 col-md-10 col-xl-6"
            id="street"
            value="{{$user['street']}}"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Číslo domu</label>
          <input
            type="number"
            name="house_number"
            class="form-control col-12 col-md-10 col-xl-6"
            id="house_number"
            value="{{$user['house_number']}}"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tel. číslo</label>
          <input
            type="text"
            name="phone"
            class="form-control col-12 col-md-10 col-xl-6"
            id="phone_number"
            value="{{$user['phone']}}"  
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input
            type="email"
            name="email"
            class="form-control col-12 col-md-10 col-xl-6"
            id="email"
            value="{{$user['email']}}"  
          />
        </div>
        <button
          type="submit"
          class="btn btn-primary col-12 col-md-10 col-xl-6"
        >
         Zmeniť osobné údaje
        </button>
        <div class="form-group">
          <label for="exampleInputPassword1">Heslo</label>
          <input
            type="password"
            class="form-control col-12 col-md-10 col-xl-6"
            id="passwd"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Potvrdiť heslo</label>
          <input
            type="password"
            class="form-control col-12 col-md-10 col-xl-6"
            id="passwd_retype"
          />
        </div>
        <button
          type="submit"
          class="btn btn-primary col-12 col-md-10 col-xl-6"
        >
          Zmeniť heslo
        </button>
      </form>
</section>
@endsection