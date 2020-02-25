let hover=document.querySelector('.hover')
hover.addEventListener('mouseover',function(){
    let text=document.querySelector('.anime')
    text.classList.add('transition')
    text.classList.remove('top')

  
})
hover.addEventListener('mouseleave',function(){
  
        let text=document.querySelector('.anime')
        text.classList.add('transition')
        text.classList.add('top')
       
})