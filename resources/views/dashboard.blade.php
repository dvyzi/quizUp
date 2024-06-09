<x-base css="dashboard.css">
    <h1 class="main__h1">Bienvenue sur votre compte, {{ Auth::user()->nickname }}</h1>
    <div class="main__manageProfil">
        <section class="main__manageProfil__left">
            <h2>Gestion de vos données personnelles</h2>
            <p>Cliquer sur le bouton pour accéder à vos informations personnelles.</p>
        </section>
        <div class="main__manageProfil__right">
            <a href="/profile">Gérer mon profil</a>
        </div>
    </div>
    <section class="main__manageHistoryGame">
        <h2 class="main__manageHistoryGame__h2">Vos favoris</h2>
        <div class="main__manageHistoryGame__manager">
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
        </div>
    </section>
    <section class="main__manageHistoryGame">
        <h2 class="main__manageHistoryGame__h2">Récemment joué</h2>
        <div class="main__manageHistoryGame__manager">
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
            <a href="" class="main__manageHistoryGame__manager__container">
                <img src="{{ asset('assets/img/banner/Quicklaunch-disney-quiz.png') }}" alt="">
            </a>
        </div>
    </section>
</x-base>