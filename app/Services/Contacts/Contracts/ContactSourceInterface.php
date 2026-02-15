<?php

namespace App\Services\Contacts\Contracts;

interface ContactSourceInterface
{
    public function getContactData(): array;
}
