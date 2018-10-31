@extends('layouts.master')
@section('styles')
@parent
<link rel="stylesheet" href="{{ mix('css/documedia.css') }}">
@endsection
@section('layout')
    <main id="documedia">
        @yield('content')
    </main>
@endsection
@section('scripts')
@parent
<script src="{{ mix('js/documedia.js') }}"></script>
@endsection
