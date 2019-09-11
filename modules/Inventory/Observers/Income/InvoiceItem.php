<?php

namespace Modules\Inventory\Observers\Income;

use App\Models\Income\InvoiceItem as InvoiceItemModel;
use Modules\Inventory\Models\History as Model;
use Auth;

class InvoiceItem
{

    /**
     * Listen to the created event.
     *
     * @param  Model $item
     *
     * @return void
     */
    public function created(InvoiceItemModel $invoice_item)
    {
        $user = Auth::user();

        $item = $invoice_item->item;

        if (empty($item)) {
            return false;
        }

        Model::where('type_type', get_class($invoice_item))
            ->where('type_id', $invoice_item->id)
            ->delete();

        $warehouse_id = setting('inventory.default_warehouse');

        Model::create([
            'company_id' => $invoice_item->company_id,
            'user_id' => $user->id,
            'item_id' => $item->id,
            'type_id' => $invoice_item->id,
            'type_type' => get_class($invoice_item),
            'warehouse_id' => $warehouse_id,
            'quantity' => $invoice_item->quantity,
        ]);
    }

    /**
     * Listen to the deleted event.
     *
     * @param  Model $item
     *
     * @return void
     */
    public function deleted(InvoiceItemModel $invoice_item)
    {
        Model::where('type_type', get_class($invoice_item))
            ->where('type_id', $invoice_item->id)
            ->delete();
    }
}
