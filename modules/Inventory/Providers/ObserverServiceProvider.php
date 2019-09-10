<?php

namespace Modules\Inventory\Providers;

use App\Models\Common\Item;
use App\Models\Income\InvoiceItem;
use App\Models\Expense\BillItem;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Items
        Item::observe('Modules\Inventory\Observers\Common\Item');

        // Invoices
        InvoiceItem::observe('Modules\Inventory\Observers\Income\InvoiceItem');

        // Bills
        BillItem::observe('Modules\Inventory\Observers\Expense\BillItem');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
