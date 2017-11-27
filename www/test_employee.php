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

	$h_employee = new hourly_employee("Laura", "Head PR", 45);

	$dur = $h_employee->getDuration();
	
	$overTime = $h_employee->calculateOvertime($dur);

	$designation = $h_employee->getDesignation();

	$baseSal = $h_employee->calculateBaseSalary();


	echo $dur;

	echo "<br/>";

	echo $overTime;

	echo "<br/>";

	echo $baseSal;









?>