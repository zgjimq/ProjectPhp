/*const fotoja = document.getElementsByClassName('product-image')[0]; // ne poziten 0 kutu e kemi ruajtur foton e kerrit
const butoniCar = document.getElementsByClassName('tag')[0];//butoni i keerit
const buttoniPerKart= document.getElementById('button');

const redButton = document.getElementsByClassName('red')[0];

redButton.addEventListener("click",function(){
    fotoja.style.backgroundImage="url('images/red-benz.webp')"
    butoniCar.style.backgroundColor = "red";
    buttoniPerKart.style.backgroundColor = "red";
}) */

//let i=1;
const myArrayF=[
    "fotoot/laptop.jpg",
    "fotoot/pc-case.jpg",
    "fotoot/pc4.jpg",
    "fotoot/setUp.jpg",
    "fotoot/laptopG.jpg",
    "fotoot/mouse.jpg"

   // "foto2.png",
    //"foto3.png",
    //"foto4.png",
];
var index=0;

function ndrroImg() {
    document.getElementById('slideshow').src = myArrayF[index];
   // if (i < myArrayF.length - 1) {
    //i++;
    //} else {
    //i = 0;
    //}
  /*  .button {
        background-color: #4CAF50; /* Green 
       border: none;
       color: white;
       padding: 15px 32px;
       text-align: center;
       text-decoration: none;
       display: inline-block;
       font-size: 16px;
   } */
    index++;
    if(index== myArrayF.length){
        index=0;
    }
      setTimeout("ndrroImg()", 1200);
    }
    ndrroImg();

