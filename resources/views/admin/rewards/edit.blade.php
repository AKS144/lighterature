@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.rewards.update", [$reward->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- <div class="form-group {{ $errors->has('Reward range') ? 'has-error' : '' }}">
                <label for="reward_range">Reward Range*</label>
                <select name="reward_range" id="reward_range" class="form-control select2" required>                   
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
                <input type="text" id="reward_range" name="reward_range" class="form-control" value="{{ old('reward_range', isset($reward) ? $reward->reward_range : '') }}" required>
                @if($errors->has('Reward range'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Reward range') }}
                    </em>
                @endif             
            </div>


            <div class="form-group {{ $errors->has('Reward number') ? 'has-error' : '' }}">
                <label for="reward_num">Reward number*</label>
                <input type="text" id="reward_num" name="reward_num" class="form-control" value="{{ old('reward_num', isset($reward) ? $reward->reward_num : '') }}" required>
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