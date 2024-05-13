 const nameInput = document.getElementById('name');
 const emailInput = document.getElementById('email');
 const passwordInput = document.getElementById('password');
 const clear_btn = document.getElementById('btn_annule');

// button clean (annule)
 clear_btn.addEventListener('click', function() {
     // Effacer les valeurs des champs d'entrée
     nameInput.value = '';
     emailInput.value = '';
     passwordInput.value = '';
 });

 //