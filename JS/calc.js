console.log(document);
const regularWear = document.querySelector('.regularWear');
const regularQuantity = document.querySelector('.regularQuantity')
const regBtn = document.querySelector('.regBtn').addEventListener('click', RegClick);
const traditionalWear = document.querySelector('.traditionalWear');
const traditionalQauntity = document.querySelector('.traditionalQuantity');
const undergarment =document.querySelector('.undergarment');
const undergarmentQuantity = document.querySelector('.undergarmentQuantity');
const totalWear = document.querySelector('.totalWear');
totalWear.value=100;
function RegClick(){
    console.log('clicked')
}
regularQuantity.addEventListener('keydown', totalQuantity);

function totalQuantity(e){
    console.log(e.target.value)


}
/* function RegFill(){
    console.log('filled')
}
*/