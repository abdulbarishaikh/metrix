<div>
   <!-- banner -->
   @php
      $page_title='<h1 class="f-playball display-4 new-color">Success Stories</h1>';
      $subtitle='<p class="text-white">Innovate, Elevate, Celebrate – <b class="new-color f-playball h4">Your Success, Our Story</b></p>';
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->

   

    
    <!-- team -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto ">
            <!-- <h2>Our Expert Team</h2> -->
             <p style='margin-top:0in;margin-right:-2.3pt;margin-bottom:0in;margin-left:.5in;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;line-height:150%;font-family:'Roboto Slab', serif;">Delve into the realm of MatrixOne Tech Solution&apos;s success stories, where our collaborative approach with expert partners unfolds a tapestry of excellence across a diverse spectrum of cutting-edge technologies. Witness our joint triumphs in Business Intelligence (BI), Cloud Solutions, Data Analytics, Ecommerce, eLearning, Open Source, ERP, Salesforce, and Web &amp; Mobile App Development. These success stories spotlight the seamless synergy between our organization and our esteemed partners, showcasing our joint commitment to delivering exceptional outcomes.</span></p>
            <p style='margin-top:0in;margin-right:-2.3pt;margin-bottom:0in;margin-left:.5in;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;line-height:150%;font-family:'Roboto Slab', serif;">&nbsp;</span></p>
            <p style='margin-top:0in;margin-right:-2.3pt;margin-bottom:0in;margin-left:.5in;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;line-height:150%;font-family:'Roboto Slab', serif;">Our relentless pursuit of excellence in these domains stands as a testament to our collaborative approach, where we, alongside our esteemed partners, stay at the forefront of technological advancements. Together, we reimagine industry benchmarks, solidifying our joint reputation as leaders in delivering solutions that surpass expectations and set new industry standards.</span></p>
            <div class="contact-btn-section">
              <x-contact-btn text="Connect With Us"/>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-12">
        <div id="accordion">
          @php
            $caseStudy=config('casestudy');
            $i=0;
          @endphp

          @if(isset($caseStudy) && !empty($caseStudy))
            @foreach($caseStudy as $row)
            <div class="card mb-4 rounded-0 border-0">
              <div class="card-header rounded-0 bg-white border p-0 border-0">
                <a class="card-link h4 d-flex tex-dark mb-0 py-3 px-4 justify-content-between" data-toggle="collapse" href="#accordion{{$i}}">
                  <span>{{$row['main_title']}}</span> <i class="ti-plus text-right"></i>
                </a>
              </div>
              <div id="accordion{{$i}}" class="collapse" data-parent="#accordion">
                <div class="row">
                @if(isset($row['category']) && !empty($row['category']))
                 @foreach($row['category'] as $cat)
                  <div class="col-4">
                     <div class="card" style="width: 18rem;">
                        <img src="{{asset('assets/images/case-study/'.$cat['title_image'])}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$cat['title']}}</h5>
                          <a hrefs="javascript:void(0)"  target="_blank" href="{{asset('assets/images/case-study/cat-'.$cat['title_image'])}}" data-img="{{asset('assets/images/case-study/cat-'.$cat['title_image'])}}" class="btn btn-primary popups">Show</a>
                        </div>
                      </div>
                  </div>
                 @endforeach 
                @endif
                </div> 
              </div>
            </div>
             @php $i++; @endphp
           @endforeach 
          @endif
          <p class="text-center shadow-box">
            By choosing MatrixOne for Value Added services, you not only tap into a diverse and highly skilled talent pool but also ensure that your projects are executed swiftly, efficiently, and with reduced risks, ultimately giving you a competitive edge in the market.
          </p>
        </div>
      </div>
        </div>
      </div>
    </section>
    <!-- /team -->

    <div class="modal fade" id="imagemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          </div>
          <div class="modal-body">
            <img src="" id="imagepreview" class="w-100">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



</div>




