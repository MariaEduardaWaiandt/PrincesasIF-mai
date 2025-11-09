<?php
class Login extends CRUD
{
    protected $cadasLogin = "Login";
    private $id;
    private $usuario;
    private $senha;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {

        if (password_get_info($senha)['algo'] === 0) {
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        } else {
            $this->senha = $senha;
        }
    }

    public function add()
    {
        $sql = "INSERT INTO $this->cadasLogin (usuario, senha) VALUES (:usuario, :senha)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":usuario", $this->usuario);
        $stmt->bindParam(":senha", $this->senha);
        return $stmt->execute();
    }

    public function update($campo, $id): bool
    {
        $sql = "UPDATE $this->cadasLogin SET usuario = :usuario, senha = :senha WHERE $campo = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":usuario", $this->usuario);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }


    public function autenticar($usuario, $senha): bool
    {
        $sql = "SELECT * FROM $this->cadasLogin WHERE usuario = :usuario LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":usuario", $usuario);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($senha, $user['senha'])) {

            $this->id = $user['id'];
            $this->usuario = $user['usuario'];
            $this->senha = $user['senha'];
            return true;
        }
        return false;
    }
}

