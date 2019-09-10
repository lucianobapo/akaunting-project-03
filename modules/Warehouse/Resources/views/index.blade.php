@extends('layouts.admin')

@section('title', trans('warehouse::general.title'))

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('warehouse.name') !!}
    </p>
@stop
