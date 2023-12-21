{{-- Section One --}}
<section class="flex flex-col">
    <div class="w-full flex flex-col items-center justify-center p-4 bg-white gap-5 rounded-sm shadow-lg md:gap-2 md:p-8 md:justify-center">
        <h3 class="text-xl font-bold text-black">New Arrivals</h3>
        <hr class="w-full bg-black my-2">
        <p class="text-md text-black">Check out our exclusive selection of this season’s new arrivals, made with the world’s highest quality fabric</p>
    </div>

    <div class="container mx-auto my-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
            @foreach($designs as $design)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ $design->image ? asset('storage/'.$design->image) : asset('/images/tailor.png') }}" alt="{{ $design->title }}" class="w-full h-48 object-cover mb-4">

                    <p class="text-lg font-semibold mb-2">{{ $design->title }}</p>
                    <p class="text-lg font-semibold mb-2">{{ $design->style }}</p>
                    <p class="text-sm text-gray-500">Price: #{{ $design->price }}</p>
                </div>
            @endforeach
        </div>
        <button class="w-full bg-btnBg text-white text-md font-bold py-2 px-4 rounded-lg mt-4">Browse All</button>

    </div>
</section>

<!-- Include slick carousel styles and scripts -->
@push('styles')
    <!-- Slick Carousel CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
@endpush

@push('scripts')
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/t1f1f9phINdQ9G3b5Pw2/fi9nJK9Xk8n1gxg=" crossorigin="anonymous"></script>

    <!-- Slick Carousel JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slick-carousel').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    </script>
@endpush
