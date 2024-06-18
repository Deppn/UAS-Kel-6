<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ube</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playwrite+DE+SAS:wght@100..400&family=Righteous&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container px-0">
                <a class="navbar-brand me-auto fs-1 ube" href="#!">Ube</a>
                <div class="d-flex">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                        <input class="form-control me-2 icon-rtl" type="search" value placeholder="Search" aria-label="Search">
                        <div class="d-flex align-items-center ms-3">
                            <i class="bi bi-person-fill"></i>
                            <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
                        </div>
                    </ul>
                    <form class="d-inline-flex ms-3" action="{{ url('carts') }}" method="get">
                        <button class="btn btn-outline-purple px-3" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="mt-2">
            <div class="container d-flex justify-content-around align-items-center">
                <div class="text-star text-white">
                    <h1 class="display-4 fw-bolder">Grab Upto 50% Off<br>On Selected Items</h1>
                    <p class="lead fw-normal fs-5 text-white-50 mb-1">*Limited Time Offers Only</p>
                    <button type="button" class="btn btn-purple text-white px-4 py-3 mt-4">SHOP NOW</button>
                </div>
                <img class="position-relative headerphoto" style="height: 430px"src="assets/headerphoto.png" alt="headerphoto">
            </div>
        </header>

        <!-- Section-->
        <section class="container py-5 px-0">
            <div class="titleproduct fs-2 fw-semibold">Products that may interest you</div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-indigo text-white position-relative" style="top: 0.7rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special New Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-4">
                        <div class="h-100">
                            <!-- Product image-->
                            <img class="card-img-top pt-3s" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special New Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-4">
                        <div class="h-100">
                            <!-- Product image-->
                            <img class="card-img-top pt-3s" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special New Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-4">
                        <div class="h-100">
                            <!-- Product image-->
                            <img class="card-img-top pt-3s" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special New Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-indigo text-white position-relative" style="top: 0.7rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special New Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-4">
                        <div class="h-100">
                            <!-- Product image-->
                            <img class="card-img-top pt-3s" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special New Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-purple">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Ube 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>