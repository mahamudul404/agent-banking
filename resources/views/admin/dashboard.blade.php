{{-- simple admin dashboard for practice with bootstrap use and use cdn link --}}



@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Admin Dashboard</h1>
                <p class="text-center">Welcome to the admin dashboard. Here you can manage your application.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title
">User Management</h5>

                        <p class="card-text">Manage users, roles, and permissions.</p>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">View and generate reports for your application.</p>
                        <a href="{{ route('reports.index') }}" class="btn btn-primary">View Reports</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">Configure application settings and preferences.</p>
                        <a href="{{ route('settings.index') }}" class="btn btn-primary">Application Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // You can add custom JavaScript here if needed
        console.log('Admin Dashboard Loaded');
    </script>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
        }

        .btn {
            margin-top: 10px;
        }

        .container {
            margin-top: 20px;
        }

        .text-center {
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
