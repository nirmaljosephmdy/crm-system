<?php

namespace App\Services\Contacts;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Services\Contacts\Contracts\ContactSourceInterface;

class ContactService
{
    public function create(ContactSourceInterface $source): Contact
    {
        return DB::transaction(function () use ($source) {
            return Contact::create(
                $source->getContactData()
            );
        });
    }
}
