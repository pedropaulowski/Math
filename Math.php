<?php

class Math {


    /*
    *Fibonacci Functions
    *The positions start in 0, then the Fibonacci in the 10th position is 34, 
    *but 34 is the 9th when starts with 0.
    *
    */

    public function fibonacciNumByPosition(int $position):int {
        $fibonacciNum = 0;
        $fib0 = 0;
        $fib1 = 1;

        for($i = 2; $i < $position; $i++) {
            $fibonacciNum = $fib0 + $fib1;
            $fib0 = $fib1;
            $fib1 = $fibonacciNum;
        }

        return $fibonacciNum;
    }

    public function fibonacciNumbersUntilPosition(int $position):array {
        $fibonacciArray = [];
        $fibonacciArray[0] = 0;
        $fibonacciArray[1] = 1;

        for($i = 2; $i < $position; $i++) {
            $fibonacciArray[$i] = $fibonacciArray[$i-1] + $fibonacciArray[$i-2];

        }

        return $fibonacciArray;

    }

    public function fibonacciEvenUntilPosition(int $position):array {
        $fibonacciArray = $this->fibonacciNumbersUntilPosition($position);

        $j = 0;

        for($i = 2; $i < $position; $i++) {
            if( ($fibonacciArray[$i-1] + $fibonacciArray[$i-2])%2 != 0  )
                continue;
            else {
                $fibonacciEvenArray[$j] = $fibonacciArray[$i-1] + $fibonacciArray[$i-2];
                $j++;
            }

        }

        $fibonacciEvenArray[] = 0;

        sort($fibonacciEvenArray);

        return $fibonacciEvenArray;

    }

    public function fibonacciOddUntilPosition(int $position):array {
        $fibonacciArray = $this->fibonacciNumbersUntilPosition($position);

        
        $j = 0;




        for($i = 2; $i < $position; $i++) {
            if( ($fibonacciArray[$i-1] + $fibonacciArray[$i-2])%2 == 0  )
                continue;
            else {
                $fibonacciOddArray[$j] = $fibonacciArray[$i-1] + $fibonacciArray[$i-2];
                $j++;
            }

        }

        $fibonacciOddArray[] = 1;

        sort($fibonacciOddArray);
        
        return $fibonacciOddArray;

    }


    /*
    * Prime numbers functions
    */

    public function primeNumbersUntil(int $num):array {
        $primeNumbers = [];
        $number = 0;
        for($i = 0; $i < $num; $i++) {
            $number++;
            $aux = 0;
            for($cont = 1; $cont < $number; $cont++) {
                if($number%$cont == 0)
                    $aux++;
            }
            
            if($aux == 1) 
                $primeNumbers[] = $number;
            else 
                continue;
        }

        return $primeNumbers;
    }

    public function isPrime(int $number):bool {
        if($number == 1 || $number == 0)
            return false;

        for($i = 2; $i < $number; $i++) {
            if($number % $i == 0)
                return false;
        }

        
        return true;
    }

    public function factor(int $number):array {
        $factors = [];
        
        $i = 2;
        
        do {
            if($number % $i == 0) {
                $factors[] = $i;
                $number /= $i;
            } else {
                $i++;
            }
        } while($i <= $number);

        return $factors;
    }

}

$m = new Math();

print_r($m->factor(8));


