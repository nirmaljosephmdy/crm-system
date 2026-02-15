<?php

namespace App\Services\Contacts\Sources;

use App\Models\Account;
use App\Services\Contacts\Contracts\ContactSourceInterface;

class AccountSource implements ContactSourceInterface
{
    public function __construct(private Account $account) {}

    public function getContactData(): array
    {
        return [
            'firstname' => $this->account->name,
            'email' => $this->account->contact_email,
            'source_type' => Account::class,
            'source_id' => $this->account->id
        ];
    }
}
