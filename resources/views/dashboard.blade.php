<x-base css="dashboard.css">
    <section class="main__welcome">
        <h1 class="main__welcome__h1">Bienvenue sur votre compte, {{ Auth::user()->nickname }}</h1>
        <form method="POST" action="{{ route('logout') }}" class="main__welcome__form">
            @csrf
            <button>Déconnexion</button>
        </form>
    </section>

    <div class="main__manageProfil">
        <section class="main__manageProfil__left">
            <h2>Gestion de vos données personnelles</h2>
            <p>Cliquez sur le bouton pour accéder à vos informations personnelles.</p>
        </section>
        <div class="main__manageProfil__right">
            <a href="/profile">Gérer mon profil</a>
        </div>
    </div>
    <section class="main__manageHistoryGame">
        <h2 class="main__manageHistoryGame__h2">Vos favoris</h2>
        @if ($favorites->isEmpty())
            <p class="main__manageHistoryGame__any">Aucun favoris</p>
        @else
            <div class="main__manageHistoryGame__manager">
                @foreach ($favorites as $favorite)
                    <div class="main__manageHistoryGame__manager__container div{{ $favorite->id }}">
                        <div class="main__manageHistoryGame__manager__container__button">
                            <a href="/quiz/game/{{ $favorite->id }}" class="play">Jouer</a>
                            <form onsubmit="return false" class="form{{ $favorite->id }}">
                                @csrf
                                <button id="{{ $favorite->id }}_remove"
                                    class="favorite"><i
                                        class="fa-solid fa-heart"></i></button>
                            </form>
                        </div>
                        <img src="{{ $favorite->image }}" alt="">
                    </div>
                @endforeach
            </div>
        @endif
    </section>
    <script src="{{asset("assets/js/dashboard.js")}}"></script>
    <section class="main__manageHistoryGame">
        <h2 class="main__manageHistoryGame__h2">Récemment joué</h2>
        <p class="main__manageHistoryGame__any">Aucun historique</p>
        {{-- <div class="main__manageHistoryGame__manager">
            <div class="main__manageHistoryGame__manager__container">
                <div class="main__manageHistoryGame__manager__container__button">
                    <a href="/quiz/game/" class="play">Jouer</a>
                    <form onsubmit="return false" class="form">
                        @csrf
                        <button id="" class="favorite"><i class="fa-solid fa-heart"></i></button>
                    </form>
                </div>
                <img src="https://images.pexels.com/photos/4498610/pexels-photo-4498610.jpeg" alt="">
            </div>
        </div> --}}
    </section>
</x-base>
