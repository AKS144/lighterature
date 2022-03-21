@include('layouts.header')

<section class="property-section latest-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <div class="section-title">
                        <h3>Latest Job</h3>
                    </div>
                </center>
            </div>
        </div>

        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b><a href="{{ route('jobs.show', $job->id) }}">
                                        <h4>{{ $job->name }}</h4>
                                    </a></b></h5>
                            <p class="card-text">
                                <i class="fa fa-map-marker"></i> {{ $job->location->name }} <i
                                    class="fa fa-clock-o"></i> 1 Week
                            </p>
                            <h5><b>{{ $job->salary }}</b> </h5><br>
                            <a href="./job-details.php" class="primary-btn">Apply Now</a>
                        </div>
                    </div>
                </div><br>
            @endforeach
        </div>
    </div>
</section>


@include('layouts.footer')