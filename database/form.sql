-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lanche
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lanche
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lanche` DEFAULT CHARACTER SET utf8 ;
USE `lanche` ;

-- -----------------------------------------------------
-- Table `lanche`.`genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lanche`.`genero` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lanche`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lanche`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `nascimento` DATE NOT NULL,
  `telefone` VARCHAR(11) NULL,
  `email` VARCHAR(254) NULL,
  `genero_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_genero_idx` (`genero_id` ASC),
  CONSTRAINT `fk_aluno_genero`
    FOREIGN KEY (`genero_id`)
    REFERENCES `lanche`.`genero` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lanche`.`situacao_trabalho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lanche`.`situacao_trabalho` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lanche`.`trabalho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lanche`.`trabalho` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(254) NOT NULL,
  `resumo` TEXT NOT NULL,
  `data_apresentacao` DATETIME NOT NULL,
  `situacao_trabalho_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_trabalho_situacao_trabalho1_idx` (`situacao_trabalho_id` ASC),
  CONSTRAINT `fk_trabalho_situacao_trabalho1`
    FOREIGN KEY (`situacao_trabalho_id`)
    REFERENCES `lanche`.`situacao_trabalho` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lanche`.`trabalho_has_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lanche`.`trabalho_has_aluno` (
  `trabalho_id` INT NOT NULL,
  `aluno_id` INT NOT NULL,
  PRIMARY KEY (`trabalho_id`, `aluno_id`),
  INDEX `fk_trabalho_has_aluno_aluno1_idx` (`aluno_id` ASC),
  INDEX `fk_trabalho_has_aluno_trabalho1_idx` (`trabalho_id` ASC),
  CONSTRAINT `fk_trabalho_has_aluno_trabalho1`
    FOREIGN KEY (`trabalho_id`)
    REFERENCES `lanche`.`trabalho` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabalho_has_aluno_aluno1`
    FOREIGN KEY (`aluno_id`)
    REFERENCES `lanche`.`aluno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
