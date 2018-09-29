-- MySQL Script generated by MySQL Workbench
-- Sat Sep 29 14:41:04 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema foodorange
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema foodorange
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `goplekbase1` DEFAULT CHARACTER SET utf8 ;
USE `goplekbase1` ;

-- -----------------------------------------------------
-- Table `foodorange`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `goplekbase1`.`Usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `matricula` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `nivel` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC),
  UNIQUE INDEX `telefono_UNIQUE` (`telefono` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `foodorange`.`Tarea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `goplekbase1`.`Tarea` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `foodorange`.`Detalles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `goplekbase1`.`Detalles` (
  `Tarea_id` INT NOT NULL,
  `Usuario_id` INT NOT NULL,
  PRIMARY KEY (`Tarea_id`, `Usuario_id`),
  INDEX `fk_Tarea_has_Usuario_Usuario1_idx` (`Usuario_id` ASC),
  INDEX `fk_Tarea_has_Usuario_Tarea_idx` (`Tarea_id` ASC),
  CONSTRAINT `fk_Tarea_has_Usuario_Tarea`
    FOREIGN KEY (`Tarea_id`)
    REFERENCES `foodorange`.`Tarea` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tarea_has_Usuario_Usuario1`
    FOREIGN KEY (`Usuario_id`)
    REFERENCES `goplekbase1`.`Usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;