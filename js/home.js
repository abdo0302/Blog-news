let button_Authors=document.querySelector('.button_Authors')
let button_blog=document.querySelectorAll('.button_blog')
let section_authors=document.querySelector('.section_authors')
let section_blog=document.querySelector('.section_blog')
let section_header=document.querySelectorAll('.section_header')
let main=document.querySelector('main')
let home=document.querySelectorAll('.home')


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

// button_blog.forEach((e,i)=>{
//     e.addEventListener('click',()=>{
//          
//         
//         console.log('dd');
//     })
// });
button_blog.forEach((e,i)=>{
    e.addEventListener('click',function(){
        for(let y=0;y<section_header.length;y++){
            section_header[y].style.display='none'
        }
        section_blog.style.display='flex'
    })
  
})