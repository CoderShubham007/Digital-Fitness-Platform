@extends('layouts.formLayout')

@section('title', 'Fitness Hub - Login')

@section('content')
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand fs-5 font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}">
                            Fitness HUB
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="{{ route('home') }}">
                                        <i class="fa-solid fa-house opacity-6 text-dark me-1"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('shop') }}">
                                        <i class="fa-solid fa-cart-shopping opacity-6 text-dark me-1"></i>
                                        Shop
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('community') }}">
                                        <i class="fa-solid fa-icons opacity-6 text-dark me-1"></i>
                                        Community
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('about') }}">
                                        <i class="fa-solid fa-circle-info opacity-6 text-dark me-1"></i>
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('contact') }}">
                                        <i class="fa-solid fa-file-signature opacity-6 text-dark me-1"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="{{ route('signup') }}" class="btn btn-sm mb-0 me-1 btn-primary">Signup</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Main Section -->
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Welcome Back!</h4>
                                    <p class="mb-0">Enter your email and password to Login in</p>
                                </div>
                                <div class="card-body">
                                    <form id="loginForm">
                                        <div class="mb-3">
                                            <input type="email" id="login-email" class="form-control form-control-lg" placeholder="Email" required>
                                            <span class="text-danger" id="login-email-error"></span>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" id="login-password" class="form-control form-control-lg" placeholder="Password" required>
                                            <span class="text-danger" id="login-password-error"></span>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Log in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="{{ route('signup') }}" class="text-primary text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('./images/login.jpg');background-size: cover;">
                                <span class="mask bg-gradient-secondary opacity-4"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Unleash Your Inner
                                    Warrior"</h4>
                                <p class="text-white position-relative">Step into the arena of self-improvement, where every
                                    workout is a battle and each rep is a victory that brings you closer to the warrior
                                    within.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection