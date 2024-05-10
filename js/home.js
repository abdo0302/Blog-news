let button_Authors=document.querySelector('.button_Authors')
let button_blog=document.querySelectorAll('.button_blog')
let section_authors=document.querySelector('.section_authors')
let section_blog=document.querySelector('.section_blog')
let section_header=document.querySelectorAll('.section_header')
let main=document.querySelector('main')
let home=document.querySelectorAll('.home')
let nav_bar_heder=document.querySelectorAll('.nav_bar_heder ul li a')

// add class acteve
nav_bar_heder.forEach((e,i)=>{
    e.addEventListener('click',function(){
     if(i<7){
        for(let i=0;i<nav_bar_heder.length;i++){
            nav_bar_heder[i].classList.remove('acteve')
        }
        e.classList+=' acteve'
     }
    })
})

// Move between pages
button_Authors.onclick=()=>{
    for(let y=0;y<section_header.length;y++){
        section_header[y].style.display='none'
    }
    section_authors.style.display='flex'

}
home.forEach((e,i) => {
    e.onclick=()=>{
        main.style.display='flex'
        section_authors.style.display='none'
    }
});


button_blog.forEach((e,i)=>{
    e.addEventListener('click',function(){
        for(let y=0;y<section_header.length;y++){
            section_header[y].style.display='none'
        }
        section_blog.style.display='flex'
    })
  
})
//Show bar de sign up
let button_sign_up=document.querySelector('.button_sign_up')
let contenar_sign_up=document.querySelector('.contenar_sign_up')
let sign_up_show=false
button_sign_up.onclick=()=>{
    contenat_SIGN_IN.style.display='none'
  if(sign_up_show==false){
       sign_up_show=true
       contenar_sign_up.style.display='flex'
       
  }else{
       sign_up_show=false
       contenar_sign_up.style.display='none'
  }
}
//Show bar de sign in
let contenat_SIGN_IN=document.querySelector('.contenat_SIGN_IN')
let button_sign_in=document.querySelector('.button_sign_in')
let sign_in_show=false

button_sign_in.onclick=()=>{
    contenar_sign_up.style.display='none'
if(sign_in_show==false){
    sign_in_show=true
    contenat_SIGN_IN.style.display='flex'
    
}else{
    sign_in_show=false
    contenat_SIGN_IN.style.display='none'
}
}
//show password 
let Password_sign_in=document.querySelector('#Password_sign_in')
let fa_eye=document.querySelector('.fa_eye')
let is_password_show=false
fa_eye.onclick=()=>{
    if(is_password_show==false){
        is_password_show=true
        fa_eye.classList.remove('fa-eye')
        fa_eye.classList+=' fa-eye-slash '
        Password_sign_in.type='text'
    }else{
        is_password_show=false
        fa_eye.classList.remove('fa-eye-slash')
        fa_eye.classList+=' fa-eye '
        Password_sign_in.type='password'
    }
    
}