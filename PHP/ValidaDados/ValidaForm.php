<?php
ini_set('default_charset','UTF-8');
date_default_timezone_set('America/Sao_Paulo');
class InputHandler {
    public static function get(string $key): ?string {
        return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : null;
    }
}
class ValueDisplay {
    public static function show(string $field) {
        echo InputHandler::get($field);
    }

    public static function showName() {
        self::show('nome');
    }
    public static function ShowFullName(){
        self::show('NomeCompleto');
    }
    public static function showCnpj() {
        self::show('cnpj');
    }

    public static function showAddress() {
        self::show('endereco');
    }

    public static function showAddressNumber() {
        self::show('numero');
    }

    public static function showCpf() {
        self::show('cpf');
    }

    public static function showEmail() {
        self::show('email');
    }

    public static function showPassword() {
        self::show('senha');
    }

    public static function showPhone() {
        self::show('telefone');
    }
    public static function ShowSubject(){
        self::show('assunto');
    }
    public static function ShowMessage(){
        self::show('mensagem');
    }
}
class ValidateData {
    // Flags de validação
    public $nameValid = false;
    public $cpfValid = false;
    public $cnpjValid = false;
    public $emailValid = false;
    public $passwordValid = false;
    public $phoneValid = false;
    public $addressValid = false;
    public $addressNumberValid = false;

    // Valores sanitizados
    public $nameValue;
    public $cpfValue;
    public $cnpjValue;
    public $emailValue;
    public $passwordValue;
    public $phoneValue;
    public $addressValue;
    public $addressNumberValue;

    public $validated = false;

    // -------------------
    // Validation Methods
    // -------------------

    public function validateName() {
        $name = InputHandler::get('nome');
        if(isset($_POST['button'])) {
            if(strlen($name) <= 2 || strlen($name) >= 50 || !preg_match("/^[\p{L} ]+$/u", $name)) {
                echo "Nome Inválido";
            } else {
                $this->nameValid = true;
                $this->nameValue = $name;
                return true;
            }
        }
    }
    public function ValidateFullName(){
        $FullName = InputHandler::get('ShowFullName');
        if(isset($_POST['button'])) {
            if(strlen($FullName) <= 8 || strlen($FullName) >= 81 || !preg_match("/^[\p{L} ]+$/u", $FullName)) {
                echo "Coloque o Seu Nome Completo";
            }else{

            }
        }
    }

    public function validateCpf() {
        $cpf = InputHandler::get('cpf');
        $cpfClean = preg_replace('/\D/', '', $cpf);
        if(isset($_POST['button'])) {
            if(strlen($cpfClean) != 11 || preg_match('/(\d)\1{10}/', $cpfClean)) {
                echo "CPF Inválido";
                return false;
            } else {
                $this->cpfValid = true;
                $this->cpfValue = $cpfClean;
                return true;
            }
        }
    }

    public function validateCnpj() {
        $cnpj = InputHandler::get('cnpj');
        $cnpj = preg_replace('/\D/', '', $cnpj);
        if(isset($_POST['button'])) {
            if(strlen($cnpj) != 14 || preg_match('/(\d)\1{13}/', $cnpj)) {
                echo "CNPJ Inválido";
                return false;
            } else {
                // cálculo dos dígitos verificadores
                for ($t = 12; $t < 14; $t++) {
                    $d = 0;
                    for ($m = $t - 7, $i = 0; $i < $t; $i++) {
                        $d += $cnpj[$i] * $m;
                        $m--;
                        if($m < 2) $m = 9;
                    }
                    $digit = ((10 * $d) % 11) % 10;
                    if ((int)$cnpj[$t] !== $digit) {
                        echo "CNPJ Inválido";
                        return false;
                    }
                }
                $this->cnpjValid = true;
                $this->cnpjValue = $cnpj;
                return true;
            }
        }
    }

    public function validateEmail() {
        $email = InputHandler::get('email');
        if(isset($_POST['button'])) {
            if(strlen($email) <= 0) {
                echo "Preenche o Campo Email";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email Inválido";
            } else {
               $this->emailValid = true;   
                $this->emailValue = $email;
                return true;
            }
        }
    }
    public function validatePasswordLogin(){
         $password = InputHandler::get('senha');
        if(isset($_POST['button'])) {
            if(strlen($password) <= 6 || strlen($password) > 31) {
                echo "Senha Inválida";
            } else {
                $this->passwordValid = true;
                $this->passwordValue = $password;
                return true;
            }
        }
    }
    public function validatePassword() {
        $password = InputHandler::get('senha');
        if(isset($_POST['button'])) {
            if(strlen($password) <= 6 || strlen($password) > 20) {
                echo "A Senha deve ter entre 7 e 20 caracteres";
            } else {
                $this->passwordValid = true;
                $this->passwordValue = $password;
                return true;
            }
        }
    }

    public function validatePhone() {
        $phone = InputHandler::get('telefone');
        if(isset($_POST['button'])) {
            if(!preg_match("/^(\d{10}|\d{11})$/", $phone)) {
                echo "Telefone Inválido";
            } else {
                $this->phoneValid = true;
                $this->phoneValue = $phone;
                return true;
            }
        }
    }

    public function validateAddress() {
        $address = InputHandler::get('endereco');
        if(isset($_POST['button'])) {
            if(strlen($address) <= 1) {
                echo "Endereço Inválido";
            } else {
                $this->addressValid = true;
                $this->addressValue = $address;
                return true;
            }
        }
    }

