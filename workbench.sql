SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Paciente` (
  `pac_cod` INT NOT NULL,
  `pac_nom` VARCHAR(100) NOT NULL,
  `pac_ape` VARCHAR(100) NOT NULL,
  `pa_dir` VARCHAR(100) NOT NULL,
  `pac_edad` INT NOT NULL,
  `pac_peso` DECIMAL(2,2) NOT NULL,
  `pac_sexo` BIT NOT NULL,
  `pac_dni` CHAR(8) NOT NULL,
  PRIMARY KEY (`pac_cod`, `pac_dni`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Cargo` (
  `car_cod` INT NOT NULL,
  `car_nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`car_cod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Empleado` (
  `emp_cod` INT NOT NULL,
  `emp_nom` VARCHAR(45) NOT NULL,
  `emp_ape` VARCHAR(45) NOT NULL,
  `Cargo_car_cod` INT NOT NULL,
  PRIMARY KEY (`emp_cod`),
  INDEX `fk_Empleado_Cargo_idx` (`Cargo_car_cod` ASC),
  CONSTRAINT `fk_Empleado_Cargo`
    FOREIGN KEY (`Cargo_car_cod`)
    REFERENCES `mydb`.`Cargo` (`car_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Especialidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Especialidad` (
  `esp_cod` INT NOT NULL,
  `esp_nom` VARCHAR(45) NULL,
  `esp_des` VARCHAR(45) NULL,
  PRIMARY KEY (`esp_cod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Diagnostico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Diagnostico` (
  `dia_cod` INT NOT NULL,
  `dia_desc` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`dia_cod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Hc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Hc` (
  `hc_id` INT NOT NULL,
  `hc_fec` DATETIME NULL,
  `hc_sintomas` VARCHAR(500) NOT NULL,
  `hc_tratamiento` VARCHAR(500) NOT NULL,
  `hc_mot` VARCHAR(500) NOT NULL,
  `Paciente_pac_cod` INT NOT NULL,
  `Empleado_emp_cod` INT NOT NULL,
  `Especialidad_esp_cod` INT NOT NULL,
  `Diagnostico_dia_cod` INT NOT NULL,
  PRIMARY KEY (`hc_id`),
  INDEX `fk_Hc_Paciente1_idx` (`Paciente_pac_cod` ASC),
  INDEX `fk_Hc_Empleado1_idx` (`Empleado_emp_cod` ASC),
  INDEX `fk_Hc_Especialidad1_idx` (`Especialidad_esp_cod` ASC),
  INDEX `fk_Hc_Diagnostico1_idx` (`Diagnostico_dia_cod` ASC),
  CONSTRAINT `fk_Hc_Paciente1`
    FOREIGN KEY (`Paciente_pac_cod`)
    REFERENCES `mydb`.`Paciente` (`pac_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Hc_Empleado1`
    FOREIGN KEY (`Empleado_emp_cod`)
    REFERENCES `mydb`.`Empleado` (`emp_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Hc_Especialidad1`
    FOREIGN KEY (`Especialidad_esp_cod`)
    REFERENCES `mydb`.`Especialidad` (`esp_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Hc_Diagnostico1`
    FOREIGN KEY (`Diagnostico_dia_cod`)
    REFERENCES `mydb`.`Diagnostico` (`dia_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
