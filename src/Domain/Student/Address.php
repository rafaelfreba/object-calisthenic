<?php

namespace Alura\Calisthenics\Domain\Student;

class Address
{
    public function __construct(
        private string $street,
        private string $number,
        private string $province,
        private string $city,
        private string $state,
        private string $country
    )
    {}

    public function __toString(): string
    {
        return "{$this->street}, {$this->number}, {$this->province}, {$this->city}, {$this->state}, {$this->country}";
    }


}