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
                    <form method="GET" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                        <div class="col-12 ml-3 pl-0">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h5>Cena:</h5>
                                </div>
                                <div class="col-lg-12 pl-0 py-1">
                                    <span class="font-weight-bold">Od:
                                        <input class="text-right" type="number" id="priceFrom" name="priceFrom" min="1" max="20000" placeholder="0"/>
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
                                    <input type="checkbox" class="form-check-input filled-in" id="xSmall" name="size[]" value="XS"/>
                                    <label class="form-check-label card-link-secondary" for="new">XS</label>
                                </div>
                                <div class="form-check col-12 pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="small" name="size[]" value="S"/>
                                    <label class="form-check-label card-link-secondary" for="used">S</label>
                                </div>
                                <div class="form-check col-12 pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="medium" name="size[]" value="M"/>
                                    <label class="form-check-label card-link-secondary" for="collectible">M</label>
                                </div>
                                <div class="form-check pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="large" name="size[]" value="L"/>
                                    <label class="form-check-label card-link-secondary" for="renewed">L</label>
                                </div>
                                <div class="form-check col-12 pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="xLarge" name="size[]" value="XL"/>
                                    <label class="form-check-label card-link-secondary" for="renewed">XL</label>
                                </div>
                                <div class="form-check col-12 pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="xxLarge" name="size[]" value="XXL"/>
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
                                    <input type="checkbox" class="form-check-input filled-in" id="BMC" name="brand[]" value="BMC"/>
                                    <label class="form-check-label card-link-secondary" for="used">BMC</label>
                                </div>
                                <div class="form-check col-12 pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="Scott" name="brand[]" value="Scott"/>
                                    <label class="form-check-label card-link-secondary" for="collectible">Scott</label>
                                </div>
                                <div class="form-check col-12 pl-0 ml-4">
                                    <input type="checkbox" class="form-check-input filled-in" id="Bianchi" name="brand[]" value="Bianchi"/>
                                    <label class="form-check-label card-link-secondary" for="renewed">Bianchi</label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <button class="btn btn-success btn-block" type="submit">
                                Vyhľadať produkty
                        </button>
                        </div>
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <a class="btn btn-secondary btn-block" href="/products/1" type="submit">
                                Reset
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between my-4">
                    <div class="col-6 category-name">
                        <h4>Bicykle</h4>
                    </div>
                    <div class="col-6 align-item-right">
                        <span class="pull-right">Sort:</br>
                        <?php
                        $url = $_SERVER['REQUEST_URI'];
                        $url = str_replace("&sort=asc", "", $url);
                        $url = str_replace("&sort=desc", "", $url);
                        $url = str_replace("?sort=asc", "", $url);
                        $url = str_replace("?sort=desc", "", $url);
                        (strlen($url) == 11) ? $url .= '?' : $url .= '&';
                        echo '<a href=' . $url . 'sort=asc> Vzostupne</a> | <a href=' . $url . 'sort=desc> Zostupne</a>'; ?>
                       </span>
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

            <div class="d-flex justify-content-center">
                {!! $products->appends(Request::all())->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
</section>

@endsection