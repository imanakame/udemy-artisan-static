@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About Me</h1>

    <p>My name is {{ $page->owner->name }}</p>

    <h2>リンク:</h2>

    <ul>
        <li><a href="{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="{{ $page->owner->udemy }}" target="_blank">Udemy</a></li>
        <li><a href="{{ $page->owner->StandFm }}" target="_blank">StandFm</a></li>
        <li><a href="{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
