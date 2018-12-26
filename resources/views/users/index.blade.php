{{--откуда берем--}}
@extends('admin.layout')

@section('content')
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Имя</th>
            <th>Емайл</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection
