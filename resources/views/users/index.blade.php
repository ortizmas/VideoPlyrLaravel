@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
    <style>
        
    </style>
@endsection

@section('content')
    <app-component></app-component>
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.5.6/plyr.js"></script>

    <script>
        const player = new Plyr('#player', {
            title: 'Example Title',
        });
    </script>
@endsection
