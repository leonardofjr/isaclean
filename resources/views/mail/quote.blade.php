@component('mail::message')
<h1>{{ $first_name }} is looking for a quotation.</h1>

Company Name: {{ $company_name }}
First Name: {{ $first_name }} <br>
Last Name: {{ $last_name }}<br>
Email: {{ $email }} <br>
Phone: {{ $phone }} <br>
Street Address: {{ $street_address }} <br>
City: {{ $city }} <br>
Postal Code: {{ $postal_code }} <br>
Province: {{ $province }} <br>
Facility Type: {{ $facility_type }} <br>
Cleaning Frequency: {{ $frequency }} <br>
Message: {{ $message }} <br>

@endcomponent