<x-base css="quiz/host.css">
    <div class="main__code">
        <h1>{{ $code }}</h1>
        <i class="fa-solid fa-copy"></i>
    </div>

    <div class="main__game">
        <div class="main__game__action">
            <button class="launch">Lancer</button>
            <button class="cancel">Annuler</button>
        </div>
        <div class="main__game__managers">
            <div class="main__game__managers__user">
                <p>{{ $nickname }}</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/quiz/host.js') }}"></script>

    @if ($host)
        <input type="hidden" name="_token" value="{{ csrf_token() }}" class="getAllUsers">
        <script src="{{ asset('assets/js/quiz/getAllUsers.js') }}"></script>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" class="deleteGame">
        <script src="{{ asset('assets/js/quiz/deleteQuiz.js') }}"></script>
    @endif
</x-base>
