
function ValidaEmail(){
   const Email = document.getElementById('email');
   const ErrorEmail = document.getElementById('ErrorEmail');
   if(Email.value == ""){
      ErrorEmail.innerHTML = "Preenche o Campo Email";
   }
} 
function ValidaSenha(){
   const Senha = document.getElementById('senha');
   const ErrorSenha = document.getElementById('ErrorSenha');
   if(Senha.value == ""){
      ErrorSenha.innerHTML = "Preenche o campo Senha";   
   }else if(Senha.value.length <= 6 || Senha.value.length > 20){
      ErrorSenha.innerHTML = "A Senha deve ter entre 7 e 20 caracteres";
   }
}
function ValidaNome(){
   const Nome = document.getElementById('nome');
   const ErrorNome = document.getElementById('ErrorNome');
   if(Nome.value.length <= 2 || Nome.value.length >= 50){
     ErrorNome.innerHTML = "Nome Inválido";
   }else{
      ErrorNome.innerHTML = "";
   }
}
function ValidaCpf(){
   const Cpf = document.getElementById('cpf');
   const ErrorCpf = document.getElementById('ErrorCpf');
   if(Cpf.value.length != 11){
      ErrorCpf.innerHTML = "CPF Inválido";
   }else{
      ErrorCpf.innerHTML = "";
   }
}
function ValidaTelefone(){
   const Telefone = document.getElementById('telefone');
   const ErrorTelefone = document.getElementById('ErrorTelefone');
   if(Telefone.value.length < 10 || Telefone.value.length > 11){
      ErrorTelefone.innerHTML = "Telefone inválido";
   } else {
      ErrorTelefone.innerHTML = "";
   }
   
}
function ValidaLogin(){
    const Button = document.getElementById('button');
    Button.addEventListener("click", function() {
         setInterval(function(){
         return ValidaEmail(), ValidaSenha()
         });
    });
}
function ValidaCadastroGratuito(){
   const Button = document.getElementById('button');
   Button.addEventListener("click", function() {
      setInterval(function(){
         return ValidaEmail(), ValidaSenha(), ValidaNome(), ValidaCpf()
      });
       });
}
function ValidaCadastroPro(){
   Button.addEventListener("click", function() {
      setInterval(function(){
         return ValidaNome(), ValidaCpf(), ValidaEmail(), ValidaSenha(), ValidaTelefone()
      });
       });
}
function ValidaCadastroEmpresarial(){
   Button.addEventListener("click", function() {
      setInterval(function() {
            return ValidaNome(), ValidaCnpj(), ValidaEndereco(), ValidaNumero(), 
            ValidaTelefone(), ValidaEmail(), ValidaSenha() 
      });
   });
}