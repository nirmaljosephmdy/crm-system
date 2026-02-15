<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Services\Contacts\ContactService;
use App\Services\Contacts\Sources\AccountSource;

class AccountController extends Controller
{
    public function store(StoreAccountRequest $request, ContactService $contactService)
    {
        $account = Account::create($request->validated());

        $contactService->create(new AccountSource($account));

        return response()->json($account, 201);
    }
}
