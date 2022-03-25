@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.job.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $reward->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Reward range
                        </th>
                        <td>
                            {{ $reward->reward_range }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Reward Number
                        </th>
                        <td>
                            {{ $reward->reward_num ?? '' }}
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

    </div>
</div>
@endsection