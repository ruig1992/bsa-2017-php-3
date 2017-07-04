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
}
