
<?php 

namespace exo;

class AdvancedString {

private $internalString;

 public function __construct($str)
 
 {    
$this->internalString = $str;
 }

 public function bold(){

return "<b>". $this->internalString."</b>.<br>"
}

 public function italic(){

    return "<em>". $this->internalString."</em>.<br>"
}

public function underline(){

    return "<u>".$this->internalString."</u>.<br>"
}

public function uppercase(){

    return strtoupper($this->internalString);
}

public function __toString()
    {
        return "toto";
    }

}

?>