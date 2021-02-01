<div>
    <section class="p-0">
        <div class="slide-1 home-slider">
            <div>
                <div class="home  text-center">
                    <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-b-space p-t-0 mt-3 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-card">
                        <div class="no-slider row">
                            <div class="col-md-12 select_input">
                                <label class="h4">Delivery Port</label>

                                <select class="form-control" size="1" wire:model="deliveryPortId" required>
                                    <option selected>Please Select Delivery Port</option>
                                    @foreach ($deliveryPorts as $deliveryPort)
                                        <option value="{{ session(['deliveryPortId' => $deliveryPort->id]) }}"> {{ $deliveryPort->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title1 section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">top collection</h2>
    </div>

    <div class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-4 product-m row">
                        @foreach ($productSlider as $product)
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload bg-img"
                                                src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
                                                alt="{{ $product->name }}"
                                            >
                                        </a>
                                    </div>

                                    <div class="back">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload bg-img"
                                                src="https://images.unsplash.com/photo-1461800919507-79b16743b257?ixlib=rb-1.2.1&w=1000&q=80"
                                                alt="{{ $product->name }}"
                                            >
                                        </a>
                                    </div>

                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>

                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>

                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-reload" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-detail">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                    <a href="product-page(no-sidebar).html">
                                        <h6>{{ $product->name }}</h6>
                                    </a>

                                    <h4>${{ $product->price }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title1 section-t-space">
        <h2 class="title-inner1">Products</h2>
    </div>

    <section class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-card">
                        <div class="no-slider row">
                            @foreach($products as $product)
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#">
                                                <img class="img-fluid blur-up lazyload bg-img"
                                                    src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
                                                    alt="Image"
                                                >
                                            </a>
                                        </div>

                                        <div class="back">
                                            <a href="#">
                                                <img class="img-fluid blur-up lazyload bg-img"
                                                    src="https://images.unsplash.com/photo-1461800919507-79b16743b257?ixlib=rb-1.2.1&w=1000&q=80"
                                                    alt="Image"
                                                >
                                            </a>
                                        </div>

                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>

                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" title="Compare">
                                                <i class="fa fa-reload" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <a href="#">
                                            <h6>{{ $product->name }}</h6>
                                        </a>

                                        <h4>${{ $product->price }}</h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>