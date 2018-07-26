<?php

function crearDB($db) {

  $consulta = $db->prepare("CREATE SCHEMA `e-commerce_db` ;");
  $consulta->execute();

  $consulta = $db->prepare("CREATE TABLE `e-commerce_db`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(16) NOT NULL,
    `surname` VARCHAR(45) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(32) NOT NULL,
    `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `date` DATETIME NOT NULL,
    `avatar` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`));");
  $consulta->execute();

  $consulta = $db->prepare("CREATE TABLE `e-commerce_db`.`productos` (
  `idproductos` INT NOT NULL AUTO_INCREMENT primary key,
  `productoname` VARCHAR(45) NULL,
  `precio` INT NOT NULL,
  `categoria_id` INT NOT NULL);");
  $consulta->execute();

  $consulta = $db->prepare("CREATE TABLE `e-commerce_db`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));");
  $consulta->execute();

  $consulta = $db->prepare("INSERT INTO `e-commerce_db`.`categorias` (`id`, `categoria_name`) VALUES ('1', 'indumentaria');
  INSERT INTO `e-commerce_db`.`categorias` (`id`, `categoria_name`) VALUES ('2', 'accesorios');
  INSERT INTO `e-commerce_db`.`categorias` (`id`, `categoria_name`) VALUES ('3', 'instrumentos');");
  $consulta->execute();

  $consulta = $db->prepare("
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('1', 'guitarra', '1000', '3');
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('2', 'bajo', '1000', '3');
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('3', 'remera xl', '100', '1');
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('4', 'pantalon', '100', '1');
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('5', 'vincha', '20', '2');
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('6', 'taza', '30', '2');
  INSERT INTO `e-commerce_db`.`productos` (`idproductos`, `productoname`, `precio`, `categoria_id`) VALUES ('7', 'muñequera', '20', '2');");
  $consulta->execute();

}


function conectarBD() {
  $dsn = "mysql:host=localhost;port=3306";
  $usuario = "root";
  $pass = "root";

  try {
    $db = new PDO($dsn, $usuario, $pass, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    return $db;
  } catch (Exception $e) {
    echo "Hubo un error: " . $e->getMessage();
    exit;
  }
}


$db = conectarBD();
crearDB ($db);
