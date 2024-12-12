<?php
    $string = "The quick (brown) fox jumps over the lazy dog.";
    
    $searchString = "(brown)";
  
    $escapedSearchString = preg_quote($searchString);

    echo "Escaped search string: " . $escapedSearchString;



    
?>