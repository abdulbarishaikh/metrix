<div>
   <!-- banner -->
    @php
      $page_title='<h1 class="f-playball display-4 new-color">About Us</h1>';
      $subtitle="";
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->

    <!-- service -->
    <section class="section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <!-- <h2 class="section-title">Orchestrating Excellence Through Multi-Dimensional Collaboration</h2> -->
    
             <div class="text-left f-roboto">
                At MatrixOne Tech Solutions, our story is defined by over 15 years of unwavering commitment to excellence, innovation, and service. We are not just another IT solutions provider; we are your trusted partner in achieving IT success.
                <br/>
                <br/>
                The <b class="text-blue-dark">GIG Economy</b> has arrived and is here to stay, transcending generations and sectors. MatrixOne stands as a pioneering force in this transformative wave, offering you the flexibility and independence that gig workers seek. Our approach ensures your IT projects are powered by experts while you maintain the agility and efficiency to innovate and adapt.

                <br><br> <b class="text-blue-dark">Our Journey:</b> 
                With an average experience of more than 15 years, our journey is marked by the dedication of our exceptional team and the collective wisdom of our extensive partner network. Over the years, we have seamlessly integrated our services, evolving into an "<b class="text-blue-dark">Aggregator of IT Organizations.</b>" This transformation has been made possible by our commitment to process orientation, ensuring that every project and service we offer adheres to the highest industry standards.

                <br><br> <b class="text-blue-dark">Our Partners:</b> 
                With an expansive network of over 300 partners, we bring to the table a wealth of expertise and experience. These partners have successfully delivered over 100 projects, spanning diverse technology stacks and business processes. When you choose MatrixOne, you gain access to a dynamic pool of resources, each committed to meeting your unique IT requirements. We are <b class="text-blue-dark">part of </b><b class="text-danger">NASSCOM</b>, underlining our commitment to adhering to global standards and best practices.

                <br><br> <b class="text-blue-dark">Our Services:</b> 
                MatrixOne offers a comprehensive portfolio of services, including product sales, project sales, bench sales, IT Service Management & Project Management Office services.  Our project sales service leverages the experience of our partners, who have a proven track record of delivering projects that drive success. Additionally, our bench sales service introduces the concept of 'Uberization' to the IT industry, providing you with a flexible and scalable workforce that meets the evolving demands of your business. Additionally our Service management & PMO services lead your organization towards a more compliant and process oriented organization.

                <br><br> <b class="text-blue-dark">Cost-Effective Solutions:</b> 
                We understand that cost-effectiveness is paramount in the IT industry. MatrixOne is dedicated to providing solutions that help you optimize your IT investments. Our extensive partner network enables us to offer competitive pricing without compromising on the highest quality standards.

                <br><br> <b class="text-blue-dark">Global Reach:</b> 
                Our commitment goes beyond geographical boundaries. MatrixOne caters to clients across the globe, meeting global standards and ensuring that your IT needs are met with precision, reliability, and innovation. Our services transcend borders, making us a true global IT solutions provider.

             </div>
             <div class="contact-btn-section">
              <x-contact-btn text="Connect With Us"/>
            </div>
          </div>
        </div>
       
      </div>
    </section>
    <!-- /service -->
    <!-- testimonial-slider -->
    <section class="section bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="text-white mb-5 new-color f-playball">Our Client Testimonials</h2>
          </div>
        </div>
        <div class="row bg-contain" data-background="{{asset('assets')}}/images/banner/brush.png">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div id="slider" class="ui-card-slider bg-contain">
              <div class="slide">
                <div class="card text-center">
                  <div class="card-body px-5 py-4">
                    {{-- <img src="{{asset('assets')}}/images/testimonial/user-1.jpg" alt="user-1" class="img-fluid rounded-circle mb-4"> --}}
                    <h4 class="text-secondary">KTree Web Engineering</h4>
                    <p>“Working with MatrixOne Tech Solutions has been a seamless and enriching experience. Matrix One dedication to delivering top-notch services and solutions has remarkably contributed to the enhancement of our projects. MatrixOne’s unwavering commitment to quality, innovation, and professionalism has been a vital asset.”</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /testimonial-slider -->

</div>


