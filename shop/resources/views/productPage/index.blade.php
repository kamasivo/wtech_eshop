@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/productPage.css') }}">

@section('content')

<!-- category main page -->
<section class="container-fluid">
    <div class="row my-5">
        <div class="col-lg-3 col-md-12">
            <a class="btn btn-dark mb-3" data-toggle="collapse" href="#filter" role="button" aria-expanded="true" aria-controls="filter">Skryť/Zobraziť filter</a>
            <section class="mb-4 ml-2 px-2 bg-light">
                <div class="collapse p-4" id="filter">
                    <div class="col-12 ml-3 pl-0">
                        <div class="row">
                            <div class="col-12 pl-0">
                                <h5>Cena:</h5>
                            </div>
                            <div class="col-lg-12 pl-0 py-1">
                                <span class="font-weight-bold">Od:
                                    <input class="text-right" type="number" id="priceFrom" name="priceFrom" min="1" max="20000" placeholder="0" />
                                    €</span>
                            </div>
                            <div class="col-lg-12 pl-0 py-1">
                                <span class="font-weight-bold">Do:
                                    <input class="text-right" type="number" id="priceTo" name="priceTo" min="1" max="20000" placeholder="20000" />
                                    €</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-4 ml-3 pl-0">
                        <div class="row">
                            <div class="col-12 pl-0">
                                <h5>Velkosť:</h5>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="xSmall" />
                                <label class="form-check-label card-link-secondary" for="new">XS</label>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="small" />
                                <label class="form-check-label card-link-secondary" for="used">S</label>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="medium" />
                                <label class="form-check-label card-link-secondary" for="collectible">M</label>
                            </div>
                            <div class="form-check pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="large" />
                                <label class="form-check-label card-link-secondary" for="renewed">L</label>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="xLarge" />
                                <label class="form-check-label card-link-secondary" for="renewed">XL</label>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="xxlarge" />
                                <label class="form-check-label card-link-secondary" for="renewed">XXL</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-4 ml-3 pl-0">
                        <div class="row">
                            <div class="col-12 pl-0">
                                <h6>Značka:</h6>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="BMC" />
                                <label class="form-check-label card-link-secondary" for="used">BMC</label>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="Scott" />
                                <label class="form-check-label card-link-secondary" for="collectible">Scott</label>
                            </div>
                            <div class="form-check col-12 pl-0 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="Bianchi" />
                                <label class="form-check-label card-link-secondary" for="renewed">Bianchi</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 d-flex justify-content-center">
                        <button class="btn btn-success btn-block" type="submit">
                            Vyhľadať produkty
                        </button>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-secondary btn-block" type="reset">
                            Reset
                        </button>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between my-4">
                    <div class="col-6 category-name">
                        <h4>Bicykle</h4>
                    </div>
                    <div class="col-6">
                        <h5>Zoradiť podľa:</h5>
                        <select id="sorting" class="custom-select">
                            <option value="priceasc">Ceny (od najnižšej)</option>
                            <option value="pricedesc">Ceny (od najvyššej)</option>
                        </select>
                    </div>
                </div>
            </div>
            <!--List of products-->
            <section class="product-page">
                <div class="container">
                    <div class="row">
                        <!-- for loop for all products -->
                        @foreach($products as $product)
                        <div class="col-md-4 col-12">
                            <a href="{{ URL::to('product/' . $product->id) }}">
                                <div class="card mb-4 shadow-sm">
                                    <img class="d-block w-100" src="{{ asset('storage/images' . $images[$product->id - 1]->path . ' ' ) }}" alt=" Cestný tmavozelený bicykel" />
                                    <div class="card-body">
                                        <p class="card-text mb-0">{{$product->name}}</p>
                                        <p class="card-text mb-0">{{$product->price}}€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <nav aria-label="page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

@endsection