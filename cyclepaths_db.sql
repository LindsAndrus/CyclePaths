-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cyclepaths
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cyclepaths
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cyclepaths` DEFAULT CHARACTER SET utf8 ;
USE `cyclepaths` ;

-- -----------------------------------------------------
-- Table `cyclepaths`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`items` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`id`, `categories_id`),
  INDEX `fk_items_categories_idx` (`categories_id` ASC),
  CONSTRAINT `fk_items_categories`
    FOREIGN KEY (`categories_id`)
    REFERENCES `cyclepaths`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`addresses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `address_1` VARCHAR(45) NULL,
  `address_2` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `state` VARCHAR(45) NULL,
  `zip` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`postings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`postings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `price` DECIMAL(15,2) NULL,
  `description` VARCHAR(255) NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  `items_id` INT NOT NULL,
  `items_categories_id` INT NOT NULL,
  `addresses_id` INT NOT NULL,
  PRIMARY KEY (`id`, `items_id`, `items_categories_id`, `addresses_id`),
  INDEX `fk_postings_items1_idx` (`items_id` ASC, `items_categories_id` ASC),
  INDEX `fk_postings_addresses1_idx` (`addresses_id` ASC),
  CONSTRAINT `fk_postings_items1`
    FOREIGN KEY (`items_id` , `items_categories_id`)
    REFERENCES `cyclepaths`.`items` (`id` , `categories_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_postings_addresses1`
    FOREIGN KEY (`addresses_id`)
    REFERENCES `cyclepaths`.`addresses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `link` VARCHAR(255) NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  `postings_id` INT NOT NULL,
  PRIMARY KEY (`id`, `postings_id`),
  INDEX `fk_images_postings1_idx` (`postings_id` ASC),
  CONSTRAINT `fk_images_postings1`
    FOREIGN KEY (`postings_id`)
    REFERENCES `cyclepaths`.`postings` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `type` INT NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `avg_buyer_rating` INT NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  `images_id` INT NOT NULL,
  `addresses_id` INT NOT NULL,
  PRIMARY KEY (`id`, `images_id`, `addresses_id`),
  INDEX `fk_users_images1_idx` (`images_id` ASC),
  INDEX `fk_users_addresses1_idx` (`addresses_id` ASC),
  CONSTRAINT `fk_users_images1`
    FOREIGN KEY (`images_id`)
    REFERENCES `cyclepaths`.`images` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_addresses1`
    FOREIGN KEY (`addresses_id`)
    REFERENCES `cyclepaths`.`addresses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`brands` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `company_founded` DATE NULL,
  `description` VARCHAR(255) NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`seller_reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`seller_reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rating` INT(10) NULL,
  `comment` VARCHAR(255) NULL,
  `created_on` DATE NULL,
  `updated_on` DATE NULL,
  `seller_id` INT NOT NULL,
  `buyer_id` INT NOT NULL,
  PRIMARY KEY (`id`, `seller_id`, `buyer_id`),
  INDEX `fk_seller_reviews_users1_idx` (`seller_id` ASC),
  INDEX `fk_seller_reviews_users2_idx` (`buyer_id` ASC),
  CONSTRAINT `fk_seller_reviews_users1`
    FOREIGN KEY (`seller_id`)
    REFERENCES `cyclepaths`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_seller_reviews_users2`
    FOREIGN KEY (`buyer_id`)
    REFERENCES `cyclepaths`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cyclepaths`.`items_has_brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cyclepaths`.`items_has_brands` (
  `items_id` INT NOT NULL,
  `items_categories_id` INT NOT NULL,
  `brands_id` INT NOT NULL,
  PRIMARY KEY (`items_id`, `items_categories_id`, `brands_id`),
  INDEX `fk_items_has_brands_brands1_idx` (`brands_id` ASC),
  INDEX `fk_items_has_brands_items1_idx` (`items_id` ASC, `items_categories_id` ASC),
  CONSTRAINT `fk_items_has_brands_items1`
    FOREIGN KEY (`items_id` , `items_categories_id`)
    REFERENCES `cyclepaths`.`items` (`id` , `categories_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_items_has_brands_brands1`
    FOREIGN KEY (`brands_id`)
    REFERENCES `cyclepaths`.`brands` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
