 <?php
 class Calculator
 {
    public function add($a, $b)
     {
         return $a + $b;
    }
 }
 
 
 $calc = new Calculator();
 
echo $calc->add(5,7);
 
?>
