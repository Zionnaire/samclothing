<x-layout>

         <!-- About Start -->
       <div class="container-fluid bg-light my-5 py-5 px-lg-0 flex justify-center items-center shadow-lg">
        <div class="container about px-lg-0">
            <div class="flex justify-center items-center gap-5 mx-lg-0 py-5">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="images/sam-logo.jpeg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="w-[60%] flex-col items-center justify-center about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0 flex-col justify-center items-center">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">About Us</h1>
                        </div>
                        <p class="mb-4 pb-2">
                            @include('partials.about-text')
                            </p>
                        <div class="row g-4 mb-4 pb-2">
                            @include('partials.metrics')
                        </div>
                        <a href="https://wa.me/2347086520977?text=Hi, I am Sam and thanks for contacting. Please tell me how I may be of help today"><button  class="bg-btnBg text-white py-3 rounded-lg px-5">Explore More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


</x-layout>