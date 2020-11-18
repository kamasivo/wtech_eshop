@extends('layout.app')


@section('content')

<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
    <div class="d-flex align-items-center mb-3">
        <h3>Môj účet</h3>
    </div>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Meno a priezvisko</label>
            <input type="email" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mesto</label>
            <input type="email" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ulica</label>
            <input type="email" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tel. číslo</label>
            <input type="email" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
        </div>
        <button type="submit" class="btn btn-primary col-12 col-md-10 col-xl-6">
            Zmeniť osobné údaje
        </button>
        <div class="form-group">
            <label for="exampleInputPassword1">Heslo</label>
            <input type="password" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputPassword1" placeholder="Password" />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Potvrdiť heslo</label>
            <input type="password" class="form-control col-12 col-md-10 col-xl-6" id="exampleInputPassword1" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary col-12 col-md-10 col-xl-6">
            Zmeniť heslo
        </button>
    </form>
</section>



@endsection