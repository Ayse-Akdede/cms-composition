(() => {

    let tabarticle = document.getElementsByClassName("proj");
    let slidearticle = new opaslide(tabarticle);

    document.getElementById("next").addEventListener("click", slidearticle.next);
    document.getElementById("previous").addEventListener("click", slidearticle.previous);

    let tabimg = document.getElementById("slider-img").getElementsByTagName("img");
    let slideimg = new opaslide(tabimg);

    document.getElementById("next-img").addEventListener("click", slideimg.next);
    document.getElementById("previous-img").addEventListener("click", slideimg.previous);
})();