function ValidaTipoManutencao(){
   var TipoManutencao = document.getElementById('Tipo');
   var ErrorTipoManutencao = document.getElementById('ErrorTipoManutencao');
   const ArrayTipoManutencao = [
      '---',
      'Preventiva',
      'Corretiva',
      'Outro'
   ]
   if(TipoManutencao.value == ArrayTipoManutencao['0']){
    ErrorTipoManutencao.innerHTML = "Escolha Uma Opção";
   }else{
    ErrorTipoManutencao.innerHTML  = "";
   }
    if(TipoManutencao.value == ArrayTipoManutencao['1']){

    document.getElementById('DataDiv').style.display = 'block';
   }
}
function ValidaformCadastroManutencao(){
    
    setInterval(function(){
        return ValidaTipoManutencao()
      }, 1000);
    }
