<?php
namespace App\Events;

use App\Models\Livre;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class livreEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $livre_id;
    public $description;

    public function __construct($livre_id, $description)
    {
        $this->livre_id = $livre_id;
        $this->description = $description;
}
}
