@include('layouts.header')

<!-- JS & CSS library of MultiSelect plugin -->
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.min.css') }}">

<!-- Header End -->
<!-- Breadcrumb Section End -->
<!-- About Section Begin -->

<section class="about-section spad">
    <div class="container">
        <div class="section-title">
            <h4>My Profile</h4>
        </div>
        <form class="forms-sample" id="form" action="{{ route("profile.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                <label>{{ __('Name') }}</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                    value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-4 {{ $errors->has('mobile') ? 'has-error' : '' }}">
                <label>{{ __('Mobile') }}</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone"><br>
                @if ($errors->has('mobile'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-4 {{ $errors->has('dob') ? 'has-error' : '' }}">
                <label>{{ __('Date of Birth') }}</label>
                <input type="date" name="dob" class="form-control" id="dob">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 {{ $errors->has('username') ? 'has-error' : '' }}">
                <label>{{ __('Username') }}</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-4 {{ $errors->has('email') ? 'has-error' : '' }}">
                <label>Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email"><br>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-4">
                <label>{{ __('Gender') }}</label><br>
                <select class="form-control" name="gender" id="" required>
                    <option>{{ __('Male') }}</option>
                    <option>{{ __('Female') }}</option>
                    <option>{{ __('Others') }}</option>
                </select>
                @if ($errors->has('gender'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 {{ $errors->has('id_type') ? 'has-error' : '' }}">
                <label>{{ __('ID Type') }}</label>
                <select class="form-control" id="" name="id_type">
                    <option>{{ __('PAN Card') }}</option>
                    <option>{{ __('Aadhar Card') }}</option>
                    <option>{{ __('Passport') }}</option>
                    <option>{{ __('Voter Card') }}</option>
                </select>
            </div>
            <div class="col-md-4">
                <div class="col-md-4 {{ $errors->has('id_no') ? 'has-error' : '' }}">
                    <label for="">{{ __('ID Number') }}</label>
                    <input type="text" name="id_no" class="form-control" id="id_no" placeholder="ID Number">
                    @if ($errors->has('id_no'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_no') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-md-4 {{ $errors->has('categories') ? 'has-error' : '' }}">
                <div class="form-group">
                    <label> Select Categories</label>
                    <select name="categories[]" id="categories" class="form-control select2"
                        data-minimum-results-for-search="Infinity" multiple="multiple">
                        @foreach ($categories as $id => $categories)
                            <option value="{{ $id }}"
                                {{ in_array($id, old('categories', [])) || (isset($job) && $job->categories->contains($id)) ? 'selected' : '' }}>
                                {{ $categories }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('categories'))
                        <em class="invalid-feedback">
                            {{ $errors->first('categories') }}
                        </em>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label> Location</label><br>
                <select name="location" id="location" class="form-control select2" required>
                    @foreach ($locations as $id => $location)
                        <option value="{{ $id }}"
                            {{ (isset($job) && $job->location ? $job->location->id : old('location')) == $id ? 'selected' : '' }}>
                            {{ $location }}</option>
                    @endforeach
                </select>
                @if ($errors->has('location'))
                    <em class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </em>
                @endif
            </div>

            <div class="col-md-4 {{ $errors->has('skills') ? 'has-error' : '' }}">
                <label for="">{{ __('Skills') }}</label>
                <input type="text" name="skills" id="skills" class="form-control" placeholder="Skills"><br>
                @if ($errors->has('skills'))
                    <span class="help-block">
                        <strong>{{ $errors->first('skills') }}</strong>
                    </span>
                @endif
            </div>

            {{-- <div class="form-group {{ $errors->has('skills') ? 'has-error' : '' }}">
                <label for="">{{ __('Skills')}}</label>
                <input type="text" name="skills" class="form-control" id="skills" placeholder="Skills">
                @if ($errors->has('skills'))
                    <span class="help-block">
                        <strong>{{ $errors->first('skills') }}</strong>
                    </span>
                @endif
            </div> --}}


            <div class="col-md-4">
                <label>{{ __('Years of Experience') }}</label><br>
                <input type="text" name="exp_yrs" id="exp_yrs" class="form-control"><br>
                @if ($errors->has('exp_yrs'))
                    <span class="help-block">
                        <strong>{{ $errors->first('exp_yrs') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label>{{ __('Location worked') }}</label><br>
                <input type="text" name="worked_loc" id="worked_loc" class="form-control"><br>
                @if ($errors->has('worked_loc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('worked_loc') }}</strong>
                    </span>
                @endif
            </div>


            <div class="col-md-4">
                <label>Course Name</label>
                <input type="text" name="course_name" class="form-control"><br>
                @if ($errors->has('course_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('course_name') }}</strong>
                    </span>
                @endif
            </div>


            <div class="col-md-4">
                <label> Qualification</label><br>
                <input type="text" name="qualification" id="qualification" class="form-control"><br>
                @if ($errors->has('qualification'))
                    <span class="help-block">
                        <strong>{{ $errors->first('qualification') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label> Profile</label><br>
                <input type="file" name="" class="form-control"><br>
                @if ($errors->has('profile_img'))
                    <span class="help-block">
                        <strong>{{ $errors->first('course_cert_img') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label> Course Certificate</label><br>
                <input type="file" name="" class="form-control"><br>
                @if ($errors->has('course_cert_img'))
                    <span class="help-block">
                        <strong>{{ $errors->first('course_cert_img') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div id="inputFormRowadditional">
            <div class="row">
                <div class="col-md-6">
                    <h4>Add Equipment</h4><br>
                    <input type="text" name="add_Equipment[]" class="form-control m-input" placeholder="Enter Equipment"
                        autocomplete="off">
                </div>
            </div>

            <div id="newadditionalRow"></div>
            <br>
            <button id="addadditional" type="button" class="btn btn-info">+ Add More </button>
            <br>
            {{-- </form> --}}
            <br>
            {{-- <a class="primary-btn" style="color:#fff;">Sumbit</a> --}}
            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
        </div>
    </form>
</section>
<!-- About Section End -->

@include('layouts.footer')



<script src="{{ asset('assets/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<script type="text/javascript">
    $("#addadditional").click(function() {
        var html = '';
        html += '<div id="inputFormRowadditional">';
        html += '<div class="row">';
        html += '<div class="col-md-6">';
        html += '<label>&nbsp;</label>';
        html +=
            '<input type="text" name="add_Equipment[]" class="form-control m-input" placeholder="Enter Equipment" autocomplete="off">';
        html += '</div >';
        html += '<div class="col-md-1" style="margin-top: -21px;">';
        html += '<label style="padding-bottom: 21px;">&nbsp;</label>';
        html += '<button id="removeadditionalRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#newadditionalRow').append(html);
    });
    // remove row

    $(document).on('click', '#removeadditionalRow', function() {
        $(this).closest('#inputFormRowadditional').remove();
    });
    $(document).ready(function() {
        $('.select2').select2({
            minimumResultsForSearch: -1,
            dropdownCssClass: 'no-search'
        })
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
