@component('mail::message')
#Hi Mr.Labs

- {{$name}} sent you an email

- {{$email}}

He want to talk about {{$subject}}

@component('mail::panel')
{{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent