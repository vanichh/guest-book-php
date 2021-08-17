<?php
class Car
{
  public $color;
  public $fuer;
  public function go($elem)
  {
    echo $elem;
  }
}
$myCar = new Car;
$myCar->color = 'red';
//$myCar->go('hi');
//echo $myCar->$color;
class Employee
{
  public $name;
  public $age;
  public $salary;
  public function getName()
  {
    return $this->name;
  }
  private function getAge($age)
  {
    return $age > 18 and $age < 60;
  }
  public function checkAge()
  {
    if ($this->age > 18) return true;
    return false;
  }
  public function getSalary()
  {
    return $this->salary;
  }
  public function setAge($age)
  {
    if ($this->getAge($age)) $this->age+= $age;
  }
}
$ivan = new Employee();
$ivan->name = 'Иван';
$ivan->age = 25;
$ivan->salary = 1000;
$vasay = new Employee();
$vasay->name = 'Вася';
$vasay->age = 16;
$vasay->salary = 2000;
$vasay->setAge(40);
echo $vasay->age;
