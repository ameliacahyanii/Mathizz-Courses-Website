function changeBg(){
  var  navbar  = document.getElementById('top-nav');
  var scrollValue = window.scrollY;
  if(scrollValue < 150){
      navbar  .classList.remove('bgColor');
      } else{
        navbar.classList.add('bgColor')

      }
  }

window.addEventListener('scroll', changeBg);