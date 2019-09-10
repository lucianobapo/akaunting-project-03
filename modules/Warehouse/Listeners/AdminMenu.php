<?php

namespace Modules\Warehouse\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminMenu
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param \Modules\Warehouse\Events\AdminMenuCreated $event
     * @return void
     */
    public function handle($event)
    {
        $user = auth()->user();

        // Settings
        if ($user->can(['read-settings-settings', 'read-settings-categories', 'read-settings-currencies', 'read-settings-taxes'])) {
            // Add child to existing item
            $item = $event->menu->whereTitle(trans_choice('general.settings', 2));

            //logger(route('warehouse.index'));
            $item->route('warehouse.index', trans('warehouse::general.title'), [], 0, ['icon' => 'fa fa-angle-double-right']);
        }

        
    }
}
