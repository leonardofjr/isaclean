@component('mail::message')
<h1>{{ $first_name }} wrote us a testimonial.</h1>
{{ $message }} <br><br>
{{ $first_name }} {{ $last_name }} <br>
{{ $company_name }}

@endcomponent