<?php
function areCorrectBracers($string)
{
    $myStack = new SplStack();
    $arrayOfString = str_split($string, 1);
    $quotationCount = 0;
    for ($i = 0; $i <= count($arrayOfString)-1; $i++) {
        if ($arrayOfString[$i] == '"') {
            if ($quotationCount == 0)
            $quotationCount++;
            else
                $quotationCount--;
        }
        if ($quotationCount == 1)
            continue;
        else if ($arrayOfString[$i] == "("
            || $arrayOfString[$i]  == "["
            || $arrayOfString[$i]  == "{")
        {
            $myStack->push($arrayOfString[$i]);
        }

        else if($arrayOfString[$i]  == ")" || $arrayOfString[$i]  == "]" || $arrayOfString[$i]  == "}") {
            if ($myStack->count() == 0) {
                echo 'Баланс скобок нарушен.';
                return false;
            }
            else {
                if ($arrayOfString[$i]  == ")" || $arrayOfString[$i]  == "]" || $arrayOfString[$i]  == "}") {
                    if($myStack->top() == "(" && $arrayOfString[$i]  == ")"
                        || $myStack->top() == "[" && $arrayOfString[$i]  == "]"
                        || $myStack->top() == "{" && $arrayOfString[$i]  == "}")
                    {
                        if ($i == count($arrayOfString)-1) {
                            echo 'Баланс скобок не нарушен.';
                            return true;
                        }
                        else {
                            $myStack->pop();
                        }

                    }
                    else {
                        echo 'Баланс скобок нарушен.';
                        return false;
                    }
            }
        }
        }
    }
    if ($myStack->count() == 0) {
        echo 'Баланс скобок не нарушен.';
        return true;
    }
}

areCorrectBracers('"(")');