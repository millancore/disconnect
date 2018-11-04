<?php

namespace Disconnect\Service\Users;

use Disconnect\Service\RequestInterface;

class CreateService
{

    private $userRepository;

    public function __construct($userRepository)
    {
        $this->userRepository = $userRepository;
    }
    

    public function execute(RequestInterface $request)
    {
        echo $request->getFirstName();
    }
}
