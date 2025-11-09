<?php
class Produto extends CRUD
{
    protected $table = 'produto';
protected $produto = 'produto';
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $unidade;


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


    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }


    public function getUnidade()
    {
        return $this->unidade;
    }
    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;
    }


    public function add()
    {
        $sql = "INSERT INTO {$this->table} (nome, descricao, preco, unidade) VALUES (:nome, :descricao, :preco, :unidade)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":preco", $this->preco);
        $stmt->bindParam(":unidade", $this->unidade);
        return $stmt->execute();
    }


    public function update($campo, $id): bool
    {
        $sql = "UPDATE {$this->table} SET nome=:nome, descricao=:descricao, preco=:preco, unidade=:unidade WHERE {$campo} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":preco", $this->preco);
        $stmt->bindParam(":unidade", $this->unidade);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}


?>



