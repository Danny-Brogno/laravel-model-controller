<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;

class Person {

  public $firstname;
  public $lastname;
  public $username;
  public $password;


  public function __construct($firstname, $lastname, $username, $password ) {

    $this -> setFirstName($firstname);
    $this -> lastname = $lastname;
    $this -> username = $username;
    $this -> password = $password;

  }

  public function setFirstName($nome) {

    $this -> firstname = $nome;

  }

  public function getFirstName() {

    return $this -> firstname;

  }

  public function getFullName() {

    return "BOSS Fullname: " . $this -> firstname . " " . $this -> lastname;

  }

  public function getEmpFullName() {

    return "EMPLOYEE Fullname: " . $this -> firstname . " " . $this -> lastname;

  }

  public function getString() {

    return "Person: \n" . "Firstname: " . $this -> $firstname . "\n" . "Lastname: " . $this -> $lastname . "\n" . "Username: " . $this -> $username . "\n" . "Password: " . $this -> $password . "\n";

  }

} // END OF CLASS PERSON

// -----------------------------------------------------------------------------

class Employee extends Person {

  public $wage;
  public $hour;


  public function __construct($firstname, $lastname, $username, $password, $wage, $hour) {

    parent:: __construct($firstname, $lastname, $username, $password);

    $this -> wage = $wage;
    $this -> hour = $hour;

  }

  public function getString() {

    return parent::getString() . "\n-------------\n" .  "Employee:\n " . "Wage: " . $this -> $wage . "\n" . "Bonus: " . $this -> $bonus . "\n";

  }

  public function getEmpWege() {

    return "EMPLOYEE Wage: " . $this -> wage;

  }

} // END OF class Employee extends Person


// -----------------------------------------------------------------------------

class TestController extends Controller {
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    $employee = new Employee("Ragionier", "Fantozzi", "comeUmanoLei", "rosaria", "1000", "0,001");
    $employeeSalaryAndBonus = $employee -> getEmpWege();
    $employeeFullname = $employee -> getEmpFullName();
    // EMPLOYEE CHIAMA GETFULLNAME


    $boss = new Boss("Mario", "Rossi", "ciaoLol", "abd123", "50000", "1");
    $salaryAndBonus = $boss -> getWegeAndBonus();
    $bossName = $boss -> getFullName();
    // BOSS CHIAMA GETFULLNAME
    
    dd($bossName, $salaryAndBonus, $employeeFullname, $employeeSalaryAndBonus);
    return view('pages.home', compact("boss") );

  } // END OF HOME FUNCTION

}

// -----------------------------------------------------------------------------

class Boss extends Person {

  public $wage;
  public $bonus;

  public function __construct($firstname, $lastname, $username, $password, $wage, $bonus) {

    parent::__construct($firstname, $lastname, $username, $password);
    $this -> wage = $wage;
    $this -> bonus = $bonus;

  }

  public function getString() {

    return parent::getString() . "\n-----------\n" . "Boss:\n" . "Wage: " . $this -> wage . "\n" . "Bonus: " . $this -> bonus . "\n";

  }

  public function getWegeAndBonus() {

    return "BOSS Wage: " . $this -> wage . " " . "Bonus: " . $this -> bonus;

  }

} // END OF class Boss extends Person
