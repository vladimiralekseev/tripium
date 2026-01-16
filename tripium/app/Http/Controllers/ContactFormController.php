<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\EmailMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(ContactFormRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $this->sendEmail($request);

        return response()->json([
            'success' => 'Thank you for your request. We will get in touch with you in one business day.',
            'data' => $validated
        ]);
    }

    private function sendEmail(ContactFormRequest $request): void
    {
        $users = array_map('trim', explode(',', config('contacts.mail_admin')));
        Mail::to($users)->send(new EmailMessage($request->all()));
    }
}
