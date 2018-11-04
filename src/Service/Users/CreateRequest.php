<?php

namespace Disconnect\Service\Users;

use Disconnect\Service\RequestInterface;

class CreateRequest implements RequestInterface 
{
    private $firstName;
    private $lastName;
    private $phoneNumer;
    private $email;

    public function __construct($data)
    {
        $this->setFirstName($data['firstName']);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    private function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

}
