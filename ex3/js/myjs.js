
var globalwidth = 80
var globalheiht = 80
var temptext=undefined
var count=0
class box {
    constructor() {
        this.width = 80;
        this.height = 80;
    }
    setwidth(num) {
        this.width = num
    }
    setheight(num) {
        this.height = num
    }
    getwidth() {
        return this.width
    }
    getheight() {
        return this.height
    }
}


function initialize(num1) {
    let boxs = new box()
    const letters = "ABCDEF"
 
    for (i = 0; i < num1; i++) {
        artobj = document.createElement("article")
        artobj.style.backgroundColor = "black"
        artobj.style.margin = "40px"
        artobj.style.display = "flex"
        artobj.style.justifyContent = "center"
        artobj.style.alignItems = "center"
        boxs.setwidth(globalwidth)
        boxs.setheight(globalheiht)
        artobj.style.width = boxs.getwidth() + "px"
        artobj.style.height = boxs.getheight() + "px"
        globalheiht = boxs.getheight() + 20
        globalwidth = boxs.getwidth() + 20
        document.getElementById("page3").appendChild(artobj)

        let text = document.createElement("h1")
        var random=letters.charAt(Math.floor(Math.random()*letters.length))
        text.innerHTML = random
        text.style.fontSize = "40px"
        text.style.color = "White"
        text.style.visibility = "hidden"
        artobj.appendChild(text)
        artobj.onclick = function () {
            if (text.style.visibility == "hidden") {
                text.style.visibility = "visible"
                if(count==0){

                   temptext=text
                    temp=this
                    count++
                    return
                }
                if (count == 1) {
                    if (temp.innerHTML==this.innerHTML ) {
                            temp.style.backgroundColor="red"
                            this.style.backgroundColor="red"
                            count = 0
                            return
                }

               setTimeout( function (){
                    
                    temptext.style.visibility="hidden"
                    text.style.visibility="hidden"
                },300)
                temp=undefined
                count=0
                return
            }
                
            }
        }
    }
}





function button() {
    let obj = document.createElement("article")

    let button = new box()
    obj.style.backgroundColor = "black"
    obj.style.position = "relative"
    obj.style.right = "24px"
    obj.style.width = button.getwidth() + "px"
    obj.style.height = button.getheight() + "px"
    document.getElementById("button").appendChild(obj)
    // let text = document.createElement("")

    obj.onclick = function () {

        initialize(3)
    }
}