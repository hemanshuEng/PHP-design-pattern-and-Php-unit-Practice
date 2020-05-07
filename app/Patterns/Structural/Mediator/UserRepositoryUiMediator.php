<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 20:36
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Mediator;

class UserRepositoryUiMediator implements Mediator
{
    private UserRepository $userRepository;
    private Ui $ui;

    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }
    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
    }
    public function getUser(string $username): string
    {
      return  $this->userRepository->getUserName($username);
    }
}
