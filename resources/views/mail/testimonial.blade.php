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
            <h1>{{ $company_name }} wrote us a testimonial.</h1>
            First Name: {{ $first_name }}
            Last Name: {{ $last_name }}
            Company Name: {{ $company_name }}
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