@component('mail::message')
# Introduction

The body of your message.

<img style="width:100%;" src="{{$site->name}}/storage/{{$site->logo}}">

{{$request->name}}
{{$request->email}}
{{$request->phone}}
{{$request->message}}

@component('mail::button', ['url' => '{{$request->name}}'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name', 'gavin') }}
@endcomponent
