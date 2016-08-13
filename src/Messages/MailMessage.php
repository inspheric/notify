<?php

namespace Inspheric\Notify\Messages;

use Illuminate\Notifications\Messages\MailMessage as BaseMailMessage;

class MailMessage extends BaseMailMessage
{
    /**
     * The view for the message.
     *
     * @var string
     */
    public $view = 'notify::messages.email';

}
