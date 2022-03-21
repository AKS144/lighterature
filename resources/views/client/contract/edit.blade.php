@include('layouts.header')
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>Contract </h4>
                    <div class="bt-option">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Contract</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section spad">
    <div class="container">
        <div class="section-title">
            <h4>Contract</h4>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form>
                    <label>Client Name</label>
                    <input type="" name="" class="form-control"><br>

                    <label>Job Date</label>
                    <input type="date" name="" class="form-control"><br>
                    <label>Job Details</label>
                    <textarea class="form-control "></textarea> <br>
                    <label>Address</label>
                    <textarea class="form-control "></textarea> <br>
            </div>
            <div class="col-lg-6">

                <label>Client Email</label>
                <input type="email" name="" class="form-control"><br>
                <label>Cost</label>
                <input type="number" name="" class="form-control"><br>
                <label>Requirements</label>
                <textarea class="form-control "></textarea> <br>
                <br>
                <a class="primary-btn" style="color:#fff;">Sumbit</a>
            </div>
        </div><br>
        </form>
    </div>
</section>


@include('layouts.footer')
