@component('mail::message')
# Introduction

There is new Query {{$name}} </br></br>
Massage
{{$massage}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
