@extends('frontend.layouts.app')
@section('title', 'Testimonial - ISA Commercial Cleaning Services')
@section('meta-seo')
    <meta name="description"  content="We provide cleaning services in Markham and surrounding areas such as Stouffville and Richmond Hill">
@endsection
@section('content')
<section class="container">
   <div class="row">
      <div class="col-lg-6">
        <h1 class="text-uppercase font-weight-bold">{{Request::route()->getName()}}</h1>
        <div class="et_pb_text_inner">
            <p>Dear Sir/Madam,</p>
                <p>We are glad that we have managed to provide you with excellent customer satisfaction. It is our mission to provide our customers with excellent communication and client satisfaction. We are honored that you have taken the time to write a testimonial for us.</p>
                <p>We look forward to cleaning your facility for the upcoming years to come.</p>
                <p><strong>Thank you for being a loyal customer!</strong></p>
            </div>
      </div>
      <div class="col-lg-6">
         <form method="post" action="send-testimonial">
         <input type="hidden" name="_token" value={{csrf_token()}}>
         <div class="form-group">
            <input type="text" id="company_name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" placeholder="Company Name *">
        </div>
            @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="form-group">
            <input type="text" id="first_name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name *">
        </div>
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="form-group">
            <input type="text" id="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name *">
        </div>
            @error('last_name')
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
