<?php
include_once("Canal.php");
include_once("Cliente.php");
include_once("Contrato.php");
include_once("ContratoEmpresa.php");
include_once("ContratoWeb.php");
include_once("EmpresaCable.php");
include_once("Plan.php");

$objTorneo = new Torneo([],[]);

$objCanal1 = new Canal ("deportivo",20000, true,30);
$objCanal2 = new Canal ("informativo",30000, true,45);
$objCanal3 = new Canal ("informativo",25000, false,20);
$colCanales = [$objCanal1,$objCanal2,$objCanal3];

$objPlan1 = new Plan (111,$colCanales, 500000,20);
$objPlan1 = new Plan (333,$colCanales, 400000,35);