@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">

            <div class="card card-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-12">
                            <div class="card mb-2 bg-gradient-dark">
                                <img class="card-img-top" style="opacity:0.4!important;"
                                     src="{{asset('dist/img/assembleia-dash.jpg')}}" alt="your application">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h5 class="card-title text-primary text-white">welcome!</h5>
                                    <p class="card-text text-white pb-2 pt-1">Welcome to your application.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                {{-- set you component --}}
            </div>
            <div class="row">
                {{-- set you component --}}
            </div>
        </div>
    </div>
@endsection
