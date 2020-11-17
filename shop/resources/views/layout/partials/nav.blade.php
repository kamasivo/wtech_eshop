<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="topHeader">
        <a class="navbar-brand" href="../main/main.html"><img width="40" height="40" src="../../images/logo_white.png" alt="Cykloshop logo" /></a>

        <button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../main/main.html">Domov </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategórie</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownCategory">
                        <a class="dropdown-item" href="../product/product_page.html"><i class="icons fa fa-bicycle"></i> Bicykle</a>
                        <a class="dropdown-item" href="../product/product_page.html"><i class="icons fa fa-motorcycle"></i> Elektrobicykle</a>
                        <a class="dropdown-item" href="../product/product_page.html"><i class="icons fa fa-tshirt"></i> Oblečenie</a>
                        <a class="dropdown-item" href="../product/product_page.html"><i class="icons fa fa-shoe-prints"></i> Tretry</a>
                        <a class="dropdown-item" href="../product/product_page.html"><i class="icons fa fa-tachometer-alt"></i> Komponenty</a>
                        <a class="dropdown-item" href="../product/product_page.html"><i class="icons fa fa-cogs"></i> Príslušenstvo</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logIn">Účet </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cart/cart.html">Košík </a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!--Log in-->
    <div class="fade modal" id="logIn" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h4 class="modal-title">Log in</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="example@mail.com" />
                        </div>
                        <div class="form-group">
                            <label>Heslo</label>
                            <input type="password" class="form-control" placeholder="Heslo" />
                        </div>
                        <div class="d-flex justify-content-center mb-0">
                            <button type="submit" class="btn btn-success btn-block">
                                Prihlásiť sa
                            </button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <a href="#" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#signIn" data-dismiss="modal">Registrovať sa</a>
                </div>
            </div>
        </div>
    </div>

    <!--Sign in-->
    <div class="fade modal" id="signIn" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h4 class="modal-title">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Prihlasovací e-mail</label>
                            <input type="text" class="form-control" placeholder="example@mail.com" />
                        </div>
                        <div class="form-group">
                            <label>Heslo</label>
                            <input type="password" class="form-control" placeholder="Heslo" />
                        </div>
                        <div class="form-group">
                            <label>Potvrdte heslo</label>
                            <input type="password" class="form-control" placeholder="Potvrdte heslo" />
                        </div>
                        <div class="form-group">
                            <label>Tel. číslo</label>
                            <input type="text" class="form-control" placeholder="+421 900 123 456" />
                        </div>
                        <div class="d-flex justify-content-center mb-0">
                            <button type="submit" class="btn btn-success btn-block">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>