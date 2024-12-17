<?php
    function getElementAtIndex($array, $index) { 
        if (!array_key_exists($index, $array)) {
            throw new OutOfBoundsException("Invalid index. Index is out of range.");
        }
        return $array[$index];
    }
    
    $myArray = [10, 20, 30];
    try {
        $element = getElementAtIndex($myArray, 5);  //
        echo "Element at index 2: $element";
    } catch (Exception $e) { 
        echo "Error: " . $e->getMessage();
    }
    
?>