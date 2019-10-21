(() => {
    let index = 0;
    let tabarticle = document.getElementsByClassName("proj");
    tabarticle.item(index).style.display = "block";

    let next = () => {
        tabarticle.item(index).style.display = "none";
        index++;
        if (index > tabarticle.length - 1) {
            index = 0;
        }
        tabarticle.item(index).style.display = "block";
    };

    let previous = () => {
        tabarticle.item(index).style.display = "none";
        index--;
        if (index < 0) {
            index = tabarticle.length - 1;
        }
        tabarticle.item(index).style.display = "block";
    };

    document.getElementById("next").addEventListener("click", next);
    document.getElementById("previous").addEventListener("click", previous);
})();