    public function validateAddressNumber() {
        $number = InputHandler::get('numero');
        if(isset($_POST['button'])) {
            if(strlen($number) <= 0 || !is_numeric($number)) {
                echo "Número Inválido";
            } else {
                $this->addressNumberValid = true;
                $this->addressNumberValue = $number;
                return true;
            }
        }
    }
    public function ValidateSubject(){// fazer um script que ve se o utf esta pegando para nao dar erro no cliente
        $subject = InputHandler::get('assunto');
        $ArraySubject = array(
         'Selecione um assunto',
         'Dúvida sobre cadastro de veículo',
         'Problema ao registrar manutenção',
         'Erro no sistema / bug',
         'Sugestão de melhoria',
         'Solicitação de nova funcionalidade',
         'Atualização de dados do usuário',
         'Integração com oficinas',
         'Parcerias ou uso comercial',
         'Outros assuntos'
        );
        if(isset($_POST['button'])) {
          if($subject == $ArraySubject[0]){
              echo "Escolha um Assunto";
          }
        }

    }
    public function ValidateMesage(){
         $message = InputHandler::get('mensagem');
         if(isset($_POST['button'])) {
           if(strlen($message) <= 10 || strlen($message) >= 321){
             echo "Mínimo de 11 caracteres e máximo de 320 caracteres";
           }     
           
         }
    }
    // -------------------
    // Registration Checks
    // -------------------
public function checkLoginIfDataProvided() {

        if($this->emailValid == true  && $this->passwordValid == true) {
            $email = InputHandler::get('email');
            $password = InputHandler::get('senha');
            include_once("ValidaLogin.php");
            $ValidateLogin->checkLogin($email, $password);
        }
    }
    public function checkFreeOrProRegistration() {
        if($this->nameValid && $this->cpfValid && $this->emailValid && $this->passwordValid && $this->phoneValid) {
            $this->validated = true;
            return true;
        } else {
            echo "<span>Preencha os campos restantes</span>";
            return false;
        }
    }

    public function checkEnterpriseRegistration() {
        if($this->nameValid && $this->cnpjValid && $this->addressValid && $this->addressNumberValid &&
           $this->emailValid && $this->passwordValid && $this->phoneValid) {
            $this->validated = true;
            return true;
        } else {
            return false;
        }
    }
}
$ValidateForm = new ValidateData();

class Registration {
    private ValidateData $validator ;

    public function __construct(ValidateData $validator) {
        $this->validator = $validator;
    }

    // -------------------
    // Free User Registration
    // -------------------
    public function insertFree() {
          $canRegister = $this->validator->checkFreeOrProRegistration();
   if(!$this->validator->validated) return;
        include_once("../PHP/Banco/Banco.php");
        include_once("../PHP/FunctionsDB/CRUD/Select.php");
        include_once("../PHP/FunctionsDB/CRUD/insert.php");

        $name = $this->validator->nameValue;
        $cpf = $this->validator->cpfValue;
        $Email = $this->validator->emailValue;
        $password = $this->validator->passwordValue;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $phone = $this->validator->phoneValue;

        if($VerificaSeExisteDadosDB->CheckEmail($Email, $Connection) != false &&
           $VerificaSeExisteDadosDB-> CheckCPF($cpf, $Connection) != false) {
             $InsertUser -> InsertUserFree($name, $Email, $cpf, $passwordHash, $phone, $Connection);
        } else {
            echo '<span>Usuário já cadastrado, deseja logar nele? 
            <a href="http://localhost/Projects/InfoCar/login.php">Logar</a></span>';
        }
        
    }

    // -------------------
    // Pro User Registration
    // -------------------
    public function insertPro() {
         $canRegister = $this->validator->checkFreeOrProRegistration();
        if(!$this->validator->validated) return;
        include_once("../PHP/Banco/Banco.php");
        include_once("../PHP/FunctionsDB/CRUD/Select.php");
        include_once("../PHP/FunctionsDB/CRUD/insert.php");
        
        $name = $this->validator->nameValue;
        $cpf = $this->validator->cpfValue;
        $Email = $this->validator->emailValue;
        $password = $this->validator->passwordValue;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $phone = $this->validator->phoneValue;

        if($VerificaSeExisteDadosDB->CheckEmail($Email, $Connection) != false &&
        $VerificaSeExisteDadosDB->CheckCPF($cpf, $Connection) != false) {
           $InsertUser-> InsertUserPro($name, $Email, $cpf, $passwordHash, $phone, $Connection);
        } else {
            echo '<span>Usuário já cadastrado, deseja logar nele? 
            <a href="http://localhost/Projects/InfoCar/login.php">Logar</a></span>';
        }
    }

    // -------------------
    // Enterprise Registration
    // -------------------
    public function insertEnterprise() {
       $canRegister = $this->validator-> checkEnterpriseRegistration();
        if(!$this->validator->validated) return;

        include_once("../PHP/Banco/Banco.php");
        include_once("../PHP/FunctionsDB/CRUD/Select.php");
        include_once("../PHP/FunctionsDB/CRUD/insert.php");

        $name = $this->validator->nameValue;
        $cnpj = $this->validator->cnpjValue;
        $email = $this->validator->emailValue;
        $password = $this->validator->passwordValue;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $phone = $this->validator->phoneValue;
        $address = $this->validator->addressValue;
        $number = $this->validator->addressNumberValue;

        // Verifica se já existe email ou CNPJ
        if($VerificaSeExisteDadosDB->CheckEmail($email, $Connection) != false &&
           $VerificaSeExisteDadosDB->CheckCNPJ($cnpj, $Connection) != false) {
           $InsertUser -> InsertUserBussines($name, $email, $cnpj, $passwordHash, $phone, $Connection);
        } else {
            echo '<span>Usuário já cadastrado, deseja logar nele? 
            <a href="http://localhost/Projects/InfoCar/login.php">Logar</a>
            Se for alterar o plano é só logar na conta e ir em meus dados</span>';        }
    }
}
$Insert = new Registration($ValidateForm);
