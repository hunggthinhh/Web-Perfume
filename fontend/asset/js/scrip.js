const sliderItem = document.querySelectorAll('.slider-item')
for (let index = 0; index < sliderItem.length; index++) {
    sliderItem[index].style.left = index * 100 + "%"

}



const sliderItems = document.querySelector('.slider-items');
const arrowRight = document.querySelector('.ri-arrow-right-s-line');
const arrowLeft = document.querySelector('.ri-arrow-left-s-line');
let i = 0 
if(arrowRight != null && arrowLeft != null ){
    arrowRight.addEventListener('click',()=>{
   
        if(i < sliderItem.length-1) {
            i++
            sliderMove(i)
    
        }
        else { 
            return false
        }
    });
    arrowLeft.addEventListener('click',()=>{
    if(i<=0){
        return false
    }
    {
        i--
        sliderMove(i)
    }
       
    })
    function autoSlider(){
        if(i<sliderItem.length-1){
            i++
            sliderMove(i)
            console.log(i)
        }
        else {
            i=0
        } 
    }

}



function sliderMove(i){
    sliderItems.style.left = -i*100+"%"
}
setTimeout(autoSlider,1000)

//Menubar responsive
const Menubar = document.querySelector('.header-bar-icon')
const headerNav = document.querySelector('.header-nav')

Menubar.addEventListener('click', () => {
    headerNav.classList.toggle('active')
})
//click product image detail
const imageSmall = document.querySelectorAll('.product-images-items img');
const imageMain = document.querySelector('.main-image');

for (let index = 0; index < imageSmall.length; index++) {
    imageSmall[index].addEventListener('click', () => {
        // Xóa class 'active' khỏi tất cả ảnh nhỏ
        for (let a = 0; a < imageSmall.length; a++) {
            imageSmall[a].classList.remove('active');
        }

        // Đặt ảnh chính là ảnh được click
        imageMain.src = imageSmall[index].src;

        // Thêm class 'active' cho ảnh được chọn
        imageSmall[index].classList.add('active');
    });
}

//quantity-product
document.addEventListener('DOMContentLoaded', function () {
    const quantityBlocks = document.querySelectorAll('.product-deatail-right-quantity-input');
  
    quantityBlocks.forEach(block => {
      const minusBtn = block.querySelector('.ri-subtract-line');
      const plusBtn = block.querySelector('.ri-add-line');
      const input = block.querySelector('.quantity-input');
  
      if (minusBtn && plusBtn && input) {
        plusBtn.addEventListener('click', () => {
          let qty = parseInt(input.value) || 0;
          input.value = qty + 1;
        });
  
        minusBtn.addEventListener('click', () => {
          let qty = parseInt(input.value) || 0;
          if (qty > 0) input.value = qty - 1;
        });
      }
    });
  });
  

