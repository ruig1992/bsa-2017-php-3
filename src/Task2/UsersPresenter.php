<?php

namespace BinaryStudioAcademy\Task2;

class UsersPresenter
{
    /**
     * Repository instance
     * @var Repository
     */
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Gets the sorted list of users from Repository
     * by last name in ascending order.
     *
     * @return array The sorted data
     */
    public function getOrderedByLastName(): array
    {
        $users = $this->repository->getAll();

        usort($users, function($a, $b) {
            return $a['last_name'] <=> $b['last_name'];
        });

        return $users;
    }
}
