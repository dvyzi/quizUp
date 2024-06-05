<x-base css="quiz/news.css">
    <div class="manageGame">
        @for ($i = 0; $i < 4; $i++)
            <div class="manageGame__container">
                <h2 class="manageGame__container__h2">Mathématiques</h2>
                <div class="spring-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <a href="" class="swiper-slide">
                                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
                            </a>
                            <a href="" class="swiper-slide">
                                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
                            </a>
                            <a href="" class="swiper-slide">
                                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
                            </a>
                            <a href="" class="swiper-slide">
                                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
                            </a>
                            <a href="" class="swiper-slide">
                                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <script type="module" crossorigin src="{{ asset('assets/js/swiper/carroussel.js') }}"></script>
</x-base>
