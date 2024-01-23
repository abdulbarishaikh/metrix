<div>
   <!-- banner -->
   @php
      $page_title='<h1 class="f-playball display-4 new-color">Stellar IT  Bench Sales</h1>';
      $subtitle='<h4 class="text-white">Flexible Workforce, Exceptional Results</h4>';
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->

    <!-- service -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <!-- <h2 class="section-title">Our Services</h2> -->
            <p class="lead text-left f-roboto">MatrixOne, trailblazers in the realm of workforce solutions, reshaping the essence of employment. Our commitment extends far beyond conventional bench sales services, as we harness the power of <b class="text-blue-dark">Uberization</b> and the dynamic <b class="text-blue-dark">GIG Economy</b>. 
            The two-way benefit is evident in our approach. Companies can utilize their resources for bench sales, leveraging the Gig economy and our meticulously background - checked professionals to maximize efficiency. Simultaneously, our bench sales services provide a talent pool that empowers organizations to swiftly and effectively hire contractual employees when needed, enhancing their agility and adaptability in an ever-changing business landscape. 
            MatrixOne offers the bridge between these two dynamic forces, ensuring that you have access to the right skills at the right time, all while minimizing risks and streamlining the hiring process. 
            MatrixOne, in collaboration with an array of IT Services and Product Development Organizations, unlocks a wealth of talent and expertise for your client's needs. 
            Our consultants are meticulously background-checked professionals employed by our partners, ensuring full statutory compliance. Ready for immediate project ramp-up, they offer flexibility and skill in an ever-evolving business landscape. Choosing MatrixOne's bench sales services, you're not just acquiring a workforce; you're gaining a competitive edge, stylishly adapting to the fast-paced demands of today's business world.

            </p>
            <div class="contact-btn-section">
              <x-contact-btn text="Let's Connect"/>
            </div>
          </div>
        </div>
       
      </div>
    </section>
    <!-- /service -->

    <!-- feature -->
    <section class="section bg-secondary position-relative">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h2 class="text-white text-center">Bench Sales – <b class="new-color f-playball">Methodology</b></h2>
              {{-- <div class="section-border ml-0"></div> --}}
            </div>

            <div class="col-md-12 mb-4">
              <div class="media">
                <div class="media-body">
                  <p class="text-light f-roboto px-3">
                    MatrixOne Bench Sales methodology encompasses a structured approach for
                    efficiently managing and optimizing available bench resources.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="bg-image overlay-secondary">
        <img src="{{asset('assets')}}/images/features.jpg" alt="bg-image">
      </div> --}}
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="row align-items-center">
              <div class="col-lg-4 mb-4 mb-lg-0 ">
                <img src="{{asset('assets')}}/images/pagesimg/s1 (4).jpeg" alt="feature-image" class="img-fluid">
              </div>
              <div class="col-lg-7 offset-lg-1">
                <div class="row">
                  
                  <div class="col-12">
                    <div class="row">
                          <div class="col-6">
                            <div id="accordion">
                              @php
                                $bench_data_list=config('global.why_partner_data');
                                $i=0;
                              @endphp
                    
                              @if(isset($bench_data_list) && !empty($bench_data_list))
                                @foreach($bench_data_list as $row)
                                  @if($i<5)
                                <div class="card mb-4 rounded-0 border-0">
                                  <div class="card-header rounded-0 border p-0 border-0 cutome-bg">
                                    <a class="card-link d-flex text-white mb-0 py-3 px-4 justify-content-between" data-toggle="collapse" href="#accordion{{$i}}">
                                      <span>{{$row['title']}}</span> <i class="ti-plus text-right"></i>
                                    </a>
                                  </div>
                                  <div id="accordion{{$i}}" class="collapse" data-parent="#accordion">
                                    <div class="card-body font-secondary text-color">
                                      @if(isset($row['desc']) && !empty($row['desc']))
                                        <ul class="list-group list-group-flush">
                                        @foreach($row['desc'] as $k=>$r)
                                          <li class="list-group-item">{{$r}}</li>
                                        @endforeach
                                        </ul> 
                                      @endif
                                    </div>
                                  </div>
                                </div> 
                    
                                
                                @endif
                                @php $i++; @endphp
                              @endforeach 
                              @endif
                            </div>
                          </div>
                          <div class="col-6">
                            <div id="accordion">
                              @php
                                $bench_data_list=config('global.why_partner_data');
                                /* $i=0; */
                              @endphp
                    
                              @if(isset($bench_data_list) && !empty($bench_data_list))
                                @foreach($bench_data_list as $row)
                                  @if($i<15)
                                    <div class="card mb-4 rounded-0 border-0">
                                      <div class="card-header rounded-0 border p-0 border-0 cutome-bg">
                                        <a class="card-link d-flex text-white mb-0 py-3 px-4 justify-content-between" data-toggle="collapse" href="#accordion{{$i}}">
                                          <span>{{$row['title']}}</span> <i class="ti-plus text-right"></i>
                                        </a>
                                      </div>
                                      <div id="accordion{{$i}}" class="collapse" data-parent="#accordion">
                                        <div class="card-body font-secondary text-color">
                                          @if(isset($row['desc']) && !empty($row['desc']))
                                            <ul class="list-group list-group-flush">
                                            @foreach($row['desc'] as $k=>$r)
                                              <li class="list-group-item">{{$r}}</li>
                                            @endforeach
                                            </ul> 
                                          @endif
                                        </div>
                                      </div>
                                    </div> 
                    
                                
                    
                                    @endif
                                    @php $i++; @endphp
                              @endforeach 
                              @endif
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /feature -->

    <!-- team -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2 class="text-blue-dark">Why Partner with MatrixOne for Bench</h2>
            <p>
              Hiring IT Bench Consultants is no longer merely a recruitment solution; it&#39;s a
              dynamic approach that offers immediate benefits for businesses. Here&#39;s why you
              should consider Bench Sales services from MatrixOne:
            </p>
            <div class="contact-btn-section">
              <x-contact-btn text="Let's Connect"/>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-12">
        <div id="accordion">
          @php
            $bench_data_list=config('global.service_bench_data');
            $i=0;
          @endphp

          @if(isset($bench_data_list) && !empty($bench_data_list))
            @foreach($bench_data_list as $row)
            <!-- <div class="card mb-4 rounded-0 border-0">
              <div class="card-header rounded-0 bg-white border p-0 border-0">
                <a class="card-link h4 d-flex tex-dark mb-0 py-3 px-4 justify-content-between" data-toggle="collapse" href="#accordion{{$i}}">
                  <span>{{$row['title']}}</span> <i class="ti-plus text-right"></i>
                </a>
              </div>
              <div id="accordion{{$i}}" class="collapse" data-parent="#accordion">
                <div class="card-body font-secondary text-color">
                   @if(isset($row['desc']) && !empty($row['desc']))
                    <ul class="list-group list-group-flush">
                     @foreach($row['desc'] as $k=>$r)
                      <li class="list-group-item">{{$r}}</li>
                     @endforeach
                    </ul> 
                   @endif
                </div>
              </div>
            </div> -->

            @if(isset($row['desc']) && !empty($row['desc']))
               @php
                  $bullets="<div>";
                 foreach($row['desc'] as $k=>$r){
                  $bullets.='<li class="text-white">'.$r.'</li><br>'; 
                 }
                 $bullets.='</div>';
               @endphp
            
             @endif
             <div class="card-header rounded-0 bg-white border p-0 border-0">
                <a class="card-link h4 d-flex tex-dark mb-0 py-3 px-4 justify-content-between"  href="#accordion{{$i}}" >
                  <span data-toggle="tooltip" data-html="true" data-placement="right" title="{{$bullets }}">{{$row['title']}}</span> 
                </a>
              </div>
             @php $i++; @endphp
           @endforeach 
          @endif
          <p class="text-center shadow-box">
            By choosing MatrixOne for Bench Sales services, you not only tap into a
            diverse and highly skilled talent pool but also ensure that your projects
            are executed swiftly, efficiently, and with reduced risks, ultimately giving
            you a competitive edge in the market.
          </p>
        </div>
      </div>
        </div>
      </div>
    </section>
    <!-- /team -->

</div>


