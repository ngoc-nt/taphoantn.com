@section('banner')
<div class="container">
    <div class="row">
        <!-- Begin Slider Area -->
        <div class="col-lg-8 col-md-8">
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <!-- Begin Single Slide Area -->
                    <div class="single-slide align-center-left  animation-style-01 bg-1">
                        <div class="slider-progress"></div>
                        <div class="slider-content">
                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                            <h2>Chamcham Galaxy S9 | S9+</h2>
                            <h3>Starting at <span>$1209.00</span></h3>
                            <div class="default-btn slide-btn">
                                <a class="links" href="">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide Area End Here -->
                    <!-- Begin Single Slide Area -->
                    <div class="single-slide align-center-left animation-style-02 bg-2">
                        <div class="slider-progress"></div>
                        <div class="slider-content">
                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                            <h2>Work Desk Surface Studio 2018</h2>
                            <h3>Starting at <span>$824.00</span></h3>
                            <div class="default-btn slide-btn">
                                <a class="links" href="">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide Area End Here -->
                    <!-- Begin Single Slide Area -->
                    <div class="single-slide align-center-left animation-style-01 bg-3">
                        <div class="slider-progress"></div>
                        <div class="slider-content">
                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                            <h2>Phantom 4 Pro+ Obsidian</h2>
                            <h3>Starting at <span>$1849.00</span></h3>
                            <div class="default-btn slide-btn">
                                <a class="links" href="">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide Area End Here -->
                </div>
            </div>
        </div>
        <!-- Slider Area End Here -->
        <!-- Begin Li Banner Area -->
        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
            @foreach($slider as $key => $sli)
            <div class="li-banner">
                <a href="#">
                    <img src="{{URL::to('public/uploads/slider/'.$sli->slider_image )}}" alt="">
                </a>
                <br>
            </div>
            @endforeach
            {{-- <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                <a href="#">
                    <img src="{{asset('public/frontend/images/banner/1_2.jpg')}}" alt="">
                </a>
            </div> --}}
        </div>
        <!-- Li Banner Area End Here -->
    </div>
</div>

@endsection
