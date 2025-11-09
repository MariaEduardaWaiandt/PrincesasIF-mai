DROP SCHEMA IF EXISTS princesasif;
CREATE SCHEMA IF NOT EXISTS `princesasif` ;
USE `princesasif` ;

-- -----------------------------------------------------
-- Table `princesasif`.`cadasempresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `princesasif`.`empresa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cnpj` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `telefones` VARCHAR(50) NOT NULL,
  `responsaveis` VARCHAR(200) NOT NULL,
  `ativ_eco` VARCHAR(500) NOT NULL,
  `apresentacao` VARCHAR(100) NOT NULL,
  `historico` VARCHAR(800) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `princesasif`.`cadasproduto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `princesasif`.`produto` (
  `id` INT(50) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `preco` INT(11) NOT NULL,
  `unidade` INT(200) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `princesasif`.`cadastroclientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `princesasif`.`cliente` (
  `id` INT(50) NOT NULL AUTO_INCREMENT,
  `cpf` INT(20) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `cep` INT(9) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `princesasif`.`cadasusuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `princesasif`.`usuario` (
  `id` INT(50) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefones` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

