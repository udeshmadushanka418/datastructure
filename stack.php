<?php
class stack {
    private $_size;
    private $_stack = [];

    public function __construct($size) {
        $this->_size = $size;
    }

    public function push($n) {   // FIFO
        if (count($this->_stack) >= $this->_size) {
            return false;
        }
        $this->_stack[] = $n;
        return true;
    }

    public function pop() {
        return array_pop($this->_stack);
    }

    // last element eka gnna top function eka
    public function top() {
        return end($this->_stack);
    }
}

$s1 = new stack(20);

for ($i = 1; $i <= 20; ++$i) {
    $s1->push($i);
}

//top function
echo "Top element is: " . $s1->top() . "\n";

while (($val = $s1->pop()) != null) {
    echo $val . "\n";
}
?>