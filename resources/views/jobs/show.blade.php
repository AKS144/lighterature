@include('layouts.header')

<section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>Job </h4>
                    <div class="bt-option">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Job Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="property-section latest-property-section spad">
    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h5 class="card-title"><b>Required Freelancer Photographer in Panaji</b></h5>
                                <p class="card-text">
                                    <i class="fa fa-map-marker"></i> Panjim <i class="fa fa-clock-o"></i> 2 Weeks
                                    <b>₹ 34,000</b>
                                </p>

                            </div>
                            <div class="col-lg-4 text-right">
                                <a href="#" class="primary-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div><br>
            </div>


        </div><br>
        <div class="row">

            <div class="col-lg-8" style="margin-top: -92px;">
                <h6 class="card-title"><b>Job Role</b></h6>
                {{-- <p align="justify">We are at Joberie looking to hire Freelancer Photographer urgently nearby Panaji
                    area, candidate who may interested to travel across Goa and shoot as per clients requirements is
                    perfect fit for. Refer below job role and responsibility for more information and qualification
                    criteria’s.
                </p> --}}
                <p align="justify">{{ $job->name }}</p>

                {{-- - Indoor and Outdoor Shoots in Panaji, Setting Lights, Arranging Equipment’s<br>
                - Capturing Best Photos from Occasions, Photo Editing<br>
                - Shoot and capture the experience of farmers using Company’s products.<br>
                - Create content with an exceptional range of creative, technical, and documentary imagery.<br>
                - Collaborate with Panaji Marketing team for shooting locations in Goa and next travel plan.<br>
                - Drive towards continuous improvement and creative solutions.<br>
                - Keeps equipment up to...<br><br> --}}

                {{-- <b>Qualification & Skills:</b><br>
                • Strong communication skills.<br>
                • Maintain high standards for creative output.<br>
                • Strong work ethic.<br>
                • Knowledge of Photoshop<br><br> --}}

                <b>Requirements:</b><br>
                {{-- • 0-3 years of experience in videography and photography in Panaji Goa.<br>
                • DSLR Handling, Knowledge of camera settings, Good communication skills and presentable, aesthetic
                sense, eye for detail and innovative, Photoshop knowledge<br>
                • Candidate must have driving license to travel around Panaji<br>
                • Knowledge of DSLR and natural lighting, outdoor, indoor, studio lighting techniques.<br>
                • Ability to work long hours (some time required).<br>
                • Ability to stay focused and work independently until necessary tasks are completed.
                • The candidate should have experience of photography using a digital SLR and should be able to shoot in
                fully Manual mode with the knowledge of all the camera settings.<br>
                • Can speak local language of Panaji Goa – Ex: Konkani or English<br>
                • He / She should have a sound understanding of good photography practices and angles and a perfect
                aesthetic sense.<br>
                • Candidate should be able to carry himself well and should have good communication skills as well.<br>
                • Should be willing to travel around the Panaji Goa.<br> --}}
                <p align="justify">{{ $job->requirements }}</p>

                <b>Location:</b></br>
                <p align="justify">{{ $job->location->name }}</p>
               

            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/artist/artist2.jpg" class="card-img-top" alt="Advt">
                    <div class="card-body">
                        <p class="card-text">Advt 1</p>
                    </div>
                </div> <br>
                <div class="card" style="width: 18rem;">
                    <img src="img/artist/artist4.jpg" class="card-img-top" alt="Advt">
                    <div class="card-body">
                        <p class="card-text">Advt 2</p>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</section>
</div>


@include('layouts.footer')