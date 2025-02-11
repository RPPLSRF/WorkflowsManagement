@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Leaves</h2>
        </div>
        <div class="pull-right">
            @can('left-create')
            <a class="btn btn-success mb-2" href="{{ route('lefts.create') }}"><i class="fa fa-plus"></i> Request New Leave</a>
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
    @foreach ($lefts as $left)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $left->name }}</td>
        <td>{{ $left->detail }}</td>
        <td>Pending</td>
        <td>
            <form action="{{ route('lefts.destroy',$left->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('lefts.show',$left->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                @can('left-update')
                <a class="btn btn-primary btn-sm" href="{{ route('lefts.edit',$left->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                @endcan

                @csrf
                @method('DELETE')

                @can('left-delete')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
                @endcan

                @can('left-approve')
                <a class="btn btn-success btn-sm" href=""><i class="fa fa-plus"></i>Approve</a>
                @endcan

                @can('left-reject')
                <a class="btn btn-outline-danger btn-sm" href=""><i class="fa fa-plus"></i>Reject</a>
                @endcan

            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $lefts->links('pagination::bootstrap-5') !!}

@include('partials.footer')
@endsection
