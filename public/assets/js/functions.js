function togglePassword() {
    const senhaInputs = document.querySelectorAll('#login_pass, #register_pass, #confirm_pass'); 
    const mostrarSenhaBtn = document.getElementById('revel_senha');  

  
    senhaInputs.forEach(function(input) {
       
        if (input.type === 'password') {
            input.type = 'text';  
        } else {
            input.type = 'password';  
        }
    });

    
    if (mostrarSenhaBtn.textContent === '👁️') {
        mostrarSenhaBtn.textContent = '🙈';  
    } else {
        mostrarSenhaBtn.textContent = '👁️';  
    }
}
