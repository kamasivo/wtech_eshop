@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

@section('content')
<section class="p-3 light-container mt-2 d-flex flex-column bg-light col-11 col-sm-8 col-md-6 col-xl-4">
    <h5 class="mb-0 mt-3">Výber platby</h5>
    <form class="mt-3 mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
            <label class="form-check-label" for="exampleRadios1">
                Platba kartou
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
            <label class="form-check-label" for="exampleRadios2">
                Platba prevodom na účet
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
            <label class="form-check-label" for="exampleRadios2">
                Platba na dobierku
            </label>
        </div>
    </form>
</section>
<section class="p-3 light-container mt-2 d-flex flex-column bg-light col-11 col-sm-8 col-md-6 col-xl-4">
    <h5 class="mb-0 mt-2 mb-2">Výber dopravy</h5>
    <form class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
            <label class="form-check-label" for="exampleRadios1">
                Osobný odber na predajni
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
            <label class="form-check-label" for="exampleRadios2">
                Kuriér GLS
            </label>
        </div>
        <div class="form-check label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" />
            <label class="form-check-label" for="exampleRadios3">
                Kuriér UPC
            </label>
        </div>
    </form>
</section>
<section class="p-3 light-container mt-2 d-flex flex-column bg-light col-11 col-sm-8 col-md-6 col-xl-4">
    <p class="mb-0">Cena tovaru: 345€</p>
    <p class="mb-0">Cena dopravy: 5€</p>
    <h5 class="mt-2 mb-3">Cena spolu: 350€</h5>

    <button class="btn btn-success align-self-center mb-3 col-12 col-md-10">
        <a href="#">
            <div class="d-flex justify-content-center align-items-center">
                <p class="text-light mr-2 mb-0">Zaplatiť</p>
                <i class="fa fa-arrow-right text-light"></i>
            </div>
        </a>
    </button>
    <button class="btn btn-secondary align-self-center mb-3 col-12 col-md-10">
        <a href="#">
            <div class="d-flex justify-content-center align-items-center">
                <i class="fa fa-arrow-left text-light"></i>
                <p class="text-light ml-2 mb-0">Späť</p>
            </div>
        </a>
    </button>
</section>
</main>
<footer class="pt-3 px-4 pb-3">
    <div>
        <p class="font-size-sm">
            <i class="fa fa-copyright"></i> 2020 - 2020 CykloShop
        </p>
        <div class="row mb-3">
            <a href="../footer/contact-info.html" class="font-size-sm text-dark col-4 d-flex justify-content-center">Kontaktné údaje</a>
            <a href="../footer/privacy.html" class="col-4 font-size-sm text-dark d-flex justify-content-center">
                Ochrana súkromia
            </a>
            <a href="../footer/objection.html" class="font-size-sm text-dark col-4 d-flex justify-content-center">
                Reklamačný poriadok
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <i class="icons fab fa-facebook-square"></i>
            <i class="ml-3 icons fab fa-youtube-square"></i>
            <i class="ml-3 icons fab fa-twitter-square"></i>
            <i class="ml-3 icons fab fa-instagram-square"></i>
        </div>
    </div>
</footer>
</body>

</html>

@endsection