@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@section('content')

<!-- caorusel -->
<section class="d-flex justify-content-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source class="d-block w-100" media="(min-width:768px)" srcset="{{ asset('storage/images/promo1.jpg') }}" />
                    <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/promo1-768px.jpg" />
                    <img class="d-block w-100" src="../../images/promo1-576px.jpg" alt="carousel" style="width: auto" />
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source class="d-block w-100" media="(min-width:768px)" srcset="{{ asset('storage/images/promo2.jpg') }}" />
                    <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/promo2-768px.jpg" />
                    <img class="d-block w-100" src="../../images/promo2-576px.jpg" alt="carousel" style="width: auto" />
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source class="d-block w-100" media="(min-width:768px)" srcset="{{ asset('storage/images/promo3.jpg') }}" />
                    <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/promo3-768px.jpg" />
                    <img class="d-block w-100" src="../../images/promo3-576px.jpg" alt="carousel" style="width: auto" />
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source class="d-block w-100" media="(min-width:768px)" srcset="{{ asset('storage/images/promo4.jpg') }}" />
                    <source class="d-block w-100" media="(min-width:576px)" srcset="../../images/promo4-768px.jpg" />
                    <img class="d-block w-100" src="../../images/promo4-576px.jpg" alt="carousel" style="width: auto" />
                </picture>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- kategorie -->
<section class="mt-2">
    <h3 class="ml-3">Kategórie</h3>
    <div class="container">
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4">
                <a href="../product/product_page.html">
                    <div class="card mb-4 shadow-sm">
                        <picture>
                            <source class="img" media="(min-width:400px)" srcset="{{ asset('storage/images/kat1.jpg') }}" />
                            <img class="img" src="{{ asset('storage/images/kat1-240px.jpg') }}" alt="kategoria" />
                        </picture>
                        <div class="card-body">
                            <p class="card-text">Bicykle</p>
                        </div>
                    </div>
                </a>
            </section>
            <section class="col-12 col-sm-6 col-md-4">
                <a href="../product/product_page.html">
                    <div class="card mb-4 shadow-sm">
                        <div>
                            <picture>
                                <source class="img" media="(min-width:400px)" srcset="{{ asset('storage/images/kat2.jpg') }}" />
                                <img class="img" src="../../images/kat2-240px.jpg" alt="kategoria" />
                            </picture>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Elektrobicykle</p>
                        </div>
                </a>
        </div>
</section>
<section class="col-12 col-sm-6 col-md-4">
    <a href="../product/product_page.html">
        <div class="card mb-4 shadow-sm">
            <div>
                <picture>
                    <source class="img" media="(min-width:400px)" srcset="{{ asset('storage/images/kat4.jpg') }}" />
                    <img class="img" src="../../images/kat4-240px.jpg" alt="kategoria" />
                </picture>
            </div>
            <div class="card-body">
                <p class="card-text">Oblečenie</p>
            </div>
    </a>
    </div>
</section>
<section class="col-12 col-sm-6 col-md-4">
    <a href="../product/product_page.html">
        <div class="card mb-4 shadow-sm">
            <div>
                <picture>
                    <source class="img" media="(min-width:400px)" srcset="{{ asset('storage/images/kat6.jpg') }}" />
                    <img class="img" src="../../images/kat6-240px.jpg" alt="kategoria" />
                </picture>
            </div>
            <div class="card-body">
                <p class="card-text">Tretry</p>
            </div>
    </a>
    </div>
</section>
<section class="col-12 col-sm-6 col-md-4">
    <a href="../product/product_page.html">
        <div class="card mb-4 shadow-sm">
            <div>
                <picture>
                    <source class="img" media="(min-width:400px)" srcset="{{ asset('storage/images/kat5.png') }}" />
                    <img class="img" src="../../images/kat5-240px.png" alt="kategoria" />
                </picture>
            </div>
            <div class="card-body">
                <p class="card-text">Komponenty</p>
            </div>
    </a>
    </div>
</section>
<section class="col-12 col-sm-6 col-md-4">
    <a href="../product/product_page.html">
        <div class="card mb-4 shadow-sm">
            <div>
                <picture>
                    <source class="img" media="(min-width:576px)" srcset="{{ asset('storage/images/kat3.jpg') }}" />
                    <img class="img" src="../../images/kat3-240px.jpg" alt="kategoria" />
                </picture>
            </div>
            <div class="card-body">
                <p class="card-text">Príslušenstvo</p>
            </div>
    </a>
    </div>
</section>
</div>
</div>
</section>

@endsection