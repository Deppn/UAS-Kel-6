<!-- Section-->
<section class="container py-5 px-0">
            <div class="titleproduct fs-2 fw-semibold" id="product">Products that may interest you</div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
                    <div class="col mb-5 mt-4">
                        @foreach($product as $products)
                        <div class="h-100">
                            <!-- Product image-->
                            <img class="card-img-top pt-3s" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body pt-3">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$products->title}}</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-left small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    ${{$products->price}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-2 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-purple mt-auto rounded-pill px-4" href="#">Add to cart</a></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
</section>