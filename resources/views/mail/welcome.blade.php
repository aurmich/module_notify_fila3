@extends('notify::mail-layouts.base.default')

@section('content')
    <h1>{{ (string) __('notify::mail.welcome.title') }}</h1>

    <p>{{ (string) __('notify::mail.welcome.greeting', ['name' => $user->name]) }}</p>

    <p>{{ (string) __('notify::mail.welcome.description') }}</p>

    @if(isset($action_url))
        <div style="text-align: center;">
            <a href="{{ $action_url }}" class="button">
                {{ (string) __('notify::mail.welcome.action') }}
            </a>
        </div>
    @endif

    <p>{{ (string) __('notify::mail.welcome.help') }}</p>
@endsection
