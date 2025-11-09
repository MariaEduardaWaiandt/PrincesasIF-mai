
<?php

class Empresa extends CRUD
{
    protected $table = "empresa";
    private $id;
    private $Cnpj;
    private $Nome;
    private $Endereco;
    private $Email;
    private $Telefones;
    private $Responsaveis;
    private $Ativ_eco;
    private $Apresentacao;
    private $Historico;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCnpj()
    {
        return $this->Cnpj;
    }
    public function setCnpj($cnpj)
    {
        $this->Cnpj = $cnpj;
    }
    public function getNome()
    {
        return $this->Nome;
    }
    public function setNome($nome)
    {
        $this->Nome = $nome;
    }
    public function getEndereco()
    {
        return $this->Endereco;
    }
    public function setEndereco($endereco)
    {
        $this->Endereco = $endereco;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    public function setEmail($email)
    {
        $this->Email = $email;
    }
    public function getTelefones()
    {
        return $this->Telefones;
    }
    public function setTelefones($telefones)
    {
        $this->Telefones = $telefones;
    }
    public function getResponsaveis()
    {
        return $this->Responsaveis;
    }
    public function setResponsaveis($responsaveis)
    {
        $this->Responsaveis = $responsaveis;
    }
    public function getAtiv_eco()
    {
        return $this->Ativ_eco;
    }
    public function setAtiv_eco($Ativ_eco)
    {
        $this->Ativ_eco = $Ativ_eco;
    }
    public function getApresentacao()
    {
        return $this->Apresentacao;
    }
    public function setApresentacao($Apresentacao)
    {
        $this->Apresentacao = $Apresentacao;
    }
    public function getHistorico()
    {
        return $this->Historico;
    }
    public function setHistorico($historico)
    {
        $this->Historico = $historico;
    }


    public function add()
    {
        $sql = "Insert into $this->table(cnpj, nome, endereco, email, telefones, responsaveis, ativ_eco, apresentacao, historico) VALUES (:cnpj, :nome, :endereco, :email, :telefones, :responsaveis, :ativ_eco, :apresentacao, :historico)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cnpj", $this->Cnpj);
        $stmt->bindParam(":nome", $this->Nome);
        $stmt->bindParam(":endereco", $this->Endereco);
        $stmt->bindParam(":email", $this->Email);
        $stmt->bindParam(":telefones", $this->Telefones);
        $stmt->bindParam(":responsaveis", $this->Responsaveis);
        $stmt->bindParam(":ativ_eco", $this->Ativ_eco);
        $stmt->bindParam(":apresentacao", $this->Apresentacao);
        $stmt->bindParam(":historico", $this->Historico);
        return $stmt->execute();
    }
    public function update($campo, $id): bool
    {
        $sql = "UPDATE $this->table set cnpj=:cnpj, nome=:nome, endereco=:endereco, email=:email, telefones=:telefones, responsaveis=:responsaveis, ativ_eco=:ativ_eco, apresentacao=:apresentacao, historico=:historico where $campo=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cnpj", $this->Cnpj);
        $stmt->bindParam("nome", $this->Nome);
        $stmt->bindParam("endereco", $this->Endereco);
        $stmt->bindParam("email", $this->Email);
        $stmt->bindParam("telefones", $this->Telefones);
        $stmt->bindParam("responsaveis", $this->Responsaveis);
        $stmt->bindParam("ativ_eco", $this->Ativ_eco);
        $stmt->bindParam("apresentacao", $this->Apresentacao);
        $stmt->bindParam("historico", $this->Historico);
        $stmt->bindParam("id", $campo);
       
        return $stmt->execute();
    }
}




