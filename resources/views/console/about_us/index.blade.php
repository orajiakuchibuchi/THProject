@extends('layouts.app')

@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        <div class="u-margin-b-20">
            <a class="btn btn-primary" href="{{ route('console.about_us', ['all']) }}">All</a>&nbsp;
            <a class="btn btn-primary"  href="{{ route('console.about_us', ['influencer']) }}">Influencer</a>&nbsp;
            <a class="btn btn-primary"  href="{{ route('console.about_us', ['seller']) }}">Seller</a>&nbsp;
        </div>

        @include('components.alert')

        <h4 class="u-margin-b-20">{{ ucfirst($role ?? null) }}</h4>
        
        <div class="table-content table-responsive user-table">
            <table class="table table-bordered item-center">
                <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                </tr>
                </thead>
                <tbody>
                @isset($aboutUs)
                    @foreach($aboutUs as $au)
                        <tr>
                            <td>{{ $au->email }}</td>
                            <td>{{ $au->name }}</td>
                            <td>{{ $au->phone }}</td>
                            <td>{{ ucfirst($au->role) }}</td>
                        </tr>
                    @endforeach
                @endisset

                </tbody>
            </table>
        </div>

    </div>

@endsection
