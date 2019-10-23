class opaslide {
    constructor(tabelemet) {
        this.tab = tabelemet;
        this.index = 0;
        this.tab.item(this.index).style.opacity = "1";
    }
    next = () => {
        this.tab.item(this.index).style.opacity = "0";
        this.index++;
        if (this.index > this.tab.length - 1) {
            this.index = 0;
        }
        this.tab.item(this.index).style.opacity = "1";
    };
    previous = () => {
        this.tab.item(this.index).style.opacity = "0";
        this.index--;
        if (this.index < 0) {
            this.index = this.tab.length - 1;
        }
        this.tab.item(this.index).style.opacity = "1";
    };

}

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