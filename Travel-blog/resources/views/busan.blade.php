<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Busan') }}
        </h2>
    </x-slot>
    <header class="jumbotron jumbotron-fluid" style="background:url(https://static.nationalgeographic.co.uk/files/styles/image_3200/public/art-busan-im.jpg?w=1600) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Busan: Something For Everyone</h1>
            <p class="lead">Explore the beauty of Busan with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Busan</h2>
                <p>
                    Busan, South Korea's bustling coastal city, is a destination that truly has something for everyone. Whether you're a beach lover, a history enthusiast, a foodie, or an adventurer, Busan offers a diverse range of experiences to satisfy every traveler. Explore the dynamic cityscape, beautiful beaches, historic sites, and vibrant markets.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://media.timeout.com/images/105996093/1920/1080/image.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Busan Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Haeundae_Beach_NightView.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Haeundae Beach</h5>
                        <p class="card-text">Haeundae Beach is Busan's most famous and popular stretch of shoreline. With its soft golden sands and clear blue waters, it's the perfect spot for sunbathing and water sports. Don't miss the bustling boardwalk with numerous restaurants, cafes, and bars.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1200,h_630/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/y7tweucggousgtl5c4uq/Busan%20Night%20View%20Tour%20with%20Gamcheon%20culture%20village%2C%20The%20Bay%20101%2C%20and%20Mt.Hwangnyeongsan.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Gamcheon Culture Village</h5>
                        <p class="card-text">
                            Known as the "Machu Picchu of Busan," Gamcheon Culture Village is a maze of colorful houses stacked on a hillside. Explore narrow alleyways, street art, and local culture. It's a haven for photographers and art lovers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://dailytravelpill.com/wp-content/uploads/2019/02/haedong-Yonggungsa-Temple-busan-guide-3.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Haedong Yonggungsa Temple</h5>
                        <p class="card-text">
                            Perched on the cliffs overlooking the sea, Haedong Yonggungsa Temple is one of the few temples in Korea with such a stunning ocean view. It's a serene and spiritual place to visit and offers breathtaking sunrise and sunset views.
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