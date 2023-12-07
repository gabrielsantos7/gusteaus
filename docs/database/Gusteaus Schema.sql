-- MySQL Workbench Synchronization
-- Generated: 2023-12-07 15:40
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: gabri

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `Gusteaus` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`endereco` (
  `id_endereco` INT(11) NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(5) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_endereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`telefone` (
  `id_telefone` INT(11) NOT NULL AUTO_INCREMENT,
  `ddd` VARCHAR(4) NOT NULL,
  `numero` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id_telefone`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` VARCHAR(45) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(30) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `telefone_id_telefone` INT(11) NOT NULL,
  `endereco_id_endereco` INT(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  INDEX `fk_cliente_telefone1_idx` (`telefone_id_telefone` ASC) VISIBLE,
  INDEX `fk_cliente_endereco1_idx` (`endereco_id_endereco` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_telefone1`
    FOREIGN KEY (`telefone_id_telefone`)
    REFERENCES `Gusteaus`.`telefone` (`id_telefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_endereco1`
    FOREIGN KEY (`endereco_id_endereco`)
    REFERENCES `Gusteaus`.`endereco` (`id_endereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`reserva` (
  `id_reserva` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `qtd_pessoas` INT(11) NOT NULL,
  `observacoes` TEXT(255) NULL DEFAULT NULL,
  `cliente_id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_reserva`),
  INDEX `fk_reserva_cliente1_idx` (`cliente_id_cliente` ASC) VISIBLE,
  CONSTRAINT `fk_reserva_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `Gusteaus`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`pedido` (
  `id_pedido` INT(11) NOT NULL AUTO_INCREMENT,
  `valor_total` FLOAT(11) NOT NULL,
  `data_hora` DATETIME NOT NULL,
  `status_preparo` VARCHAR(20) NOT NULL,
  `observacoes` TEXT(255) NULL DEFAULT NULL,
  `cliente_id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  INDEX `fk_pedido_cliente1_idx` (`cliente_id_cliente` ASC) VISIBLE,
  CONSTRAINT `fk_pedido_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `Gusteaus`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`item` (
  `id_item` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco_unitario` FLOAT(11) NOT NULL,
  `descricao` VARCHAR(90) NULL DEFAULT NULL,
  PRIMARY KEY (`id_item`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`ingrediente` (
  `id_ingrediente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_ingrediente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`ingrediente_has_item` (
  `ingrediente_id_ingrediente` INT(11) NOT NULL,
  `item_id_item` INT(11) NOT NULL,
  PRIMARY KEY (`ingrediente_id_ingrediente`, `item_id_item`),
  INDEX `fk_ingrediente_has_item_item1_idx` (`item_id_item` ASC) VISIBLE,
  INDEX `fk_ingrediente_has_item_ingrediente_idx` (`ingrediente_id_ingrediente` ASC) VISIBLE,
  CONSTRAINT `fk_ingrediente_has_item_ingrediente`
    FOREIGN KEY (`ingrediente_id_ingrediente`)
    REFERENCES `Gusteaus`.`ingrediente` (`id_ingrediente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ingrediente_has_item_item1`
    FOREIGN KEY (`item_id_item`)
    REFERENCES `Gusteaus`.`item` (`id_item`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `Gusteaus`.`pedido_has_item` (
  `pedido_id_pedido` INT(11) NOT NULL,
  `item_id_item` INT(11) NOT NULL,
  PRIMARY KEY (`pedido_id_pedido`, `item_id_item`),
  INDEX `fk_pedido_has_item_item1_idx` (`item_id_item` ASC) VISIBLE,
  INDEX `fk_pedido_has_item_pedido1_idx` (`pedido_id_pedido` ASC) VISIBLE,
  CONSTRAINT `fk_pedido_has_item_pedido1`
    FOREIGN KEY (`pedido_id_pedido`)
    REFERENCES `Gusteaus`.`pedido` (`id_pedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_has_item_item1`
    FOREIGN KEY (`item_id_item`)
    REFERENCES `Gusteaus`.`item` (`id_item`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
