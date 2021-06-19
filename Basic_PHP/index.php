
<?php 
  $x = 5; // global scope
  //! PHP Variables Scope
// 1.local
// 2.global
// 3.static
function Test(){
  global $x;
  $y = 5; // local scope
  print("local Scope".$y."<br/>");
  print("global Scope".$x."<br/>");

}
Test();
function tryStatic(){
  static $age = 1;
  echo $age;
  echo "<br/>";
  $age = $age + 2;
}
tryStatic();
tryStatic();
tryStatic();
?>
