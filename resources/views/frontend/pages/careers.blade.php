@extends('frontend.layouts.app')
@section('title', 'Careers - ISA Commercial Cleaning Services')
@section('meta-seo')
    <meta name="description"  content="We provide cleaning services in Markham and surrounding areas such as Stouffville and Richmond Hill">
@endsection
@section('content')
<section class="container">
   <div class="row">
      <div class="col-lg-12">
        <h1 class="text-uppercase font-weight-bold">{{Request::route()->getName()}}</h1>
        <p>Please fill out all the informatio below if you’re looking for work. We will contact you if we feel you got the requirements for the job.</p>
         <form method="post" action="send-career-form">
         <input type="hidden" name="_token" value={{csrf_token()}}>
         <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" id="first_name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name *">
                    @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group col-md-6">
                <input type="text" id="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name *">
                    @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror          
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email *">
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                        <input type="tel" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"  placeholder="Phone" pattern="[0-9\s-]*" title="Only numbers allowed.">
                    @error('phone')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
         </div>
      
        <div class="form-group">
                <select id="position_of_interest" class="form-control @error('position_of_interest') is-invalid @enderror" name="position_of_interest">
                    <option value="">Position of Interest</option>
                    <option value="Heavy Duty Cleaner">Heavy Duty Cleaner</option>
                    <option value="Light Duty Cleaner">Light Duty Cleaner</option>
                    <option value="Carpet Cleaner">Carpet Cleaner</option>
                    <option value="Window Cleaner">Window Cleaner</option>
                </select>
        </div>
            @error('position_of_interest')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="form-group">
             <textarea rows="10" name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
        </div>
            @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div>
</section>
@endsection