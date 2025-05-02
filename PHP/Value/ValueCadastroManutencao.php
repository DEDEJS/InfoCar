<?php
 class ValueCadastroManutencao{
    public function ValuePeca($GetValuePecaManutencao){
        echo htmlspecialchars($GetValuePecaManutencao);
    }
    public function ValueValorManutencao($GetValueValorManutencao){
        echo htmlspecialchars($GetValueValorManutencao);
    }
    public function ValueMaoDeObraManutencao($GetValueMaoDeObraManutencao){
        echo htmlspecialchars($GetValueMaoDeObraManutencao);
    }
    public function ValueLocalManutencao($GetValueLocalManutencao){
        echo htmlspecialchars($GetValueLocalManutencao);
    }
    public function ValueObservacaoManutencao($GetValueObservacaoManutencao){
        echo htmlspecialchars(trim($GetValueObservacaoManutencao));
    }
 }
 $ValueCadastroManutencao = new ValueCadastroManutencao();
?>