<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gyeongju') }}
        </h2>
    </x-slot>
    <!-- Header with Background Image -->
    <header class="jumbotron jumbotron-fluid" style="background:url(https://upload.wikimedia.org/wikipedia/commons/e/ee/Anapji_Pond-Gyeongju-Korea-2006-09.jpg) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Gyeongju: Korea's Historical Treasure Trove</h1>
            <p class="lead">Explore the beauty of Gyeongju with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Gyeongju</h2>
                <p>
                    Gyeongju, often referred to as the "Museum Without Walls," is a city that takes you on a captivating journey through Korea's rich history and cultural heritage. With its ancient temples, royal tombs, and historic sites, Gyeongju is a paradise for history enthusiasts and anyone seeking a glimpse into Korea's past.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://a.cdn-hotels.com/gdcs/production116/d556/c3543285-e473-4196-b8f7-c7ca9d3c9457.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Gyeongju Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://koreantempleguide.com/wp-content/uploads/2023/06/DSC_0183-scaled.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Bulguksa Temple</h5>
                        <p class="card-text">
                            Bulguksa Temple, a UNESCO World Heritage Site, is a masterpiece of Buddhist architecture. Explore its intricate design, serene courtyards, and the Dabotap and Seokgatap pagodas. This temple complex is a testament to Korea's spiritual and artistic traditions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/fb/30/8e/caption.jpg?w=1200&h=-1&s=1" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Seokguram Grotto</h5>
                        <p class="card-text">
                            The Seokguram Grotto, also a UNESCO World Heritage Site, houses a stunning stone-carved Buddha statue. The combination of natural beauty and spiritual significance makes this site truly awe-inspiring.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://i0.wp.com/thesoulofseoul.net/wp-content/uploads/2018/06/IMG_7693.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Royal Tombs</h5>
                        <p class="card-text">
                            Gyeongju is home to numerous royal tombs, including the Daereungwon Royal Tomb Complex, which contains the Cheonmachong Tomb, where you can see exquisite artifacts from the Silla Dynasty.
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