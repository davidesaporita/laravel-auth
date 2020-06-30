@component('mail::message')
# Nuovo contenuto!

Un nuovo articolo è stato creato:

## {{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
Vai al blog
@endcomponent

Ti aspettiamo sul blog!
Cordialmente,<br>
{{ config('app.name') }}
@endcomponent