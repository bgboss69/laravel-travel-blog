<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <img src="https://english.visitkorea.or.kr/static/front/images/main/new/vk_bnr_vky_eng.png" class="card-img-top" alt="Blog">
    </div>

    <div class="container my-5">
        <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://skyticket.com/guide/wp-content/uploads/2017/09/iStock-538776082-e1509614959128.jpg" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title h5">Seoul: The Dazzling Capital City</h5>
                        <p class="card-text" style="overflow-y:scroll; height: 200px;">
                            Seoul, South Korea's dynamic capital, harmonizes contemporary living with rich history. From palaces to vibrant nightlife, it's a must-visit destination for culture and excitement.</p>
                    </div>
                    <a href="{{ route('seoul') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://media.cnn.com/api/v1/images/stellar/prod/231025155250-01-busan-south-korea-skyline.jpg" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title h5">Busan: Something For Everyone</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Busan, South Korea's bustling coastal city, is a destination that truly has something for everyone. Whether you're a beach lover, a history enthusiast, a foodie, or an adventurer, Busan offers a diverse range of experiences to satisfy every traveler. Explore the dynamic cityscape, beautiful beaches, historic sites, and vibrant markets.
                        </p>
                    </div>
                    <a href="{{ route('busan') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://lp-cms-production.imgix.net/2021-12/GettyImages-932392848.jpg" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title h5">"Gyeongju: Timeless Korea"</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Gyeongju, often referred to as the "Museum Without Walls," is a city that takes you on a captivating journey through Korea's rich history and cultural heritage. With its ancient temples, royal tombs, and historic sites, Gyeongju is a paradise for history enthusiasts and anyone seeking a glimpse into Korea's past.
                        </p>
                    </div>
                    <a href="{{ route('gyeongju') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://static1.squarespace.com/static/5c95bcb19b7d1578b2ca2f14/t/5f727057ec407a43c6754ac4/1601335392635/IMG_0477.jpg?format=1500w" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title h5">Dadohaehaesang National Park</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Dadohaehaesang National Park, often called the "Sea of Many Islands," is a marine wonderland located in South Korea. With its pristine coastal landscapes, diverse marine life, and lush islands, it's a perfect destination for nature lovers and adventure seekers.
                            </p>
                    </div>
                    <a href="{{ route('dadohaehaesang') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://olympic.ca/wp-content/uploads/2023/01/PyeongChang-scenic-e1672956293953.jpg?quality=100" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title h5">Pyeongchang County</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Pyeongchang County, a picturesque destination nestled in the heart of South Korea, offers a perfect blend of natural beauty and sporting excitement. As the host city of the 2018 Winter Olympics, Pyeongchang welcomes travelers with its pristine landscapes, outdoor adventures, and a taste of winter sports.
                        </p>
                    </div>
                    <a href="{{ route('pyeongchang') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>

        </div>
    </div>





</x-app-layout>
