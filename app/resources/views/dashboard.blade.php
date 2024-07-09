<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="carrolsel-width">
        

            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="2img.png" alt="Imagem 1">
                    </div>
                    <div class="carousel-item">
                        <img src="2img.png" alt="Imagem 2">
                    </div>
                    <div class="carousel-item">
                        <img src="2img.png" alt="Imagem 3">
                    </div>
                </div>
                <button class="prev" onclick="moveCarousel(-1)">&#10094;</button>
                <button class="next" onclick="moveCarousel(1)">&#10095;</button>
            </div>
    </body>
</x-app-layout>

    <style>
        .carrolsel-width {
    font-family: Arial, sans-serif;
    min-width: 100vw;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
}

.carousel {
    position: relative;
    width: 70%;
    max-width: 600px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-item {
    min-width: 100%;
    box-sizing: border-box;
}

.carousel-item img {
    width: 100%;
    display: block;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 5px;
    cursor: pointer;
    z-index: 1;
    border-radius: 50%;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

    </style>
    <script>
        let currentIndex = 0;

function moveCarousel(direction) {
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    const offset = -currentIndex * 100;
    document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
}

    </script>
