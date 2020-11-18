@extends('layout.app')



@section('content')
<section class="p-3 lightContainer d-flex flex-column bg-light col-12 col-sm-8 col-md-6">
    <div class="d-flex align-items-center mb-3">
        <h4 class="mb-0 ml-3">Košík</h4>
        <button class="btn btn-danger mr-2 ml-auto">
            <div class="d-flex justify-content-center align-items-center">
                <p class="text-light mr-2 mb-0">Zmazať košík</p>
                <i class="fas fa-trash-alt text-light"></i>
            </div>
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
            <tr>
                <th>Produkt 1</th>
                <td>650€</td>
                <td>
                    <i class="fas fa-minus"></i>
                    <input class="number-input" type="number" placeholder="1" min="1" />
                    <i class="fas fa-plus"></i>
                </td>
                <td><i class="fas fa-times icons text-danger"></i></td>
            </tr>
            <tr>
                <th>Produkt 1235</th>
                <td>650€</td>
                <td>
                    <i class="fas fa-minus"></i>
                    <input class="number-input" type="number" placeholder="1" min="1" />
                    <i class="fas fa-plus"></i>
                </td>
                <td><i class="fas fa-times icons text-danger"></i></td>
            </tr>
            <tr>
                <th>Produkt číslo 1236</th>
                <td>650€</td>
                <td>
                    <i class="fas fa-minus"></i>
                    <input class="number-input" type="number" placeholder="1" min="1" />
                    <i class="fas fa-plus"></i>
                </td>
                <td><i class="fas fa-times icons text-danger"></i></td>
            </tr>
        </tbody>
    </table>
    <section class="d-flex flex-column">
        <button class="btn btn-success align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="../delivery-data/delivery-data.html">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-light mr-2 mb-0">Pokračovať v objednávke</p>
                    <i class="fas fa-arrow-right text-light"></i>
                </div>
            </a>
        </button>
        <button class="btn btn-secondary align-self-center mb-3 col-11 col-md-8 col-xl-6">
            <a href="#">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fas fa-arrow-left text-light"></i>
                    <p class="text-light ml-2 mb-0">Späť</p>
                </div>
            </a>
        </button>
    </section>
</section>

@endsection