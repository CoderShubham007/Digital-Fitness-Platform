<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub - Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>

    <header>
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}" class="logo">
                        <h2>Fitness Hub</h2>
                    </a></li>
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section class="contact">
            <div class="container">
                <div class="left">
                    <div class="form-wrapper">
                        <div class="contact-heading">
                            <h1>Let's work together<span>.</span></h1>
                            <p class="text">Or reach us via : <a href="#">FitnessGroup777@gmail.com</a></p>
                        </div>

                        <form action="{{ route("contact.store") }}" method="post" class="contact-form">
                            @csrf
                            <div class="input-wrap w-100">
                                <input type="text" class="contact-input" autocomplete="off" name="name" required>
                                <label>Full Name</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>
                            @error('name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            

                            <div class="input-wrap w-100">
                                <input type="number" class="contact-input" autocomplete="off" name="phone"
                                    pattern="[+]?[0-9]{1,4}[0-9]{10}" required>
                                <label>Phone Number</label>
                                <i class="icon fa-solid fa-phone"></i>
                            </div>
                            @error('phone')
                                <div class="error">{{ $message }}</div>
                            @enderror

                            <div class="input-wrap w-100">
                                <input type="email" class="contact-input" autocomplete="off" name="email" required>
                                <label>Email</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror

                            <div class="input-wrap textarea w-100">
                                <textarea name="message" class="contact-input" autocomplete="off" required></textarea>
                                <label>Message</label>
                                <i class="icon fa-solid fa-inbox"></i>
                            </div>
                            @error('message')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            <div class="contact-buttons">
                                <input type="submit" value="Send message" class="btn" style="width: 100%;">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="image-wrapper">
                        <img src="./images/bg1.jpeg" alt="background image" class="img">
                        <div class="wave-wrap">
                            <svg class="wave" viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="wave"
                                    d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1 1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393 805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z"
                                    fill="#D9D9D9" stroke="white" />
                            </svg>
                        </div>
                        <svg class="dashed-wave" viewBox="0 0 345 877" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="dashed-wave"
                                d="M0.5 876C25.6667 836.167 73.2 739.8 62 673C48 589.5 35.5 499.5 125.5 462C215.5 424.5 150 365 87 333.5C24 302 44 237.5 125.5 213.5C207 189.5 307 138.5 246 87C185 35.5 297 1 344.5 1"
                                stroke="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="{{ asset('css/contact.css') }}"></script>
</body>

</html>