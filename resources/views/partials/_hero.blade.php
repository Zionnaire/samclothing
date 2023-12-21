<!-- Hero -->
<section class="relative w-full h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4" id="heroSection" style="background-repeat: no-repeat; background-size: cover; overflow: hidden;">
    <div class="absolute top-0 left-0 w-full h-full bg-no-repeat bg-center" id="backgroundImage" style="background-repeat: no-repeat; background-size: cover;"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Sam's <span class="text-blue-600">Clothing</span>
        </h1>
        <h1 class="text-5xl font-bold uppercase text-white">
            Making You Beau<span class="text-blue-600">tiful is our Priority</span>
        </h1>
        <p class="text-2xl text-white font-bold my-4">
            Different Styles <span class="text-blue-600">in Our Collections</span>
        </p>
        <div>
            <a href="/register" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                Sign Up to View Our Collections
            </a>
        </div>
    </div>

    <script>
        // Array of background images
        const backgroundImages = [
            'images/fashion2.jpg',
            'images/fashion4.jpg',
            'images/fashion.jpg',
        ];

        let currentIndex = 0;

        // Function to change background every 3 seconds
        function changeBackground() {
            const backgroundImage = document.getElementById('backgroundImage');

            // Increment the index
            currentIndex = (currentIndex + 1) % backgroundImages.length;

            // Change the background position to slide in from the right
            backgroundImage.style.backgroundImage = `url('${backgroundImages[currentIndex]}')`;
            backgroundImage.style.backgroundPosition = '100% 50%';

            // Use CSS transition to create the sliding effect
            setTimeout(() => {
                backgroundImage.style.transition = 'background-position 3s ease-out';
                backgroundImage.style.backgroundPosition = '0% 50%';
            }, 1000);

            // Reset transition and remove background position after the transition completes
            setTimeout(() => {
                backgroundImage.style.transition = '';
                backgroundImage.style.backgroundPosition = '0% 50%';
            }, 3000);
        }

        // Change background every 3 seconds
        setInterval(changeBackground, 3000);

        // Initial background setup
        changeBackground();
    </script>
</section>
