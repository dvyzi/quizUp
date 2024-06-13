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
    navigator.clipboard.writeText("salut");
    notyf.open({
        type: 'success',
        message: '<p style="text-align:center">Code copié dans le presse-papier.</p>'
    });
})