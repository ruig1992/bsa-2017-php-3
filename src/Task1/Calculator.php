<?php

namespace BinaryStudioAcademy\Task1;

class Calculator
{
    /**
     * Addition of two integer numbers
     *
     * @param int $a The first number
     * @param int $b The second number
     *
     * @return int The result of addition
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Subtraction of two integer numbers
     *
     * @param int $a The first number
     * @param int $b The second number
     *
     * @return int The result of subtraction
     */
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * Multiplication of two integer numbers
     *
     * @param int $a The first number
     * @param int $b The second number
     *
     * @return int The result of multiplication
     */
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * Division of two integer numbers
     *
     * @param int $a The first number
     * @param int $b The second number
     *
     * @return int The result of division
     */
    public function divide(int $a, int $b): int
    {
        return intdiv($a, $b);
    }

    /**
     * Raising 2 to the integer exponent power
     *
     * @param int $exp The exponent
     *
     * @return int The result of raising
     */
    public function pow2(int $exp): int
    {
        return 2 ** $exp; // or pow(2, $exp), ** operator - in PHP 5.6 onwards
    }
}
