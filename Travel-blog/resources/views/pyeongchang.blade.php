<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pyeongchang') }}
        </h2>
    </x-slot>
    <!-- Header with Background Image -->
    <header class="jumbotron jumbotron-fluid" style="background:url(https://dwpinsider.com/blog/wp-content/uploads/2018/01/image-2018-01-22-5.jpg) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Pyeongchang County: Nature's Playground</h1>
            <p class="lead">Explore the beauty of Pyeongchang County with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Pyeongchang County</h2>
                <p>
                    Pyeongchang County, a picturesque destination nestled in the heart of South Korea, offers a perfect blend of natural beauty and sporting excitement. As the host city of the 2018 Winter Olympics, Pyeongchang welcomes travelers with its pristine landscapes, outdoor adventures, and a taste of winter sports.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://media.npr.org/assets/img/2017/05/26/olympics41_wide-31fee2564616259840b0d7c9639e50ef60997f76.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Pyeongchang Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://i.dailymail.co.uk/i/pix/2018/01/06/10/47CD682D00000578-5241481-image-a-54_1515236250181.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Winter Wonderland</h5>
                        <p class="card-text">
                            Explore the Olympic facilities and relive the magic of the 2018 Winter Olympics. You can visit venues like the Alpensia Resort and Olympic Sliding Center.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://thisiskoreatours.com/wp-content/uploads/2017/03/Mt.-Seoraksan-National-Park.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Seoraksan National Park</h5>
                        <p class="card-text">
                            Hike through the stunning Seoraksan National Park, where you'll find rugged mountain peaks, crystal-clear streams, and diverse flora and fauna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://media.timeout.com/images/105146049/750/562/image.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Ski Resorts</h5>
                        <p class="card-text">
                            Pyeongchang offers some of South Korea's finest ski resorts. Whether you're a novice or a pro, you can hit the slopes and enjoy a winter wonderland.
                        </p>
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