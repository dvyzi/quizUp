function point() {
    const getH2 = document.querySelector(".main__waiting span")

    setTimeout(() => {
        getH2.innerText = "."
    }, 500)

    setTimeout(() => {
        getH2.innerText = ".."
    }, 1500)

    setTimeout(() => {
        getH2.innerText = "..."
    }, 2000)
}

setInterval(() => {
    point()
}, 2500)