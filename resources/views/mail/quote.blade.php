@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src={{asset('imgs/logo.png')}} alt="ISA Commercial Cleaning Services logo.">
        @endcomponent    
    @endslot

    {{-- Body --}}
    @slot('subcopy')
        @component('mail::subcopy')
            <h1>{{ $first_name }} is looking for a quotation.</h1>

            Company Name: {{ $company_name }}
            First Name: {{ $first_name }} 
            Last Name: {{ $last_name }}
            Email: {{ $email }} 
            Phone: {{ $phone }} 
            Street Address: {{ $street_address }} 
            City: {{ $city }} 
            Postal Code: {{ $postal_code }} 
            Province: {{ $province }} 
            Facility Type: {{ $facility_type }} 
            Cleaning Frequency: {{ $frequency }} 
            Message: {{ $message }} 
        @endcomponent
        
    @endslot

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; 2019 ISA Commercial Cleaning Services
        @endcomponent    
    @endslot
@endcomponent