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
            <h1>{{ $first_name }} is interested in joining our team.</h1>

            First Name: {{ $first_name }} 
            Last Name: {{ $last_name }}
            Email: {{ $email }}
            Phone: {{ $phone }}
            Position of Interest: {{ $position_of_interest }}
            Message; {{ $message }}
        @endcomponent
        
    @endslot

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; 2019 ISA Commercial Cleaning Services
        @endcomponent    
    @endslot
@endcomponent