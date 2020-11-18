@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">

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
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="{{ asset('storage/images/bike/Scott_Foil.jpg') }}" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="{{ asset('storage/images/bike/Scott_Foil-768px.jpg') }}" />
                                        <img class="d-block w-100" src="{{ asset('storage/images/bike/Scott_Foil-576px.jpg') }}" alt="Cestný tmavozelený bicykel
                            Scott Foil 30" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">SCOTT FOIL 30</p>
                                        <p class="card-text mb-0">Cena 3999.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-12 card">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/BMC_Roadmachine.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/bike/BMC_Roadmachine-768px.jpg" />
                                        <img class="d-block w-100" src="../../images/bike/BMC_Roadmachine-576px.jpg" alt="Cestný oranžovo-šedý bicykel
                              BMC Roadmachine" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">
                                            BMC ROADMACHINE ULTEGRA DI2
                                        </p>
                                        <p class="card-text mb-0">Cena 3699.67€</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/Scott_Addict10.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/bike/Scott_Addict10-768px.jpg" />
                                        <img class="d-block w-100" src="../../images/bike/Scott_Addict10-576px.jpg" alt="Cestný modrý bicykel
                              Scott Addict 10" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">
                                            SCOTT ADDICT 10 DISC MARINE BLUE
                                        </p>
                                        <p class="card-text mb-0">Cena 2799.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/Scott_Addict10_Carb.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="
                              ../../images/bike/Scott_Addict10_Carb-768px.jpg
                            " />
                                        <img class="d-block w-100" src="../../images/bike/Scott_Addict10_Carb-576px.jpg" alt="Cestný čierny bicykel
                              Scott Addict 10 Carbon" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">
                                            SCOTT ADDICT 10 CARBON ONYX BLACK
                                        </p>
                                        <p class="card-text mb-0">Cena 2799.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/Scott_Addict20.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/bike/Scott_Addict20-768px.jpg" />
                                        <img class="d-block w-100" src="../../images/bike/Scott_Addict20-576px.jpg" alt="Cestný biely bicykel
                              Scott Addict 20" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">
                                            SCOTT ADDICT 20 DISC PEARL WHITE
                                        </p>
                                        <p class="card-text mb-0">Cena 2299.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/Scott_Addict30.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/bike/Scott_Addict30-768px.jpg" />
                                        <img class="d-block w-100" src="../../images/bike/Scott_Addict30-576px.jpg" alt="Cestný červený bicykel
                              Scott Addict 30" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">SCOTT ADDICT 30</p>
                                        <p class="card-text mb-0">Cena 1499.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/Scott_AddictRC.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/bike/Scott_AddictRC-768px.jpg" />
                                        <img class="d-block w-100" src="../../images/bike/Scott_AddictRC-576px.jpg" alt="Cestný čierny bicykel
                              Scott Addict RC" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">
                                            SCOTT ADDICT RC 15 CARBON ONYX BLACK
                                        </p>
                                        <p class="card-text mb-0">Cena 5599.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="../../images/bike/Scott_AddictSE.jpg" />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/bike/Scott_AddictSE-768px.jpg" />
                                        <img class="d-block w-100" src="../../images/bike/Scott_AddictSE-576px.jpg" alt="Cestný šedý bicykel
                              Scott Addict SE" />
                                    </picture>
                                    <div class="card-body">
                                        <p class="card-text mb-0">SCOTT ADDICT SE DISC</p>
                                        <p class="card-text mb-0">Cena 3999.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="../product_detail/productdetail_page.html">
                                <div class="card mb-4 shadow-sm">
                                    <picture>
                                        <source class="d-block w-100" media="(min-width:768px)" srcset="
                              ../../images/bike/Scott_ContessaSpeedster15.jpg
                            " />
                                        <source class="d-block w-100" media="(min-width:576px)" srcset="
                              ../../images/bike/Scott_ContessaSpeedster15-768px.jpg
                            " />
                                        <img class="d-block w-100" src="../../images/bike/Scott_ContessaSpeedster15-576px.jpg" alt="Cestný modrý bicykel
                              Scott Contessa Speedster 15" />
                                    </picture>

                                    <div class="card-body">
                                        <p class="card-text mb-0">
                                            SCOTT CONTESSA SPEEDSTER 15
                                        </p>
                                        <p class="card-text mb-0">Cena 1199.00€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
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