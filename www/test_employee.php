<?php

	include "sales_percentage.php";
	include "employee.php";
	include "salaried_employee.php";
	include "hourly_employee.php";
	include "commision_employee.php";
	include "salariedcomm_employee.php";




	$sal_employee = new Salaried_Employee("Bosun","MD",400,"weekly");


	$person = $sal_employee->getName();
	$person2 = $sal_employee->getDesignation();

	echo $person;

	echo "<br/>";

	echo $person2;

	echo "<br/>";

	$h_employee = new hourly_employee("Laura", "Head PR", 5000, 39);

	$pay = $h_employee->getAmountPaid();

	$designation = $h_employee->getDesignation();

	$hour = $h_employee->getDuration();


	$result = $h_employee->calculateOvertime($hour, $pay);

	$newSal = $pay + $result;

	echo $result;

	echo "<br/>";

	echo $newSal;









?>