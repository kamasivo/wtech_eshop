@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
@section('content')
<!--produkty-->
<section class="productdetail-page">
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12">
                @if ($images)
                <img class="d-block w-100" src="{{ asset('storage/images' . $images[0]->path . ' ' ) }}" alt=" Cestný tmavozelený bicykel" />
                @else
                Bad image path!
                @endif
            </div>

            <div class="col-xl-4 col-lg-5 col-12 px-0">
                <h1 class="product-title text-uppercase">{{$product->name}}</h1>

                <div class="container-fluid description bg-light">
                    <!--row1-->
                    <div class="row py-2 pl-4">
                        <div class="col-3 d-flex flex-start">
                            <span class="detail-name">Veľkosť</span>
                        </div>

                        <div class="col-9 d-flex justify-content-between">
                            <span type="radio" name="optradio" class="font-weight-bolder"> {{$product->size}}</span>
                        </div>
                    </div>

                    <!--row2-->
                    <div class="row py-2 pl-4">
                        <div class="col-3 d-flex flex-column">
                            <span class="detail-name text-uppercase">Cena</span>
                            <span class="detail-name">s 20% DPH</span>
                        </div>
                        <div class="col-9 flex-column">
                            <span id="productDetailPrice" class="text-danger price w-100">{{$product->price}}€&nbsp;</span>
                        </div>
                    </div>

                    <!--row3-->
                    <div class="row py-2 pl-4 align-items-center">
                        <div class="col-3 flex-column text-a">
                            <span class="detail-name">Množstvo</span>
                        </div>
                        <div class="col-6">
                            <div class="row mx-0 align-items-center">
                                <div class="col-1 px-0"><i class="fa fa-minus"></i></div>
                                <div class="col-4 px-2"><input type="number" class="quantity w-100" placeholder="1" min="1" /></div>
                                <div class="col-1 px-0"><i class="fa fa-plus"></i></div>
                            </div>

                        </div>
                    </div>

                    <!--row4-->
                    @if(Auth::user())
                    <div class="row py-4 px-4 justify-content-between">
                        <div class="col-sm-6 col-12 py-1 mx-0">
                            <a class="cart btn btn-success btn-block text-center" href="{{ url('/product/' . $product->id . '/addToCart') }}" role="button">Kúpiť</a>
                        </div>
                        <div class="col-sm-6 col-12 py-1 mx-0">
                            <a class="cart btn btn-secondary btn-block text-center" data-toggle="modal" href="#cartModal" role="button" aria-expanded="false" aria-controls="cartModal">Pridať do košíka</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!--Cart modal window-->
    <section>
        <div class="fade modal" role="dialog" id="cartModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <h4 class="modal-title">
                            Produkt bol uspešne pridaný do košíka
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 d-flex justify-content-center my-4">
                            <button type="button" class="buy btn btn-success btn-block text-center" data-dismiss="modal">
                                Pokračovať v nákupe
                            </button>
                        </div>
                        <div class="col-12 d-flex justify-content-center my-4">
                            <a href="../cart/cart.html" class="buy btn btn-secondary btn-block text-center" role="button">Prejsť do košíka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row m-4 px-2 pt-2 pb-4 description bg-light">
        <div class="col-12 py-4 flex-column">
            <h2 class="text-center">Popis</h2>
        </div>
        <div class="col-12 col-md-7 px-0">
            {{$product->description}}
            <!-- <ul class="px-4 ml-2">
                <li>
                    <span><strong>Farba</strong>: Matte Carbon&nbsp;</span>
                </li>
                <li>
                    <span><strong>Rám</strong>: Advanced Composite, 12mm pevné
                        osy&nbsp;</span>
                </li>
                <li>
                    <span><strong>Vidlica</strong>: Advanced Composite, karbonový
                        stĺpik OverDrive 2&nbsp;</span>
                </li>
                <li>
                    <span><strong>Riadítka</strong>: Giant Contact SL&nbsp;</span>
                </li>
                <li>
                    <span><strong>Predstavec</strong>: Giant Contact SL&nbsp;</span>
                </li>
                <li>
                    <span><strong>Sedlovka</strong>: Giant Variant,
                        karbonová&nbsp;</span>
                </li>
                <li>
                    <span><strong>Sedlo</strong>: Giant Fleet SL&nbsp;</span>
                </li>
                <li>
                    <span><strong>Radenie</strong>: Shimano Ultegra&nbsp;</span>
                </li>
                <li>
                    <span><strong>Prešmykač</strong>: Shimano Ultegra&nbsp;</span>
                </li>
                <li>
                    <span><strong>Prehadzovačka</strong>: Shimano Ultegra&nbsp;</span>
                </li>
                <li>
                    <span><strong>Brzdy</strong>: Shimano Ultegra,
                        hydraulické&nbsp;</span>
                </li>
                <li>
                    <span><strong>Brzdové páky</strong>: Shimano Ultegra,
                        hydraulické&nbsp;</span>
                </li>
                <li>
                    <span><strong>Kazeta</strong>: Shimano Ultegra, 11-30
                        zubov&nbsp;</span>
                </li>
                <li>
                    <span><strong>Reťaz</strong>: KMC X11SL-1&nbsp;</span>
                </li>
                <li>
                    <span><strong>Kľuky</strong>: Shimano Ultegra, prevodníky 52/36
                        zubov, wattmetr Giant PowerPro&nbsp;</span>
                </li>
                <li>
                    <span><strong>Stredové zloženie</strong>: Shimano,
                        pressfit&nbsp;</span>
                </li>
                <li>
                    <span><strong>Ráfiky</strong>: Giant SLR-1 42 Carbon Disc
                        WheelSystem (výška ráfikov 42 mm)&nbsp;</span>
                </li>
                <li>
                    <span><strong>Náboje</strong>: Giant SLR-1 42 Carbon Disc
                        WheelSystem, 12mm pevné osy&nbsp;</span>
                </li>
                <li>
                    <span><strong>Výplet</strong>: Giant SLR-1 42 Carbon Disc
                        WheelSystem&nbsp;</span>
                </li>
                <li>
                    <span><strong>Plášte</strong>: Giant Gavia Course 1, 700x28mm
                        (25c), skladacie, bezdušové&nbsp;</span>
                </li>
            </ul>
            <div>&nbsp;</div> -->
            <!-- </div> -->
            <!-- </div> -->
        </div>
</section>
@endsection