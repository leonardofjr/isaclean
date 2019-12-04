@extends('frontend.layouts.app')
@section('title', 'Services - ISA Commercial Cleaning Services')
@section('meta-seo')
    <meta name="description"  content="We provide cleaning services in Markham and surrounding areas such as Stouffville and Richmond Hill">
@endsection
@section('content')
           <section class="container">
              <div class="row">

                 <div class="col-lg-6">
                    <h1 class="text-uppercase font-weight-bold">{{Request::route()->getName()}}</h1>
                    <h2 class="text-uppercase my-4 ">Simply Stated, we treat our customers and our employees like family.</h2>
                    <p>That’s our difference. You want timely, reliable service from someone who really cares about your satisfaction and who has pride in his work. With ISA Commercial Cleaning Services, that’s precisely what you’ll get.</p>
                    <p>Our highly trained cleaning professionals are dedicated to go above your expectations. We are devoted to cleaning your facility exactly the way you want it. ISA Commercial Cleaning Services uses the latest methods, equipment and technology to do the job.</p>
     
                  </div>

                  <div class="col-lg-6 image-wrap-7 mb-5 mb-lg-0">
                    <img class="img-fluid" src="imgs/polishing-floor.gif" alt="Professional cleaner using a floor polishing machine to polish marble floors.">
                  </div>

              </div>
            </section>
            
            <section class="container mb-4">
              <div class="row">
                  
                 <div class="col-lg-6 image-wrap-8 p-0">
                    <img  align="right" src="imgs/clean-office.jpg" alt="Office cleaned to ISA Commercial Cleaning Services standards">
                  </div>

                 <div class="col-lg-6 p-0" >
                     <div class=" bg-primary p-3" style="width 100%; height: 100%">
                        <h2>FIRST IMPRESSIONS ARE IMPORTANT</h2>
                        <p>Count on ISA to help you give the best first impressions to your vistitors and your staff. A very cleaned environment shows professionalism and authoritiy.</p>
                        <ul>
                        <li>Bonded &amp; Insured</li>
                        <li>Performance Assurance Program</li>
                        <li>Task List</li>
                        <li>Time Logs</li>
                        <li>Training</li>
                        <li>Inpsections</li>
                        <li>Commercial Cleaning</li>
                        <li>General Cleaning</li>
                        <li>Deep Cleaning</li>
                        <li>Buffing, Stripping &amp; Waxing,</li>
                        <li>Green Cleaning</li>
                        <li>HEPA Filters</li>
                        </ul>
                      </div>
                  </div>


              </div>
            </section>
            
            <section class="bg-primary">
              <div class="container">
                <div class="row py-3 py-lg-5 bg-primary">
                        <div class="col-lg-6">
                        <h2>PERFORMANCE ASSURANCE PROGRAM ENSURES YOU GET THE BEST CLEANING SERVICE</h2>
                        <p>The ISA Performance Assurance Program is designed to establish a continuous method of evaluating and monitoring janitorial services. The program is tailored to suit various types of facilities.</p>
                        <p>ISA can assure you that your premises will benefit from that high level of quality control available at all times by combining highly trained staff with state-of-the-art software-driven technologies that allow stakeholders to communicate any concerns.</p>

                    </div>
                    <div class="col-lg-6 image-wrap-9">
                         <img  width="100%" src="/imgs/office-clean.jpg" alt="A well cleaned lobby.">
                    </div>
                </div>
              </div>
            </section>

@endsection