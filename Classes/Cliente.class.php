<?php
Class cliente extends CRUD{
    protected $table = "Cliente";
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $cep;

       public function getId(){
    return $this->id;
   }
   public function setId($id){
    $this->id=$id;
   }
   public function getNome(){
    return $this->nome;
   }
   public function setNome($nome){
    $this->nome=$nome;
   }
   public function getEmail(){
    return $this->email;
   }  
   public function setEmail($email) {
   $this->email=$email;
   }
   public function getcpf(){
    return $this->cpf;
   } 
   public function setcpf($cpf){
    $this->cpf = $cpf;
   }
   public function getCep(){
    return $this->cep;
   }
   public function setcep($cep) {
     $this->cep = $cep;
}
public function add(){

$sql = "INSERT INTO $this->table (id, nome, email, cpf, cep) VALUES (:id, :nome, :email, :cpf, :cep)";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(":id", $this->id );
$stmt->bindParam(":nome", $this->nome );
$stmt->bindParam(":email", $this->email );
$stmt->bindParam(":cpf", $this->cpf );
$stmt->bindParam(":cep", $this->cep );
return $stmt->execute();
}
public function update ($campo, $id){
$sql = "UPDATE $this->table SET nome=:nome, email=:email, cpf:cpf, cep=:cep WHERE $campo=:id";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(":id", $this->nome, PDO::PARAM_STR);
$stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
$stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
$stmt->bindParam(":cpf", $this->cpf, PDO::PARAM_STR);
$stmt->bindParam(":cep", $this->cep, PDO::PARAM_STR);
return $stmt->execute();

}
}
