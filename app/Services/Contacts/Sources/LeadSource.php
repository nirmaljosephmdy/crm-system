<?php

namespace App\Services\Contacts\Sources;

use App\Models\Lead;
use App\Services\Contacts\Contracts\ContactSourceInterface;

class LeadSource implements ContactSourceInterface
{
    public function __construct(private Lead $lead) {}

    public function getContactData(): array
    {
        return [
            'firstname' => $this->lead->firstname,
            'email' => $this->lead->email,
            'source_type' => Lead::class,
            'source_id' => $this->lead->id
        ];
    }
}
