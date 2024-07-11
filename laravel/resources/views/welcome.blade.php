@extends('shopify-app::layouts.default')


@section('content')
    <p>
        Hello World Shopify
    </p>
@endsection

@section('scripts')
    @parent
    @vite('resources/js/app.js')
@endsection
