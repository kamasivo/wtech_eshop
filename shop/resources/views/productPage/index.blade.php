@extends('layout.app')

<link rel="stylesheet" href="{{ asset('css/productPage.css') }}">

@section('content') 
<!-- category main page -->
<section class="container-fluid">
    <div class="row my-5">
        @if(isset($hidefilter))
        <div class="col-lg-3 col-md-12">
        </div>
        @else
        <div class="col-lg-3 col-md-12">
            <a class="btn btn-dark mb-3" data-toggle="collapse" href="#filter" role="button" aria-expanded="true" aria-controls="filter">Skryť/Zobraziť filter</a>
            <section class="mb-4 ml-2 px-2 bg-light">
                <div class="collapse show p-4" id="filter">
                    <form method="GET" id="filterForm" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                        <div class="col-12 ml-3 pl-0">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h5>Cena:</h5>
                                </div>
                                <div class="col-lg-12 pl-0 py-1">
                                    <span class="font-weight-bold">Od:
                                        <input class="text-right" type="number" name="priceFrom" 
                                        <?php
                                            if (isset($_REQUEST['priceFrom'])) {
                                                echo 'value="' . $_REQUEST['priceFrom'] . '"';
                                            } else {
                                                echo 'value=""';
                                            }
                                        ?>
                                        min="1" max="20000" placeholder="0"/>
                                        €</span>
                                </div>
                                <div class="col-lg-12 pl-0 py-1">
                                    <span class="font-weight-bold">Do:
                                        <input class="text-right" type="number" name="priceTo"
                                        <?php
                                            if (isset($_REQUEST['priceTo'])) {
                                                echo 'value="' . $_REQUEST['priceTo'] . '"';
                                            } else {
                                                echo 'value=""';
                                            }
                                        ?>
                                        min="1" max="20000" placeholder="20000"/>
                                        €</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-4 ml-3 pl-0">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h5>Velkosť:</h5>
                                </div>
                                @if(isset($sizes))          
                                    @foreach($sizes as $size)
                                    <div class="form-check col-12 pl-0 ml-4">
                                        <input type="checkbox" class="form-check-input filled-in" name="size[]" value="{{$size->size}}"/>
                                        <label class="form-check-label card-link-secondary">{{$size->size}}</label>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-12 my-4 ml-3 pl-0">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h6>Značka:</h6>
                                </div>
                                @if(isset($brands))
                                    @foreach($brands as $brand)
                                    <div class="form-check col-12 pl-0 ml-4">
                                        <input type="checkbox" class="form-check-input filled-in" name="brand[]" value="{{$brand->brand}}"/>
                                        <label class="form-check-label card-link-secondary" for="used">{{$brand->brand}}</label>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <button class="btn btn-success btn-block" type="submit">
                                Vyhľadať produkty
                        </button>
                        </div>
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <a class="btn btn-secondary btn-block"
                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            $url =  substr($url, 0, strpos($url,"/products")+12);
                            echo '<a href=' . $url; ?>
                            type="submit">
                                Reset
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        @endif
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between my-4">
                    <div class="col-6 category-name">
                    @if(isset($category))
                        <h4>{{$category->name}}</h4>
                    @else
                        <h4>Výsledky hľadania</h4>
                    @endif
                    </div>
                    <div class="col-6 align-item-right">
                        <span class="pull-right">Zoradiť podľa ceny:</br>
                        <?php
                        $url = $_SERVER['REQUEST_URI'];
                        $url = str_replace("&sort=asc", "", $url);
                        $url = str_replace("&sort=desc", "", $url);
                        $url = str_replace("?sort=asc", "", $url);
                        $url = str_replace("?sort=desc", "", $url);
                        (strlen($url) <= 11) ? $url .= '?' : $url .= '&';
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
                        @if(isset($products))
                        @foreach($products as $product)
                        <div class="col-md-4 col-12">
                            <a href="{{ URL::to('product/' . $product->id) }}">
                                <div class="card mb-4 shadow-sm">
                                    @for($i = 0; $i < count($images); $i++)
                                        @if($product->id ==  $images[$i]->product_id)
                                            <img class="d-block w-100" src="{{ asset('storage/images' .$images[$i]->path . ' ' ) }}" alt=" Cestný tmavozelený bicykel" />    
                                            @break;
                                        @endif
                                    @endfor
                                    <div class="card-body">
                                        <p class="card-text mb-0">{{$product->name}}</p>
                                        <p class="card-text mb-0">{{$product->price}}€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @else
                        <div class="col-12">
                            <h5>{{$message}}</h5>
                        @endif
                    </div>
                </div>
            </section>
            @if(isset($products))
            <div class="d-flex justify-content-center">
                {!! $products->appends(Request::all())->links('pagination::bootstrap-4') !!}
            </div>
            @endif
        </div>
    </div>
</section>

@endsection