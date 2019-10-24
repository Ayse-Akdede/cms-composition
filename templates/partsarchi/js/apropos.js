(() => {
    let tabimg = document.getElementById("slider-imgs").getElementsByTagName("img");
    let slideimg = new opaslide(tabimg);
    console.log(tabimg);

    document.getElementById("next").addEventListener("click", slideimg.next);
    document.getElementById("previous").addEventListener("click", slideimg.previous);
})();