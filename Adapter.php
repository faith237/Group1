<?php
// Target: The interface expected by the client
class Target {
   public function request(): string {
       return "Target: The default target's behavior.";
   }
}
// Adaptee: The existing class with an incompatible interface
class Adaptee {
   public function specificRequest(): string {
       return ".eetpadA eht fo roivaheb laicepS"; // Reversed string
   }
}
// Adapter: Translates the Adaptee's interface to the Target's interface
class Adapter extends Target {
   private $adaptee;
   public function __construct(Adaptee $adaptee) {
       $this->adaptee = $adaptee;
   }
   public function request(): string {
       // Translate the Adaptee's response
       return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
   }
}
// Client code
function clientCode(Target $target) {
   echo $target->request();
}
// Using the Target directly
$target = new Target();
clientCode($target);
echo "\n\n";
// Using the Adaptee via the Adapter
$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
clientCode($adapter);