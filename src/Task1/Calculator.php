<?php declare(strict_types = 1);

namespace BinaryStudioAcademy\Task1;

class Calculator
{
    /**
     * Addition of two numbers
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
     * Subtraction of two numbers
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
     * Multiplication of two numbers
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
     * Division of two numbers
     *
     * @param int $a The first number
     * @param int $b The second number
     *
     * @return int The result of division
     * @throws DivisionByZeroError
     */
    public function divide(int $a, int $b): int
    {
        if ($b === 0) {
            throw new \DivisionByZeroError('Division by zero error in Calculator!');
        }
        return $a / $b;
    }

    /**
     * Raising 2 to the exponent power
     *
     * @param int $exp The exponent
     *
     * @return The result of raising
     */
    public function pow2(int $exp): int
    {
        return 2 ** $exp;
    }
}
