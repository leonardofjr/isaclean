@extends('frontend.layouts.app')
@section('title', 'Quote - ISA Commercial Cleaning Services')
@section('meta-seo')
    <meta name="description"  content="We provide cleaning services in Markham and surrounding areas such as Stouffville and Richmond Hill">
@endsection
@section('content')
<section class="container">
   <div class="row">
      <div class="col-lg-6">
         <h2 class="text-uppercase">Request a quote</h2>
         <div>
            <p>We provide free commercial cleaning estimates.&nbsp;Simply complete our quick form, and a&nbsp;member of our team will be in touch with you to discuss your needs and set up a time to meet and see your facility.</p>
            <h3>Customer Satisfaction is our Mission.&nbsp;</h3>
            <p>We’re proud to deliver excellent cleaning services each and every day. Your satisfaction is extremely important to us.</p>
            <p>Every hour of every day, we strive to:</p>
            <ul>
               <li>Provide our customers with a level of high-quality cleaning services.</li>
               <li>Commit to every cleaning project with 100 percent dedication.</li>
               <li>Communicate with our customers</li>
            </ul>
         </div>
      </div>
      <div class="col-lg-6">
         <form method="post" action="send-quote">
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
            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email *">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"  placeholder="Phone" pattern="[0-9\s-]*" title="Only numbers allowed.">
        </div>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <input type="text" id="street_address" class="form-control @error('street_address') is-invalid @enderror" name="street_address" placeholder="Street Address">
        </div>
        @error('street_address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <input type="text" id="city" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City *">
        </div>
        @error('city')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <input type="text" id="postal_code" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" placeholder="Postal Code *">
        </div>
        @error('postal_code')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <select id="province" class="form-control @error('province') is-invalid @enderror" name="province">
               <option value="">Select Province *</option>
               <option value="Ontario">Ontario</option>
            </select>
        </div>
        @error('province')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <select id="facility_type" class="form-control @error('facility_type') is-invalid @enderror" name="facility_type">
               <option value="">Facility Type *</option>
               <option value="Airline">Airline</option>
               <option value="Apartment">Apartment</option>
               <option value="Arena">Arena</option>
               <option value="Auditorium">Auditorium</option>
               <option value="Automotive Dealer">Automotive Dealer</option>
               <option value="Bank/Financial">Bank/Financial</option>
               <option value="Bar/Tavern">Bar/Tavern</option>
               <option value="Bowling Alley">Bowling Alley</option>
               <option value="Call Centre">Call Centre</option>
               <option value="Casino">Casino</option>
               <option value="Church/Religious">Church/Religious</option>
               <option value="Day Care Facility">Day Care Facility</option>
               <option value="Dentist">Dentist</option>
               <option value="Distribution Plant">Distribution Plant</option>
               <option value="Fire Station">Fire Station</option>
               <option value="Funeral Home">Funeral Home</option>
               <option value="Gas Station">Gas Station</option>
               <option value="Golf Course">Golf Course</option>
               <option value="Govt Office">Govt Office</option>
               <option value="Govt Warehouse">Govt Warehouse</option>
               <option value="Grocery Store">Grocery Store</option>
               <option value="Health Club/Fitness">Health Club/Fitness</option>
               <option value="Hospital">Hospital</option>
               <option value="Hotel/Motel">Hotel/Motel</option>
               <option value="Industrial">Industrial</option>
               <option value="Library">Library</option>
               <option value="Mall">Mall</option>
               <option value="Marina">Marina</option>
               <option value="Medical">Medical</option>
               <option value="Military">Military</option>
               <option value="Museum">Museum</option>
               <option value="Newspaper">Newspaper</option>
               <option value="Nursing Home">Nursing Home</option>
               <option value="Office Building">Office Building</option>
               <option value="Office">Office</option>
               <option value="Other">Other</option>
               <option value="Parks">Parks</option>
               <option value="Pharmacy">Pharmacy</option>
               <option value="Police Station">Police Station</option>
               <option value="Post Office">Post Office</option>
               <option value="Property Management">Property Management</option>
               <option value="Resort">Resort</option>
               <option value="Restaurant">Restaurant</option>
               <option value="Retail">Retail</option>
               <option value="Retirement Center">Retirement Center</option>
               <option value="School">School</option>
               <option value="Spa">Spa</option>
               <option value="Sports Stadium">Sports Stadium</option>
               <option value="Theater/Arts">Theater/Arts</option>
            </select>
        </div>
        @error('facility_type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <select id="frequency" class="form-control @error('frequency') is-invalid @enderror" name="frequency">
               <option value="">Cleaning Frequency</option>
               <option value="One Time Specialty Services">One Time Specialty Services</option>
               <option value="1 day per week">1 day per week</option>
               <option value="2 days per week">2 days per week</option>
               <option value="3-4 days per week">3-4 days per week</option>
               <option value="5-7 days per week">5-7 days per week</option>
               <option value="Bi-Weekly">Bi-Weekly</option>
            </select>
        </div>
         @error('frequency')
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