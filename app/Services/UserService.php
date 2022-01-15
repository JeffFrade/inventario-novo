<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    /**
     * @return int
     */
    public function countAllUsers(): int
    {
        return count($this->userRepository->allNoTrashed());
    }
}
