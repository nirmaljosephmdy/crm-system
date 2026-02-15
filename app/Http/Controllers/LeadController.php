<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadRequest;
use App\Services\Contacts\ContactService;
use App\Services\Contacts\Sources\LeadSource;

class LeadController extends Controller
{
    public function store(StoreLeadRequest $request, ContactService $contactService)
    {
        $lead = Lead::create($request->validated());

        $contactService->create(new LeadSource($lead));

        return response()->json($lead, 201);
    }
}
