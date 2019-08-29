@extends('layouts.app')

@section('content')
    <div class="container">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                <div id="app">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                                <nav>
                                    <div>
                                        <router-link to="/">Home</router-link>
                                    </div>
                                    <div>
                                        <router-link to="/posts">Posts</router-link>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-lg-10">
                                <router-view></router-view>
                            </div>
                        </div>
                </div>
        </div>
    </div>
@endsection
