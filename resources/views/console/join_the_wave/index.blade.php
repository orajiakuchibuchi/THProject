@extends('layouts.app')

@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')

        <h4 class="u-margin-b-20">{{ ucfirst($role ?? null) }}</h4>
        <div class="table-content table-responsive user-table">
            <table class="table table-bordered item-center">
                <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($waves)
                    @foreach($waves as $wave)
                        <tr>
                            <td>{{ $wave->email }}</td>
                            <td>{{ $wave->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('console.joinTheWave', [$wave->id]) }}">Show</a>
                            </td>
                        </tr>
                    @endforeach
                @endisset

                </tbody>
            </table>
        </div>

    </div>

@endsection
