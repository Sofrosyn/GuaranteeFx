<?php

namespace App\Http\Controllers\Web\Customer;

use App\Http\Controllers\Controller;
use App\Http\Middleware\ValidateConsultationRegistrationStatus;
use App\Http\Requests\Customer\SubmitRegistrationRequest;
use App\Mail\Customer\PostRegistrationMail;
use App\Models\Country;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware(ValidateConsultationRegistrationStatus::class);
    }

    public function showRegistrationForm()
    {
        return view('customer.consultation.register', [
            'countries' => Country::query()->orderBy('name')->get(),
        ]);
    }

    public function submit(SubmitRegistrationRequest $request)
    {
        $data = $request->validated();

        $this->ensureEmailNotAlreadyRegistered($data);

        return DB::transaction(function () use ($data) {
            $registration = Registration::query()->create($data);

            return $this->redirectToPayment($registration);
        });
    }

    private function ensureEmailNotAlreadyRegistered(array $data): void
    {
        if (!$existing_registration = Registration::query()->where('email', $data['email'])->first()) {
            return;
        }

        if (!$existing_registration->is_subscribed) {
            $this->redirectToPayment($existing_registration)->throwResponse();
        }

        alert()->info(
            'Already subscribed',
            'You have already made payment. Please check your mailbox for a mail that contains further instructions.'
        );

        redirect()->route('welcome')->throwResponse();
    }

    private function redirectToPayment(Registration $registration)
    {
        Mail::send(new PostRegistrationMail($registration));

        return redirect()->to($registration->getSignedPaymentUrl());
    }
}
