<?php

namespace Domain\Customers\DataTransferObjects;

class CustomerData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $birth_date,
    )
    {
        //
    }
}
