<?php

namespace App\Listeners;

use App\Events\livreEvent;
use App\Models\LivreHistory;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LivreListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\livreEvent  $event
     * @return void
     */
    public function handle(livreEvent $event)
    {
        $li=new LivreHistory();
        $li->livre_id = $event->livre_id;
         $li->description = $event->description;
         $li->save();
    }
}
