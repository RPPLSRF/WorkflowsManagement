@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Missions</h2>
        </div>
        <div class="pull-right">
            @can('mission-create')
            <a class="btn btn-success mb-2" href="{{ route('missions.create') }}"><i class="fa fa-plus"></i> Create New Mission</a>
            @endcan
        </div>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert">
        {{ $value }}
    </div>
@endsession

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="100px">Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($missions as $mission)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $mission->name }}</td>
        <td>{{ $mission->detail }}</td>
        <td>Pending</td>
        <td>
            <form action="{{ route('missions.destroy',$mission->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('missions.show',$mission->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                @can('mission-update')
                <a class="btn btn-primary btn-sm" href="{{ route('missions.edit',$mission->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                @endcan

                @csrf
                @method('DELETE')

                @can('mission-delete')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
                @endcan

                @can('mission-approve')
                <a class="btn btn-success btn-sm" href=""><i class="fa fa-plus"></i>Approve</a>
                @endcan

                @can('mission-reject')
                <a class="btn btn-outline-danger btn-sm" href=""><i class="fa fa-plus"></i>Reject</a>
                @endcan

            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $missions->links('pagination::bootstrap-5') !!}

@include('partials.footer')
@endsection
