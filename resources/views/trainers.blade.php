@extends('layouts.mainLayout')

@section('title', "Trainers")

@push('styles')
<style>
    .content {
        background: #DCDCDC;
        color: #000;
    }

    .card-box {
        border-radius: 0.7rem;
    }

    .btn-rounded {
        border-radius: 2em;
    }

    h4 {
        line-height: 22px;
        font-size: 18px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')
<div class="content">
    <div class="container p-4">
        {{-- Heading --}}
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h3 class="fw-bold mb-4">Trainers</h3>
              <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                We're dedicated to providing you with top-tier trainers who are experts in their fields. Whether you're a beginner or an experienced fitness enthusiast, our trainers are here to guide and support you.
              </p>
            </div>
          </div>
        {{-- Trainers Card --}}
        <div class="row">
            @foreach ($trainers as $trainer)
                
            
            {{-- Single Trainer --}}
            <div class="col-lg-4 mb-4">
                <div class="text-center card-box py-3 shadow-sm bg-body-tertiary rounded">
                    <div class="member-card pt-2 pb-2">
                        <div class="d-flex justify-content-center">
                            <img src="{{ $trainer->getProfileUrl() }}" class="rounded-circle shadow-1-strong"
                                width="100" height="100" />
                        </div>
                        <div class="my-3">
                            <i class="bi bi-star text-warning fs-5"></i>
                            <i class="bi bi-star text-warning fs-5"></i>
                            <i class="bi bi-star text-warning fs-5"></i>
                            <i class="bi bi-star text-warning fs-5"></i>
                            <i class="bi bi-star text-warning fs-5"></i>
                        </div>
                        <div>
                            <h4 class="mb-2">{{$trainer->name}}</h4>
                            <span class="badge text-bg-primary p-2" style="font-size: 0.8rem">Trainer</span>
                            {{-- <p class="" style="font-size: 0.8rem">trainer@gmail.com</p> --}}
                        </div>
                        <div>
                            <button type="button" class="btn btn-dark mt-3 btn-rounded waves-effect w-md waves-light me-3" data-bs-toggle="modal" data-bs-target="#reviewModal">Rate Trainer</button>
                            <a href="#" class="btn btn-dark mt-3 btn-rounded waves-effect w-md waves-light">Chat Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Trainer Review Modal --}}
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Rate our Trainers</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route("trainers.review") }}" method="POST" >
                    @csrf
                <div class="mb-3">
                    <input type="hidden" id='trainer-rating' name="trainer-rating">
                    <i class="star bi bi-star text-warning fs-4"></i>
                    <i class="star bi bi-star text-warning fs-4"></i>
                    <i class="star bi bi-star text-warning fs-4"></i>
                    <i class="star bi bi-star text-warning fs-4"></i>
                    <i class="star bi bi-star text-warning fs-4"></i>
                </div>
            
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Your Review..." required></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" id="submitRatingBtn" type="submit">Submit Rating</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.querySelector('#exampleFormControlTextarea1');
    const submitBtn = document.querySelector('#submitRatingBtn');
    let rating = document.querySelector('#trainer-rating');
    let ratingValue = 0;

    // Function to highlight stars up to the hovered/clicked star
    function highlightStars(index) {
        stars.forEach((star, idx) => {
            if (idx <= index) {
                star.classList.add('text-warning');
            } else {
                star.classList.remove('text-warning');
            }
        });
    }

    // Event listener for mouseover to highlight stars
    stars.forEach((star, index) => {
        star.addEventListener('mouseover', () => {
            highlightStars(index);
        });
    });

    // Event listener for mouseout to reset stars
    document.querySelector('.modal-body').addEventListener('mouseout', () => {
        highlightStars(ratingValue - 1);
    });

    // Event listener for click to set the rating value
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            ratingValue = index + 1;
            ratingInput.value = ''; // Clear any previous text in the textarea
            highlightStars(index);
        });
    });

    // Event listener for form submission
    submitBtn.addEventListener('click', () => {
        const review = ratingInput.value.trim();
        if (review === '') {
            alert('Please provide a review.');
            return;
        }

        rating.value=ratingValue;

        // Here you can use the ratingValue and review for further processing
        console.log('Rating:', ratingValue);
        console.log('Review:', review);

        // Clear the rating and review after submission if needed
        // ratingValue = 0;
        // ratingInput.value = '';
        // stars.forEach(star => star.classList.remove('text-warning'));
    });
});
</script>
@endpush