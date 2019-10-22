(() => {
    let index = 0;
    let tabarticle = document.getElementsByClassName("proj");
    tabarticle.item(index).style.opacity = "1";

    let next = () => {
        tabarticle.item(index).style.opacity = "0";
        index++;
        if (index > tabarticle.length - 1) {
            index = 0;
        }
        tabarticle.item(index).style.opacity = "1";
    };

    let previous = () => {
        tabarticle.item(index).style.opacity = "0";
        index--;
        if (index < 0) {
            index = tabarticle.length - 1;
        }
        tabarticle.item(index).style.opacity = "1";
    };

    document.getElementById("next").addEventListener("click", next);
    document.getElementById("previous").addEventListener("click", previous);
})();