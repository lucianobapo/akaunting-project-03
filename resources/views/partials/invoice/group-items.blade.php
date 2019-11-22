<div id="items" class="form-group col-md-12" style="background-color: #f9f9f9;">

    {!! Form::label('items', trans_choice($text_override['items'], 2), ['class' => 'control-label']) !!}

    <div class="hidden-sm hidden-xs">
        @stack('actions_th_start')
            <div class="form-group col-md-1">
                {{ trans('general.actions') }}
            </div>
        @stack('actions_th_end')

        @stack('name_th_start')
            <div class="form-group col-md-4">
                {{ trans('general.name') }}
            </div>
        @stack('name_th_end')

        @stack('quantity_th_start')
            <div class="form-group col-md-1">
                {{ trans($text_override['quantity']) }}
            </div>
        @stack('quantity_th_end')

        @stack('price_th_start')
            <div class="form-group col-md-2">
                {{ trans($text_override['price']) }}
            </div>
        @stack('price_th_end')

        @stack('taxes_th_start')
            <div class="form-group col-md-3">
                {{ trans_choice('general.taxes', 1) }}
            </div>
        @stack('taxes_th_end')

        @stack('total_th_start')
            <div class="form-group col-md-1">
                {{ trans('invoices.total') }}
            </div>
        @stack('total_th_end')
    </div>
    <div class="form-group col-md-12">
        
        @if(old('item'))
            @foreach(old('item') as $old_item)
                @php $item = (object) $old_item; @endphp
                @include('incomes.invoices.item2')
                @php $item_row++; @endphp
            @endforeach
        @else            
            @if (empty($invoice->items))
                @include('incomes.invoices.item2')
            @else
                @foreach($invoice->items as $item)
                    @include('incomes.invoices.item2')
                    @php $item_row++; @endphp
                @endforeach
            @endif
        @endif
        @php $item_row++; @endphp

        @stack('add_item_td_start')
            <div id="addItem" class="form-group col-md-12">
                <button type="button" id="button-add-item" data-toggle="tooltip" title="{{ trans('general.add') }}" class="btn btn-xs btn-primary" data-original-title="{{ trans('general.add') }}">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        @stack('add_item_td_end')

        @stack('sub_total_td_start')
            <div id="tr-subtotal" class="form-group col-md-12">
                <strong>{{ trans('invoices.sub_total') }}</strong>
                <span id="sub-total">@money(0,setting('general.default_currency'),true)</span>
            </div>
        @stack('sub_total_td_end')

        @stack('add_discount_td_start')
            <div id="tr-discount" class="form-group col-md-12">
                <a href="javascript:void(0)" id="discount-text" rel="popover">{{ trans('invoices.add_discount') }}</a>
                <span id="discount-total"></span>
                {!! Form::hidden('discount', null, ['id' => 'discount', 'class' => '']) !!}
                {!! Form::hidden('discount2', null, ['id' => 'discount2', 'class' => '']) !!}
            </div>
        @stack('add_discount_td_end')

        @stack('tax_total_td_start')
            <div id="tr-tax" class="form-group col-md-12">
                <strong>{{ trans_choice('general.taxes', 1) }}</strong>
                <span id="tax-total">@money(0,setting('general.default_currency'),true)</span>
            </div>
        @stack('tax_total_td_end')

        @stack('grand_total_td_start')
            <div id="tr-total" class="form-group col-md-12">
                <strong>{{ trans('invoices.total') }}</strong>
                <span id="grand-total">@money(0,setting('general.default_currency'),true)</span>
            </div>
        @stack('grand_total_td_end')
    </div>
                    
</div>