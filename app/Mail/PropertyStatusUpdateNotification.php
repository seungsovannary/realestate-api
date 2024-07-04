<?php

namespace App\Mail;

use App\Models\Property;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PropertyStatusUpdateNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $property;
    public $status;

    /**
     * Create a new message instance.
     *
     * @param Property $property
     * @param string $status
     */
    public function __construct(Property $property, $status)
    {
        $this->property = $property;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = ucfirst($this->status) . ' Status Update Notification for Property: ' . $this->property->name;

        return $this->subject($subject)
            ->view('emails.property_status_update_notification')
            ->with([
                'property' => $this->property,
                'status' => $this->status,
            ]);
    }
}
