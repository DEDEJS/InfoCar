<?php
class InsertUser{
public function InsertUserFree($name, $email, $cpf, $passwordHash, $phone, $Connection) {
    try {
        $Connection->beginTransaction();

        $QueryInsertUser = $Connection->prepare('
            INSERT INTO UserData (Email, Password, Name, Phone)
            VALUES (:Email, :Password, :Name, :Phone)
        ');
        $QueryInsertUser->execute(array(
            ':Email' => $email,
            ':Password' => $passwordHash,
            ':Name' => $name,
            ':Phone' => $phone
        ));

        $userId = $Connection->lastInsertId();

        $QueryInsertLogin = $Connection->prepare('
            INSERT INTO UserLogin (UserDataId, AccountType)
            VALUES (:UserDataId, :AccountType)
        ');
        $QueryInsertLogin->execute(array(
            ':UserDataId' => $userId,
            ':AccountType' => 'Free'
        ));
        $QueryInsertUserNaturalPerson = $Connection->prepare('
              INSERT INTO usernaturalperson (CPF, IdTableUserDados)
              VALUES (:Cpf, :IdTableUserDados)
        ');
        $QueryInsertUserNaturalPerson -> execute(array(
              ':Cpf' => $cpf,
              'IdTableUserDados' => $userId
        ));
        $Connection->commit();
        echo "Usuário cadastrado com sucesso!";
    } catch (Exception $e) {
        $Connection->rollBack();
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
   }

  public function InsertUserPro($name, $email, $cpf, $passwordHash, $phone, $Connection){
        try {
        $Connection->beginTransaction();

        $QueryInsertUser = $Connection->prepare('
            INSERT INTO UserData (Email, Password, Name, Phone)
            VALUES (:Email, :Password, :Name, :Phone)
        ');
        $QueryInsertUser->execute(array(
            ':Email' => $email,
            ':Password' => $passwordHash,
            ':Name' => $name,
            ':Phone' => $phone
        ));

        $userId = $Connection->lastInsertId();

        $QueryInsertLogin = $Connection->prepare('
            INSERT INTO UserLogin (UserDataId, AccountType)
            VALUES (:UserDataId, :AccountType)
        ');
        $QueryInsertLogin->execute(array(
            ':UserDataId' => $userId,
            ':AccountType' => 'Pro'
        ));
        $QueryInsertUserNaturalPerson = $Connection->prepare('
              INSERT INTO usernaturalperson (CPF, IdTableUserDados)
              VALUES (:Cpf, :IdTableUserDados)
        ');
        $QueryInsertUserNaturalPerson -> execute(array(
              ':Cpf' => $cpf,
              'IdTableUserDados' => $userId
        ));

        $Connection->commit();
        echo "Usuário cadastrado com sucesso!";
    } catch (Exception $e) {
        $Connection->rollBack();
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
  }
    public function InsertUserBussines($name, $email, $cnpj, $passwordHash, $phone, $Connection){
        try {
        $Connection->beginTransaction();

        $QueryInsertUser = $Connection->prepare('
            INSERT INTO UserData (Email, Password, Name, Phone)
            VALUES (:Email, :Password, :Name, :Phone)
        ');
        $QueryInsertUser->execute(array(
            ':Email' => $email,
            ':Password' => $passwordHash,
            ':Name' => $name,
            ':Phone' => $phone
        ));

        $userId = $Connection->lastInsertId();

        $QueryInsertLogin = $Connection->prepare('
            INSERT INTO UserLogin (UserDataId, AccountType)
            VALUES (:UserDataId, :AccountType)
        ');
        $QueryInsertLogin->execute(array(
            ':UserDataId' => $userId,
            ':AccountType' => 'Business'
        ));
        $QueryInsertUserCompany = $Connection->prepare('
            INSERT INTO usercompany (CNPJ, IdTableUserDados)
            VALUES (:CNPJ, :IdTableUserDados)
        ');
        $QueryInsertUserCompany->execute(array(
           ':CNPJ' => $cnpj,
           'IdTableUserDados' => $userId
        ));
        $Connection->commit();
        echo "Usuário cadastrado com sucesso!";
    } catch (Exception $e) {
        $Connection->rollBack();
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
  }
}



$InsertUser = new InsertUser();
?>