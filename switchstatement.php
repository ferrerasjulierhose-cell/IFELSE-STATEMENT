<?php
$choice = readline("Choose operation (1=Add, 2=Subtract, 3=Multiply, 4=Divide): ");

switch ($choice) {
    case 1:
        echo "You chose Addition.";
        break;
    case 2:
        echo "You chose Subtraction.";
        break;
    case 3:
        echo "You chose Multiplication.";
        break;
    case 4:
        echo "You chose Division.";
        break;
    default:
        echo "Invalid choice.";
}
?>