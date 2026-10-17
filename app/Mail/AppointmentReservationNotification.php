<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Appointment $appointment)
    {
        $this->appointment->loadMissing('doctor');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Appointment Reservation Confirmation',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.appointment_reservation_confirmation',
            with: ['appointment' => $this->appointment],
        );
    }
}
