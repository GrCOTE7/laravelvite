<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
	use Queueable;
	use SerializesModels;

	public $contact;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct(array $contact)
	{
		echo 'oki';
		$this->contact = $contact;
	}

	// /**
	//  * Get the message envelope.
	//  *
	//  * @return \Illuminate\Mail\Mailables\Envelope
	//  */
	// public function envelope()
	// {
	// 	return new Envelope(
	// 		subject: 'emails.contact',
	// 	);
	// }

	// /**
	//  * Get the message content definition.
	//  *
	//  * @return \Illuminate\Mail\Mailables\Content
	//  */
	// public function content()
	// {
	// 	return new Content(
	// 		view: 'emails.contact',
	// 	);
	// }

	// /**
	//  * Get the attachments for the message.
	//  *
	//  * @return array
	//  */
	// public function attachments()
	// {
	// 	return [];
	// }

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this->from('monsite@chezmoi.com')
			->view('emails.contact');
	}
}
