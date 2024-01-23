<div>
   <!-- banner -->
    @php
      $page_title='<h1 class="f-playball display-4 new-color">Managed Project Services</h1>';
      $subtitle='Unlock your Tech Potential with MatrixOne: 300+ Partners ';
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->

    <!-- service -->
    <section class="section pt-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h3 class="section-title text-blue-dark">Tackle IT Complexity via the Partner-Powered Project Sales Platform</h3>
            <p class="lead text-left f-roboto">
             Engaging the services of a System Integrator (SI) in India presents a financially astute and streamlined approach for enterprises seeking to harness technology and specialized knowledge. It's imperative to underscore that the meticulous selection of the right System Integrator represents a pivotal choice that wields substantial influence over the triumphant execution of your project. <br><br>
              MatrixOne Tech Solutions, serving as <b class="text-blue-dark">a Conductor of System Integrators,</b> possesses access to a consortium of esteemed OEM partners, each equipped with requisite certifications and endowed with extensive proficiencies and know-how to ensure the prompt, high-quality delivery of diverse projects. <br><br>
              Furthermore, MatrixOne, situated at the project's grassroots level, also extends its <b class="text-blue-dark">IT Service Management (ITSM)</b>  as well as <b class="text-blue-dark">IT Project Management Office (PMO)</b> offerings, thereby safeguarding the project's well-being and upholding a commitment to the punctual delivery of top-tier outputs.

            </p>
            <div class="contact-btn-section">
              <x-contact-btn text="Connect With Us"/>
            </div>
            {{-- @include('livewire.contact_btn') --}}
          </div>
        </div>
       
      </div>
    </section>
    <!-- /service -->
    <section class="section pt-0"></section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h3 class="section-title text-blue-dark">Managed Project Services - Advantages</h3>
            <p class="lead text-left f-roboto">
              Through a robust network of System Integrator Partners across diverse technologies and scenarios, our organization has consistently delivered exceptional Managed Project Services for our clients. Spanning various industries and technological landscapes, our collaborative approach with these partners has resulted in numerous successful project deliveries. Whether it's implementing complex IT infrastructures, deploying innovative solutions, or navigating diverse scenarios, our network of partners has been instrumental.
            </p>
            <img src="{{asset('assets')}}/images/pagesimg/s3.jpeg" style="width: 450px;height: 450px;" alt="feature-image" class="img-fluid">  
            <p class="lead text-left f-roboto mt-3">This collaborative ecosystem ensures that each project receives tailored expertise and attention, allowing us to consistently exceed our clients' expectations.
              Learn More from our <a href="{{url('resources/success_stories')}}"><b class="f-playball new-color h4">Success Stories</b></a> section for further details.</p>
            {{-- @include('livewire.contact_btn') --}}
          </div>
        </div>
       
      </div>
    </section>

    <!-- feature -->
    <section class="section bg-secondary position-relative mb-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <h3 class="text-white text-center">Managed Project Services - Methodology</h3>
            <div class="row">
              <div class="col-12 mx-2 my-5 align-items-center">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-8">
                    <div class="media">
                      <div class="media-body">
                        <p class="text-light f-roboto f-s-14">
                          At MatrixOne Managed Project Services, our systematic methodology ensures project excellence. From defining requirements to risk management, our approach covers all key aspects. This guide highlights how our approach sets us apart.
                        </p>
                      </div>
                    </div> 
                  </div>
                  <div class="col-2"></div>
                </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-12 mb-4 mb-lg-0 ">
                <div class="d-flex justify-content-around">
                  <img src="{{asset('assets')}}/images/pagesimg/s2.jpeg" alt="feature-image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /feature -->
    <div class="contact-btn-section mb-5">
      <x-contact-btn text="Talk To Us"/>
    </div>
    @php 
      $data = config('global.testimonials.why_matrix')
    @endphp
    @include('livewire.testimonials')
    


</div>


