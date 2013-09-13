<?php

require 'bootstrap.php';
require 'Documents/domain.php';

$employee = new Documents\Employee();
$employee->name = 'John Lydon';

$dm->persist($employee);
$dm->flush();
