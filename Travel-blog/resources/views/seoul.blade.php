<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Seoul') }}
        </h2>
    </x-slot>
    <header class="jumbotron jumbotron-fluid" style="background:url(https://wallpaperaccess.com/full/5015534.jpg) center">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Seoul: The Dazzling Capital City</h1>
            <p class="lead">Explore the beauty of Seoul with our travel and beauty tips.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="h2">Welcome to Seoul</h2>
                <p>Seoul, the capital of South Korea, is a vibrant and dazzling city known for its rich culture, delicious cuisine, and cutting-edge beauty trends. Whether you're a beauty enthusiast, a food lover, or a history buff, Seoul has something to offer for everyone.</p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://www.northstarmeetingsgroup.com/uploadedImages/Articles/How_To/Site_Selection/IFNL_Seoul_skyline_night_MC0919.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2 class="h2">Seoul Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipPGl6MqUOpA-oR3QcdGBgaWh67smtnDY1s05ps4=s1360-w1360-h1020" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title h5">Gyeongbokgung Palace</h5>
                        <p class="card-text">Explore the grandeur of this historic palace, which is a symbol of Korean heritage.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://www.cktravels.com/wp-content/uploads/2022/12/mueongdong-5.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title h5">Myeongdong Shopping Street</h5>
                        <p class="card-text">Shop for the latest beauty products and trendy fashion in the heart of Seoul.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://i1.wp.com/lenjourneys.com/wp-content/uploads/2018/11/seoul-38.jpg?ssl=1" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title h5">Namsan Seoul Tower</h5>
                        <p class="card-text">Get panoramic views of the city from this iconic tower and enjoy a romantic atmosphere.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-6">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if ($comments->isEmpty())
                    <div class="alert alert-info" role="alert">
                        No comments found.
                    </div>
                    @else
                    @foreach($comments as $comment)
                    <div class="card mb-3">
                        <div class="card-body">

                            <h5 class="card-title h5">{{ $comment->name }}</h5>
                            <p class="card-text">{{ $comment->blog }} -- {{ $comment->comment }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <small class="text-muted">Created: {{ $comment->created_at }}</small>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>


</x-app-layout>