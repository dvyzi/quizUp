<x-base css="homepage.css">
    <div class="playgame">
        <img class="playgame__img" src="{{asset("assets/img/banner/quiz.png")}}" alt="">
        <form action="" class="playgame__form">
            <h2 class="playgame__form__h2">Rejoindre une partie</h2>
            <input req type="text" placeholder="Entrez votre code ici" class="playgame__form__input" maxlength="6">
            <button type="submit" class="playgame__form__submit">Jouer</button>
        </form>
    </div>

    <script src="{{asset("assets/js/script.js")}}"></script>
    <div class="demonstration">
        <iframe width="660" height="415" src="https://www.youtube.com/embed/XCo2syvieoU?si=G-uWm_Yh-wtIbRLx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <p class="demonstration__p">En savoir plus sur nous !</p>
    </div>
</x-base>