@include('layouts.search.header')

<body id="imageChange">
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <!-- assets/img/logo/weblogo.png -->
                            <a href="index.html"><img src="{{ asset('assets/img/logoweb.png') }}" alt=""
                                    width="104"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">

                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="./login.html" class="mr-40"><i class="ti-user"></i> Log in</a>
                            <!-- <a href="#" class="btn">Add Listing</a> -->
                            <a href="#" class="mr-40"><i class="ti-user"></i>Register</a>

                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <!--? Hero Area Start-->
        <div class="slider-area  hero-overly">
            <div class="single-slider hero-overly  slider-height1 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <!-- Hero Caption -->
                            <div class="hero__caption pt-100">
                                <h1>Search</h1>
                            </div>
                            <!--Hero form -->
                            <form action="{{ route('profsearch') }}" class="search-box mb-100">
                                <div class="input-form" style="padding-right: 12px;">
                                    <input type="text" name="profsearch" placeholder="Search Here....">
                                </div>
                                <div class="search-form">
                                    
                                    {{-- <a href="#"><i class="ti-search"></i> Search</a> --}}
                                    <div class="col-lg-2 form-cols">
                                        <button type="submit" class="btn btn-info">
                                          <span class="lnr lnr-magnifier"></span> Search
                                        </button>
                                    </div>	
                                </div>
                            </form>
                         
                        </div>
                    </div>
                </div>

            </div>
            <footer class="hero-overly">
                <div class="footer-wrapper pt-30">
                    <!-- footer-bottom -->
                    <div class="footer-bottom-area">
                        <div class="container">
                            <div class="footer-border">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-xl-10 col-lg-9 ">
                                        <div class="footer-copy-right">
                                            <p style="color: azure;">
                                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                                Copyright &copy;
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script> All rights reserved | Powered by <a
                                                    href="http://coderix.io/" target="_blank"> Coderix</a>
                                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <style>
        #imageChange {
    
            width: 100% !important;
            height: 100% !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;   
        }
    
        .header-transparent {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 9;
            padding: 16px;
        }
    
        .fa-star:before {
            content: "\f005";
            color: #f3ca00;
        }
    
        .slider-area form.search-box .search-form a {
            width: 100%;
            height: 60px;
            background: #f50505;
            font-size: 20px;
            line-height: 1;
            text-align: center;
            color: #fff;
            display: block;
            padding: 15px;
            border-radius: 0px;
            text-transform: capitalize;
            font-family: "Rubik", sans-serif;
            line-height: 31px;
            font-size: 17px;
        }
    
        .slider-area .hero__caption h1 {
            font-size: 50px;
            font-weight: 400;
            color: #fff;
            line-height: 1.3;
            margin-bottom: 5px;
        }
    
        .header-sticky.sticky-bar {
            background: #3B2774;
            display: none;
        }
    
        .footer-bottom-area .footer-copy-right p a {
            color: #ff0000;
        }
    
        .pt-100 {
            padding-top: 0px;
        }
    
        html,
        body {
            margin: 0;
            height: 100%;
        }
    
        .slider-area form.search-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            border-radius: 8px;
            background: none;
            padding: 14px 16px;
        }
    
        html,
        body {
            margin: 0;
            height: 100%;
        }
    
    </style>
    <script type="text/javascript">
        $(function() {
            var body = $('body');
            var backgrounds = [
                'url(https://d25tv1xepz39hi.cloudfront.net/2018-08-13/files/eos-m50-edwin-martinez-landscape_1827-4.jpg)',
                'url(https://www.peerspace.com/resources/wp-content/uploads/best-san-diego-landscape-photographers-1080x600.jpg)',
                'url(https://www.peerspace.com/resources/wp-content/uploads/best-san-diego-landscape-photographers-1080x600.jpg)'
            ];
            var current = 0;
    
            function nextBackground() {
                body.css(
                    'background',
                    backgrounds[current = ++current % backgrounds.length]
                );
    
                setTimeout(nextBackground, 2000);
            }
            setTimeout(nextBackground, 2000);
            body.css('background', backgrounds[0]);
        });
    </script>

    @include('layouts.search.footer')


    