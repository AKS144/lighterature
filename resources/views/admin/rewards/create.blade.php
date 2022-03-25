@extends('layouts.admin')

<style>
    label.error {
        color: #dc3545;
        font-size: 14px;
    }
</style>

@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.Rewards.title_singular') }}
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif

    <div class="card-body">
        <form action="{{ route("admin.rewards.store") }}" id="regForm" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group {{ $errors->has('Reward range') ? 'has-error' : '' }}">
                <label for="reward_range">Reward Range*</label>
                <select name="reward_range" id="reward_range" class="form-control select2" required>                   
                        <option value=""></option>   
                        <option value=""></option> 
                        <option value=""></option>         
                </select>
                @if($errors->has('Reward range'))
                    <em class="invalid-feedback">
                        {{ $errors->first('reward_range') }}
                    </em>
                @endif             
            </div> --}}

            <div class="form-group {{ $errors->has('Reward range') ? 'has-error' : '' }}">
                <label for="reward_range">Reward Range*</label>
                <input type="text" id="reward_range" name="range" id="reward_range" class="form-control" value="{{ old('reward_range', isset($reward) ? $reward->reward_range : '') }}" >
                @if($errors->has('Reward range'))
                    <em class="invalid-feedback">
                        {{ $errors->first('reward_range') }}
                    </em>
                @endif             
            </div>

            <div class="form-group {{ $errors->has('Reward number') ? 'has-error' : '' }}">
                <label for="reward_num">Reward number*</label>
                <input type="text" id="reward_num" name="num" id="reward_num" class="form-control" value="{{ old('reward_num', isset($reward) ? $reward->reward_num : '') }}" >
                @if($errors->has('Reward number'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Reward number') }}
                    </em>
                @endif              
            </div>
                 
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function($) {
            $("#regForm").validate({
                rules: {
                    range: {
                        required : true,
                        minlength : 2,
                        maxlength : 50
                    },
                    num:{
                        required : true,
                        minlength : 2,
                        maxlength : 50
                    },
                },
                messages: {
                    range: {
                        required: "First name is required",
                        minlength: "First name cannot be more than 2 characters",
                        maxlength: "First name cannot be more than 20 characters"
                    },
                    num: {
                        required: "Last name is required",
                        minlength: "First name cannot be more than 2 characters",
                        maxlength: "Last name cannot be more than 20 characters"
                    },
                }
            });
        });
    </script>
