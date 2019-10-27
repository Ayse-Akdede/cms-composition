class opaslide {
    constructor(tabelemet) {
        this.tab = tabelemet;
        this.index = 0;
        this.tab.item(this.index).style.opacity = "1";
    };
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