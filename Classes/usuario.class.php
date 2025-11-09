<?php

class Usuario extends CRUD
{
    protected $cadasusuario = "cadasusuario";
    private $id;
    private $nome;
    private $endereco;
    private $email;
    private $telefone;
    private $senha;
    private $cpf;


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    public function add()
    {
        $sql = "INSERT INTO $this->cadasusuario 
                (nome, endereco, email, telefone, senha, cpf)
                VALUES (:nome, :endereco, :email, :telefone, :senha, :cpf)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":cpf", $this->cpf);
        return $stmt->execute();
    }

    public function update($campo, $id): bool
    {
        $sql = "UPDATE $this->cadasusuario 
                SET nome=:nome, endereco=:endereco, email=:email, telefone=:telefone, senha=:senha, cpf=:cpf 
                WHERE $campo=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
    public function buscarPorCpf($cpf)
{
    $sql = "SELECT * FROM $this->cadasusuario WHERE cpf = :cpf LIMIT 1";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}



}
