@extends('layouts.mainLayout')

@section('title', 'Select a Trainer')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/trainer.css') }}">
@endpush

@section('content')
<div class="py-5 bg-light team1">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-7 text-center">
                <h3 class="mb-3">Experienced & Professional Team</h3>
                <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer
                    services will be great experience for you without doubt and in no-time</h6>
            </div>
        </div>
        <div class="row px-5">
            @foreach ($trainers as $trainer)
                <div class="col-lg-6">
                    <div class="card card-shadow border-0 mb-4">
                        <!-- Row -->
                        <div class="row no-gutters">
                            <div class="col-md-5 pro-pic"
                                style="background:url({{ $trainer->getProfileUrl() }}) no-repeat center center / cover">
                                <div class="card-img-overlay">
                                    <ul class="list-inline position-relative text-center">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 bg-white">
                                <div class="p-4">
                                    <h6 class="mb-3 font-weight-medium">{{ $trainer->name }}</h6>
                                    <p>{{ $trainer->trainerDetails->occupation }}</p>
                                    <a href="#" class="bttn bttn-primary">Choose this Trainer</a>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection