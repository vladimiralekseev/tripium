@component('mail::message')
    @if(isset($message['contact-name']))<b>Name:</b> {{ $message['contact-name'] }} <br>@endif
    @if(isset($message['email']))<b>Email:</b> {{ $message['email'] }} <br>@endif
    @if(isset($message['business']))<b>Business:</b> {{ $message['business'] }} <br>@endif
    @if(isset($message['message']))<b>Message:</b> {{ $message['message'] }} <br>@endif
@endcomponent
