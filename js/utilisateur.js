let non_input=document.querySelector('.non_input')
let email_input=document.querySelector('.email_input')
let password_input=document.querySelector('.password_input')
let btn_annule=document.getElementById('btn_annule')

 // button clean (annule)
 btn_annule.addEventListener('click', function() {

    password_input.value = '';
    email_input.value = '';
    non_input.value = '';
  });

