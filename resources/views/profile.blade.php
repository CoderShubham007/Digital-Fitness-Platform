@extends("layouts.mainLayout")

@section("title", "Profile")

@push("styles")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
@auth
    @if(session('success'))
    <div id="success-message" class="alert alert-success mb-0">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('success-message').style.display = 'none';
            },0);
        }, 3000);
    </script>
    @endif

    <div class="container-fluid" id="profile-body">
        <div class="container-fluid" id="upper-container">
            <div class="profile">
                <div class="inner-profile">
                    <div class="img-container">
                        <div class="image">
                            <img src="{{ $user->getProfileUrl() }}" alt="Profile image" />
                            <span></span>
                        </div>
                    </div>
                    <div class="name-container">
                        <h3 class="text-capitalize">{{ $user->name }}</h3>
                        <span>{{ $user->role }}</span>
                    </div>
                </div>
                <div class="follow-details">
                    <div>
                        <h6>Followers</h6>
                        <span>{{$user->followers}}</span>
                    </div>
                    <div>
                        <h6>Following</h6>
                        <span>{{$user->following}}</span>
                    </div>
                    <div>
                        @if ($user->role=='member')
                            <h6>Posts</h6>
                            <span>0</span>
                        @else
                            <h6>Rating</h6>
                            <span>{{$user->rating}}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-4" id="lower-container">
            <div class="profile-nav">
                @if(Auth::user()->id !== $user->id)
                <div class="buttons-for-user">
                    <button type="button" class="btn btn-primary" id="chat-button">Chat</button>
                    <button type="button" class="btn btn-primary">Follow</button>
                </div>
                @else
                <div class="buttons-for-self">
                    <a href="{{route('user.profile_edit', $user->id)}}">
                     <button type="button" id="edit" class="bttn bttn-primary">Edit</button>
                    </a>
                </div>
                @endif
                <div class="profile-nav-items">
                    <a href="#" class="nav-item-links is-active" id="about" active-color="black">About</a>
                    {{-- @If( Auth::user()->role != 'member') --}}
                    <a href="#" class="nav-item-links" id="posts" active-color="black">Posts</a>
                    {{-- @endif --}}
                    <span class="nav-indicator"></span>
                </div>
            </div>
            <div class="content">
                <div class="about" id="about-section">
                    <div class="about-content">
                        <ul>
                            <li>
                            <b>Bio</b>
                            @if ($user->bio!=null)
                                <p>{{$user->bio}}</p>
                            @else
                                <p>Add a bio for your profile.</p>
                            @endif
                            </li>
                            <li><i class="bi bi-person-circle"></i> @if ($user->gender=='M')
                                Male
                            @elseif ($user->gender=='F')
                                Female
                            @else
                                Other
                            @endif</li>

                            @if ($user->city!=null)
                                <li><i class="bi bi-geo-alt-fill"></i> Lives in <b>{{$user->city}}</b></li>
                            @endif
                            <li><i class="bi bi-clock-fill"></i> Joined on <b>{{ $user->created_at->format('d-m-Y') }}</b></li>
                            @if ($user->phone!=null)
                                <li><i class="bi bi-telephone-fill"></i> {{ $user->phone }}</li>
                            @endif
                            <li><i class="bi bi-chat-left-fill"></i> {{ $user->email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="post" id="post-section">
                    <section class="grid">
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1548032885-b5e38734688a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1501426026826-31c667bdf23d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1519821172144-4f87d85de2a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1509233725247-49e657c54213?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1505142468610-359e7d316be0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"></a>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endauth
@guest
    <div class="container-fluid" id="profile-body">
        <div class="container-fluid" id="upper-container">
            <div class="profile">
                <div class="inner-profile">
                    <div class="img-container">
                        <div class="image">
                            <img src="{{ $user->getProfileUrl() }}" alt="Profile image" />
                            <span></span>
                            {{-- @if ($user->profile_pic!=null)
                                <img src="{{ $user->profile_pic }}" alt="Profile image" />
                                <span></span>
                            @else
                                <img src="{{ $user->getProfileUrl($user->id) }}" alt="Profile image" />
                                <span></span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="name-container">
                        <h3 class="text-capitalize">{{ $user->name }}</h3>
                        <span>{{ $user->role }}</span>
                    </div>
                </div>
                <div class="follow-details">
                    <div>
                        <h6>Followers</h6>
                        <span>{{$user->followers}}</span>
                    </div>
                    <div>
                        <h6>Following</h6>
                        <span>{{$user->following}}</span>
                    </div>
                    <div>
                        @if ($user->role=='member')
                            <h6>Posts</h6>
                            <span>0</span>
                        @else
                            @If($user->rating!=null)
                            <h6>Rating</h6>
                            <span>{{$user->rating}}</span>
                            @else
                            <h6>Rating</h6>
                            <span>0</span>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-4" id="lower-container">
            <div class="profile-nav">
                <div class="buttons-for-user">
                    @if ($user->role == 'trainer')
                    <button type="button" class="bttn bttn-primary" id="chat-button">Chat</button>
                    @endif
                    <button type="button" class="bttn bttn-primary">Follow</button>
                </div>
                {{-- <div class="buttons-for-self">
                    <button type="button" id="edit" class="btn btn-primary">Edit</button>
                </div> --}}
                <div class="profile-nav-items">
                    <a href="#" class="nav-item-links is-active" id="about" active-color="black">About</a>
                    {{-- @If( Auth::user()->role != 'member') --}}
                    <a href="#" class="nav-item-links" id="posts" active-color="black">Posts</a>
                    {{-- @endif --}}
                    <span class="nav-indicator"></span>
                </div>
            </div>
            <div class="content">
                <div class="about" id="about-section">
                    <div class="about-content">
                        <ul>
                            <li>
                            <b>Bio</b>
                            @if ($user->bio!=null)
                                <p></p>
                            @else
                                <p>Add a bio for your profile.</p>
                            @endif
                            </li>
                            <li><i class="bi bi-person-circle"></i> @if ($user->gender=='M')
                                Male
                            @elseif ($user->gender=='F')
                                Female
                            @else
                                Other
                            @endif</li>

                            @if ($user->city!=null)
                                <li><i class="bi bi-geo-alt-fill"></i> Lives in <b>{{$user->city}}</b></li>
                            @endif
                            <li><i class="bi bi-clock-fill"></i> Joined on <b>{{ $user->created_at }}</b></li>
                            @if ($user->phone!=null)
                                <li><i class="bi bi-telephone-fill"></i> {{ $user->phone }}</li>
                            @endif
                            <li><i class="bi bi-chat-left-fill"></i> {{ $user->email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="post" id="post-section">
                    <section class="grid">
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1548032885-b5e38734688a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1501426026826-31c667bdf23d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1519821172144-4f87d85de2a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1509233725247-49e657c54213?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                        <a href="" class="grid-photo"
                            style="background-image: url('https://images.unsplash.com/photo-1505142468610-359e7d316be0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"></a>
                    </section>
                </div>
                {{-- <div class="edit" id="edit-section">
                    <div class="card border-0 bg-transparent mb-0">
                        <div class="card-body p-lg-5">
                            <div class="mb-5">
                                <h4 class="mb-1">Account Information</h4>
                                <p class="mb-0 fs-6">Edit your personal information and address.</p>
                            </div>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-lg-7 col-md-7">
                                    <label for="profileImageInput" class="form-label">Update Profile Image</label>
                                    <input type="file" class="form-control" id="profileImageInput" value="" />
                                    <div class="invalid-feedback">Please provide an image.</div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <label for="profileBioInput" class="form-label">Update Bio</label>
                                    <textarea type="textarea" class="form-control" id="profileBioInput" value=""
                                        required>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, debitis.</textarea>
                                    <div class="invalid-feedback">Please enter bio.</div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <label for="profileNameInput" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="profileNameInput" value="" required />
                                    <div class="invalid-feedback">Please enter firstname.</div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="profileGenderInput" class="form-label">Gender</label>
                                    <select class="form-select" id="profileGenderInput" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="Male" selected="">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid gender.</div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="profilePhoneInput" class="form-label">Phone</label>
                                    <input type="text" class="form-control input-phone" id="profilePhoneInput"
                                        placeholder="+91 XXXXX XXXXX" required />
                                    <div class="invalid-feedback">Please enter phone.</div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="profileBirthdayInput" class="form-label">Birthday</label>
                                    <input type="date" class="form-control input-date" id="profileBirthdayInput"
                                        placeholder="dd/mm/yyyy" required />
                                    <div class="invalid-feedback">Please enter birthday.</div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="profileAddress1Input" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="profileAddress1Input" required />
                                    <div class="invalid-feedback">Please enter address.</div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="profileStateInput" class="form-label">State</label>
                                    <input type="text" class="form-control" id="profileStateInput" required />
                                    <div class="invalid-feedback">Please provide a State.</div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="profileCityInput" class="form-label">City</label>
                                    <input type="text" class="form-control" id="profileCityInput" required />
                                    <div class="invalid-feedback">Please provide a City.</div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="profileZipInput" class="form-label">Zip/Code</label>
                                    <input type="text" class="form-control" id="profileZipInput" required />
                                    <div class="invalid-feedback">Please provide a Zip.</div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-primary me-2" type="submit">Update Profile</button>
                                    <button class="btn btn-light" type="reset">Reset</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card border-0 bg-transparent mb-4">
                        <div class="card-body p-lg-5">
                            <div class="mb-5">
                                <h4 class="mb-0">Change Password</h4>
                            </div>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-lg-4 position-relative px-40">
                                    <label for="profileOldPassInput" class="form-label">Old Password</label>
                                    <input type="password" class="form-control password" id="profileOldPassInput"
                                        maxlength="16" required />
                                    <i class="bi bi-eye-slash text-dark togglePassword" id="oldPassToggle"></i>
                                    <div class="invalid-feedback">Enter your old password.</div>
                                </div>
                                <div class="col-lg-4 position-relative px-40">
                                    <label for="profileNewPassInput" class="form-label">New Password</label>
                                    <input type="password" class="form-control password" id="profileNewPassInput"
                                        maxlength="16" required />
                                    <i class="bi bi-eye-slash text-dark togglePassword" id="newPassToggle"></i>
                                    <div class="invalid-feedback">Enter your new password.</div>
                                </div>
                                <div class="col-lg-4 position-relative px-40">
                                    <label for="profileRePassInput" class="form-label">Re-Enter New Password</label>
                                    <input type="password" class="form-control password" id="profileRePassInput"
                                        maxlength="16" required />
                                    <i class="bi bi-eye-slash text-dark togglePassword" id="rePassToggle"></i>
                                    <div class="invalid-feedback">Re-Enter password.</div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-primary me-2" type="submit">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endguest
@endsection

@push("scripts")
<script src="{{asset('js/profile.js')}}"></script>
@endpush