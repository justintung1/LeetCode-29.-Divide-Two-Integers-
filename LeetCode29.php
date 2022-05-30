<?php
    class Solution {

        /**
         * @param Integer $dividend
         * @param Integer $divisor
         * @return Integer
         */
        function divide($dividend, $divisor) {
            $ans=$dividend/$divisor;
            if($ans<=2147483647&&$ans>=-2147483648){
                if($ans>0){
                    return floor($ans);
                }
                else if($ans<0){
                    if($ans>-1){
                        return 0;
                    }
                    else{
                        return ceil($ans);
                    }
                }
                else if($ans==0){
                    return 0;
                }
            }
            else if($ans>2147483647){
                return 2147483647;
            }
            else{
                return -2147483648;
            }
        }
    }
?>