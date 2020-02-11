@extends('layouts.admin')

@section('title', trans_choice('erpnet-profiting-milk::general.title', 2))

@section('new_button')
    @permission('create-productions')
    	<span class="new-button">
    		<a href="{{ route('production.create') }}" class="btn btn-success btn-sm">
    			<span class="fa fa-plus"></span> &nbsp;{{ trans('general.add_new') }}
    		</a>
    	</span>
    	<span>
    		<a href="{{ route('production.import') }}" class="btn btn-default btn-sm">
    			<span class="fa fa-download"></span> &nbsp;{{ trans('import.import') }}
    		</a>
    	</span>
    @endpermission
    <span>
    	<a href="{{ route('production.export', request()->input()) }}" class="btn btn-default btn-sm">
    		<span class="fa fa-upload"></span> &nbsp;{{ trans('general.export') }}
    	</a>
    </span>
@endsection

@section('content')
<!-- Default box -->
<div class="box box-success">
    <div class="box-header with-border">
        {!! Form::open(['route' => 'production.index', 'role' => 'form', 'method' => 'GET']) !!}
        <div id="items" class="pull-left box-filter">
            <span class="title-filter hidden-xs">{{ trans('general.search') }}:</span>
            {!! Form::text('search', request('search'), ['class' => 'form-control input-filter input-sm', 'placeholder' => trans('general.search_placeholder')]) !!}
            {!! Form::dateRange('date', trans('general.date'), 'calendar', []) !!}
            
			{!! Form::button('<span class="fa fa-filter"></span> &nbsp;' . trans('general.filter'), ['type' => 'submit', 'class' => 'btn btn-sm btn-default btn-filter']) !!}
        </div>
        <div class="pull-right">
            <span class="title-filter hidden-xs">{{ trans('general.show') }}:</span>
            {!! Form::select('limit', $limits, request('limit', setting('general.list_limit', '25')), ['class' => 'form-control input-filter input-sm', 'onchange' => 'this.form.submit()']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    <div class="box-body">
        <div class="table table-responsive">
            <table class="table table-striped table-hover" id="tbl-payments">
                <thead>
                    <tr>
                        <th class="col-md-2">@sortablelink('posted_at', trans('erpnet-profiting-milk::table.posted_at'))</th>
                        <th class="col-md-2 text-right amount-space">@sortablelink('quantity', trans('erpnet-profiting-milk::table.quantity'))</th>
                        <th class="col-md-3 hidden-xs">@sortablelink('vendor.name', trans_choice('general.vendors', 1))</th>
                        <th class="col-md-2 hidden-xs">@sortablelink('category.name', trans_choice('general.categories', 1))</th>
                        <th class="col-md-1 text-center">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
              		
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        @include('partials.admin.pagination', [
        	'items' => $productions, 
        	'type' => 'productions',
        	'trans' => 'erpnet-profiting-milk::general.title'
        ])
    </div>
    <!-- /.box-footer -->
</div>
<!-- /.box -->
@endsection

@push('js')
<script src="{{ asset('vendor/almasaeed2010/adminlte/plugins/daterangepicker/moment.js') }}"></script>
<script src="{{ asset('vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/almasaeed2010/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
@if (language()->getShortCode() != 'en')
<script src="{{ asset('vendor/almasaeed2010/adminlte/plugins/datepicker/locales/bootstrap-datepicker.' . language()->getShortCode() . '.js') }}"></script>
@endif
@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/almasaeed2010/adminlte/plugins/datepicker/datepicker3.css') }}">
@endpush

@push('scripts')

@endpush
