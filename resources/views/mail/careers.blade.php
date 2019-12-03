@component('mail::message')
<h1>{{ $first_name }} is interested in joining our team.</h1>

{{ $first_name }} {{ $last_name }} <br>
{{ $email }} <br><br>
{{ $phone }} <br><br>
{{ $position_of_interest }} <br><br>
{{ $message }} <br><br>

@endcomponent