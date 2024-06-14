$(document).ready(function () {
    window.addEventListener('beforeunload', function (event) {
        event.preventDefault();
        return 'Êtes-vous sûr de vouloir quitter cette page ?';
    });

    const notyf = new Notyf({
        position: {
            x: 'center',
            y: 'top',
        },
        types: [
            {
                type: 'alert',
                background: '#6BBFBD',
                icon: false,
                duration: 3000
            }
        ]
    });

    document.querySelector(".main__code i").addEventListener("click", () => {
        navigator.clipboard.writeText(document.querySelector(".main__code h1").innerText);
        notyf.open({
            type: 'success',
            message: '<p style="text-align:center">Code copié dans le presse-papier.</p>'
        });
    })
});