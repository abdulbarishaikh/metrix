<div>
   <!-- banner -->
   @php
      $page_title='<h1 class="f-playball display-4 new-color">Your PMO Solution</h1>';
      $subtitle='<h4 class="text-white">Agile Execution, Maximum Efficiency</h4>';
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->

    <!-- service -->
    <section class="section pb-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h4 class="font-tertiary mb-2 text-blue-dark">MatrixOne IT PMO Services : <b class="f-playball" style="font-size: 28px">Maximizing Organizational Efficiency</b></h4>
            <div class="content">
              <p class="f-roboto">In an increasingly dynamic business landscape, where adaptability and streamlined operations reign supreme, the role of IT Project Management Offices (PMOs) has evolved into a cornerstone of success for modern enterprises. At the intersection of strategic planning, execution, and technology, IT PMOs offer a structured approach that organizations leverage to drive project success, enhance operational efficiency, and achieve transformative outcomes.</p>
            </div>
            <img src="{{asset('assets/images/services/pmo-img1-.png')}}" alt="post-thumb" class="img-fluid mb-3">
            
          </div>
        </div>
        <div class="row">
           <div class="col-12 mx-auto">
             <table class="table border-5">
               <thead>
                 <tr class="dg-dark-blue">
                   <th>Key Services</th>
                   <th>Back Office Operations</th>
                 </tr>
               </thead>
               <tbody>
                 <tr class="light-yellow">
                   <td>
                      <ul class="list-group">
                        <li class="list-group-item"> Program Charter, Roadmap, Strategy, Budgets,</li>
                        <li class="list-group-item"> Standardized Project Management Practices</li>
                        <li class="list-group-item"> Portfolio Management</li>
                        <li class="list-group-item"> Change Management</li>
                        <li class="list-group-item"> Governance & Oversight</li>
                        <li class="list-group-item"> Program Risk Management</li>
                        <li class="list-group-item"> Cost & Resource Management</li>
                        <li class="list-group-item"> Training & Development</li>
                      </ul>
                   </td>
                   <td>
                    <ul class="list-group">
                      <li class="list-group-item"> Project Documentation</li>
                      <li class="list-group-item"> Maintain Project Management Software</li>
                      <li class="list-group-item"> Managing & tracking risks</li>
                      <li class="list-group-item"> Preparation of weekly / monthly status reports</li>
                      <li class="list-group-item"> Tracking project metrics and KPI’s</li>
                      <li class="list-group-item"> Customer tailored project methodologies</li>
                      <li class="list-group-item"> Reporting & Analysis</li>
                      <li class="list-group-item">&nbsp;</li>

                    </ul>
                   </td>
                 </tr>
               </tbody>
             </table>
           </div>
           <div class="contact-btn-section">
            <x-contact-btn text="Connect With Us"/>
          </div>
        </div>
      </div>
    </section>
    <!-- /service -->

    <!-- /feature -->

    <!-- team -->
    <section class="section pb-1 pt-1">
      <div class="container">
        <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h3 class="font-tertiary mb-2">Why MatrixOne - <b class="new-color f-playball">IT&nbsp; PMO Services</b></h3>
            <div class="content">
              <p class="f-roboto">Our Project Management consulting provides strategy and direction by using our toolkit, which helps in executing of your projects, making you CMMI compliant, and choose from a variety of implementation methodologies including Agile right from planning to execution stages. <b class="text-blue-dark">We can setup a demo for you to understand our process better</b>.</p>
            </div>
            <img src="{{asset('assets/images/services/pmo-img2-.png')}}" alt="post-thumb" class="img-fluid w-100 mb-3">
            
          </div>
        </div>
        <div class="row">
           <div class="col-12 mx-auto">
             <table class="table border-5 f-roboto f-s-14 f-s-14">
               <thead>
                 <tr>
                   <th class="text-blue-dark">Our Value Proposition</th> 
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>
                      <ul class="list-group">
                        <li class="list-group-item">   Adaptable & Flexible on-prem and cloud projects</li>
                        <li class="list-group-item">   Ready to use Lifecycle templates</li>
                        <li class="list-group-item">   Conversant with Marketplace PM tools</li>
                        <li class="list-group-item">   Assist implement OKR & Balance Scorecard tool</li>
                        <li class="list-group-item">
                           Able PMO Partner in Digital Transformation to <br>
                          • Tie Goals to Outcomes <br>
                          • Make Execution Agile <br>
                          • Coordinate / manage resource complexity <br>
                          • Assist Project Managers for higher CSAT <br>

                        </li>
                      </ul>
                   </td>
                 </tr>
               </tbody>
             </table>
             <div class="contact-btn-section">
              <x-contact-btn text="Connect With Us"/>
            </div>
           </div>
        </div>
      </div>
      </div>
    </section>
    <!-- /team -->
    <!-- testimonial-slider -->
    <section class="section bg-secondary pt-3">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="text-white mb-5 new-color f-playball">Our Client Testimonials</h2>
          </div>
        </div>
        <div class="row bg-contain mb-5" data-background="{{asset('assets')}}/images/banner/brush.png">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div id="slider" class="ui-card-slider bg-contain">
              <div class="slide">
                <div class="card text-center">
                  <div class="card-body px-5 py-4">
                    <h4 class="text-secondary">Euphoric Thought</h4>
                    <p>CEO</p>
                    <p>“Working with MatrixOne Tech Solutions was transformative for our organization. Their strategic IT PMO services streamlined our processes, enhancing efficiency and project success. Their team's expertise and dedication were invaluable. Highly recommended!"
                      Thanks to MatrixOne, we experienced a noticeable increase in efficiency, timely deliverables, and improved project success rates. Their professionalism and unwavering support throughout our engagement were truly commendable.”</p>
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


