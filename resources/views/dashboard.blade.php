<x-base css="dashboard.css">
    <h2 class="main__h2">Bienvenue {{ Auth::user()->nickname }}</h2>
    <div class="manageHistoryGame__container">
        <h2 class="manageHistoryGame__container__h2">Récemment joué</h2>
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
    <div class="update">
        <h2><a class="updateProfile" href="profile">Modifier mon profile</a></h2>
        <h2><a class="deleteProfile" href="#">Suprimer mon profile</a></h2>
    </div>

    <script type="module" crossorigin src="{{ asset('assets/js/swiper/carroussel.js') }}"></script>
</x-base>
