@include('layouts.header')


    <!-- Header End -->

    <!-- Hero Section Begin -->
   <!--  <section class="hero-section">
        <div class="container">
          
        </div>
    </section> -->

    <!-- Hero Section End -->

    <!-- Search Section Begin -->
    <section class="search-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h4 style="color:#fff ;">Search Here....!</h4>
                    </div>
                </div>
                <div class="col-lg-5">
            
                </div>
            </div>
            <div class="search-form-content">
               
                <form action="#" class="filter-form">
                    <div class="row">
                     <div class="col-lg-7">

                    <input type="text" name="" class="form-control">
                </div>
                 {{-- <div class="col-lg-5 text-left">
      
                    <button type="button" class="search-btn sm-width" style="border-radius:10px;">Search</button>
                </div> --}}
            </div>
                </form>
            </div>
            {{-- <div class="more-option">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-heading active">
                            <a data-toggle="collapse" data-target="#collapseOne" style="color:#fff;">
                    Advanced Search
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="mo-list">
                                    <div class="ml-column">
                                        <label for="air">Air conditioning
                                            <input type="checkbox" id="air">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="lundry">Laundry
                                            <input type="checkbox" id="lundry">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="refrigerator">Refrigerator
                                            <input type="checkbox" id="refrigerator">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="washer">Washer
                                            <input type="checkbox" id="washer">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="ml-column">
                                        <label for="barbeque">Barbeque
                                            <input type="checkbox" id="barbeque">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="lawn">Lawn
                                            <input type="checkbox" id="lawn">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="sauna">Sauna
                                            <input type="checkbox" id="sauna">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="wifi">Wifi
                                            <input type="checkbox" id="wifi">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="ml-column">
                                        <label for="dryer">Dryer
                                            <input type="checkbox" id="dryer">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="microwave">Microwave
                                            <input type="checkbox" id="microwave">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="pool">Swimming Pool
                                            <input type="checkbox" id="pool">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="window">Window Coverings
                                            <input type="checkbox" id="window">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="ml-column last-column">
                                        <label for="gym">Gym
                                            <input type="checkbox" id="gym">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="shower">OutdoorShower
                                            <input type="checkbox" id="shower">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="tv">Tv Cable
                                            <input type="checkbox" id="tv">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <br>
     <style type="text/css">

.set-bg :hover  {
        transition: all 0.5s ease-in-out 0s;
    transform: scale(1.3);
}

 </style>
   
   
    <div class="wrapper">

    <div class="filters"> <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filter<span class="px-1 fas fa-filter"></span></button> </div>
    <div id="mobile-filter">
        <div class="py-3">
            <h5 class="font-weight-bold">Categories</h5>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Wedding <span class="badge badge-primary badge-pill">3128</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Per-wedding <span class="badge badge-primary badge-pill">112</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Product Shoot <span class="badge badge-primary badge-pill">32</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Sports <span class="badge badge-primary badge-pill">48</span> </li>
            </ul>
        </div>
        <div class="py-3">
            <h5 class="font-weight-bold">Brands</h5>
            <form class="brand">
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input type="checkbox" checked> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div>
            </form>
        </div>
        <div class="py-3">
            <h5 class="font-weight-bold">Rating</h5>
            <form class="rating">
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> 
               
                </div>
            
            </form>

        </div>
    </div>
    <div class="content py-md-0 py-3">
        <section id="sidebar">
            <div class="py-3">
                <h5 class="font-weight-bold">Categories</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Wedding <span class="badge badge-primary badge-pill">328</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Per-wedding <span class="badge badge-primary badge-pill">112</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Product Shoot <span class="badge badge-primary badge-pill">32</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Sports <span class="badge badge-primary badge-pill">48</span> </li>
                </ul>
            </div>
              <div class="py-3">
                <h5 class="font-weight-bold">Search</h5>
                <form class="brand">
                    <div class="form-inline d-flex align-items-center py-1"> <input type="text" name="" class="form-control" placeholder="Search "> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <!-- <div class="btn btn-primary">Search</div> </div> -->
                    <!-- <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div> -->
                </form>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Location</h5>
                <form class="brand">
                    <div class="form-inline d-flex align-items-center py-1"> <input type="text" name="" class="form-control" placeholder="Search Location"> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <!-- <div class="btn btn-primary">Search</div> </div> -->
                    <!-- <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div> -->
                </form>
            </div>
            {{-- <div class="py-3">
                <h5 class="font-weight-bold">Rating</h5>
                <form class="rating">
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                </form>
            </div> --}}
             <div class="btn btn-primary">Search</div>
        </section> <!-- Products Section -->
        <section id="products">
            <div class="container py-3">
                <div class="row">
                @foreach($profiles as $profile)
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1" style="padding-bottom: 34px;">
                        <div class="card"> <img class="card-img-top" src="{{asset('assets/img/artist/artist1.jpg')}}">
                            <div class="card-body">

                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">{{ $profile->name }}</h6><img src="{{asset('assets/img/verify/verify.svg')}}" style="width: 22px;
    height: 19px;
    margin-left: 182px;
    margin-top: -71px;">
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> Short List | <span class="fas fa-star"></span> 4.5/5 (35 reviews) </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">₹2369</div>
                                       
                                    </div>
                                    <a href="{{ route('profshow', $profile->id) }}"><div class="btn btn-primary">View Profile</div></a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                     
                </div>
            </div>
        </section>
    </div>
</div>
@include('layouts.footer')
   

