@include('layouts.header')
    <!-- Header End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Album </h4>
                        <div class="bt-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Album 1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Breadcrumb Section End -->
    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                   <img src="img/bg4.jpg" height="450">
                </div>
                 <div class="col-lg-4">
                   <img src="img/bg2.jpg" height="450">
                </div>
                 <div class="col-lg-4">
                   <img src="{{ asset('assets/img/bg3.jpg') }}" height="450">
                </div>
            </div><br>
             <div class="row">
                <div class="col-lg-4">
                   <img src="img/1.jpg" height="">
                </div>
                 <div class="col-lg-4">
                   <img src="img/bg.jpg" height="">
                </div>
                 <div class="col-lg-4">
                   <img src="img/slider/slider1.jpg" height="">
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3">
                   <img src="img/slider/slider1.jpg" height="">
                </div>
                 <div class="col-lg-3">
                   <img src="img/slider/slider3.jpg" height="">
                </div>
                 <div class="col-lg-3">
                   <img src="img/slider/slider4.jpg" height="">
                </div>
                 <div class="col-lg-3">
                   <img src="img/slider/slider5.jpg" height="">
                </div>
            </div><br>
        </div>
    </section>
    <!-- About Section End -->
    @include('layouts.footer')