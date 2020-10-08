<?php
function areCorrectBracers($string)
{
    $myStack = new SplStack();
    $arrayOfString = str_split($string, 1);
    for ($i = 0; $i <= count($arrayOfString); $i++) {
        if ($arrayOfString[$i] == "("
            || $arrayOfString[$i]  == "["
            || $arrayOfString[$i]  == "{")
        {
            $myStack->push($arrayOfString[$i]);
        }

        else if($arrayOfString[$i]  == ")" || $arrayOfString[$i]  == "]" || $arrayOfString[$i]  == "}") {
            if (empty($myStack) == true) {
                echo 'Баланс скобок нарушен';
                return false;
            }
            else {
                if ($arrayOfString[$i]  == ")" || $arrayOfString[$i]  == "]" || $arrayOfString[$i]  == "}") {
                    if($myStack->top() == "(" && $arrayOfString[$i]  == ")"
                        || $myStack->top() == "[" && $arrayOfString[$i]  == "]"
                        || $myStack->top() == "{" && $arrayOfString[$i]  == "}")
                    {
                        echo 'Баланс скобок не нарушен';
                        return true;
                    }
                    else {
                        echo 'Баланс скобок нарушен';
                        return false;
                    }
                }
            }
        }
    }
}

areCorrectBracers('"(")');