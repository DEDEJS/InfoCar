function ValidaTipoManutencao(){
   var TipoManutencao = document.getElementById('Tipo');
   var ErrorTipoManutencao = document.getElementById('ErrorTipoManutencao');
   const ArrayTipoManutencao = [
      '---',
      'Elétrica',
      'Motor',
      'Suspensão',
      'Outro'
   ]
   if(TipoManutencao.value == ArrayTipoManutencao['0']){
    ErrorTipoManutencao.innerHTML = "Escolha Uma Opção";
   }else{
    ErrorTipoManutencao.innerHTML  = "";
   }
    if(TipoManutencao.value == ArrayTipoManutencao['1'] || TipoManutencao.value == ArrayTipoManutencao['2']
        || TipoManutencao.value == ArrayTipoManutencao['3'] || TipoManutencao.value == ArrayTipoManutencao['4']){
            document.getElementById('PecaDiv').style.display = 'block';
    document.getElementById('ValorPecaDiv').style.display = 'block';
    document.getElementById('ValorMaoObraDiv').style.display = 'block';
    document.getElementById('LocalFeitoManutencaoDiv').style.display = 'block';
    document.getElementById('DataDiv').style.display = 'block';
    document.getElementById('ObservacaoDiv').style.display = 'block';
   }
}
function ValidaformCadastroManutencao(){
    
    setInterval(function(){
        return ValidaTipoManutencao()
      }, 1000);
    }
