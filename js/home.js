let contenar_show_article=document.querySelector('.contenar_show_article')
let button_Authors=document.querySelector('.button_Authors')
let button_blog=document.querySelectorAll('.button_blog')
let section_authors=document.querySelector('.section_authors')
let section_blog=document.querySelector('.section_blog')
let section_header=document.querySelectorAll('.section_header')
let main=document.querySelector('main')
let home=document.querySelectorAll('.home')
let nav_bar_heder=document.querySelectorAll('.nav_bar_heder ul li a')

let nav_bar_de_profile_utilisateur=document.querySelector('.nav_bar_de_profile_utilisateur')
// add class acteve
nav_bar_heder.forEach((e,i)=>{
    e.addEventListener('click',function(){
        contenar_show_article.style.display='none'
     if(i<7){
        for(let i=0;i<nav_bar_heder.length;i++){
            nav_bar_heder[i].classList.remove('acteve')
        }
        e.classList+=' acteve'
     }
     if(i==11){
        e.classList+=' acteve'
        nav_bar_de_profile_utilisateur.style.display='none'
     }
    })
})

// Move between pages
button_Authors.onclick=()=>{
    for(let y=0;y<section_header.length;y++){
        section_header[y].style.display='none'
    }
    for (let t = 0; t < catego.length; t++) {
        catego[t].style.display='none'
    }
    section_authors.style.display='flex'

}
home.forEach((e,i) => {
    e.onclick=()=>{
        for (let t = 0; t < catego.length; t++) {
            catego[t].style.display='none'
        }
        main.style.display='flex'
        section_authors.style.display='none'
        section_blog.style.display='none'
    }
});


button_blog.forEach((e,i)=>{
    e.addEventListener('click',function(){
        for(let y=0;y<section_header.length;y++){
            section_header[y].style.display='none'
        }
        for (let t = 0; t < catego.length; t++) {
            catego[t].style.display='none'
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

//close nav bar de profile utilisateur
let button_close=document.querySelector('.button_close')
button_close.onclick=()=>{
    nav_bar_de_profile_utilisateur.style.display='none'
}
//show  nav bar de profile utilisateur
let info_utilisateur=document.querySelector('.info_utilisateur')
info_utilisateur.onclick=()=>{
    nav_bar_de_profile_utilisateur.style.display='flex'
}
//show categore
let button_catego=document.querySelectorAll('.button_catego')

let catego=document.querySelectorAll('.catego')

button_catego.forEach((e,i)=>{
    e.addEventListener('click',()=>{
        contenar_show_article.style.display='none'
        for(let y=0;y<section_header.length;y++){
            section_header[y].style.display='none'
        }
        for (let t = 0; t < catego.length; t++) {
            catego[t].style.display='none'
        }
        catego[i].style.display='block'
    })
})
//section show article
let article=document.querySelectorAll('.article')
let tetle_article=document.querySelector('.tetle_article')
let image_article=document.querySelector('.image_article')
let dat=document.querySelector('.dat')
let contnu_article=document.querySelector('.contnu_article')

let image=document.querySelectorAll('.image')
let tetle_articls=document.querySelectorAll('.tetle_articls')
let dats=document.querySelectorAll('.dats')
let conten=document.querySelectorAll('.conten')

let comants=document.querySelectorAll('.comants')
console.log(comants[0].innerHTML);
let ccomants=document.querySelector('.ccomants')

article.forEach((e,i)=>{
    e.addEventListener('click',()=>{
        ccomants.innerHTML=comants[i].innerHTML
        image_article.src=image[i].src
        tetle_article.textContent=tetle_articls[i].textContent
        dat.textContent=dats[i].textContent
        contnu_article.textContent=conten[i].textContent
        for (let o = 0; o < catego.length; o++) {
            catego[o].style.display='none'
        }
        for(let y=0;y<section_header.length;y++){
            section_header[y].style.display='none'
        }
        contenar_show_article.style.display='flex'
    })
})


