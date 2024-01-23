<div>
   <!-- banner -->
   @php
      $page_title='<h1 class="f-playball display-4 new-color">Why Partner with MatrixOne</h1>';
      $subtitle="MatrixOne's Aggregator Platform - <b class='new-color h4'>The Path to Partnership Success</b>";
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->

    <section class="section">
      <div class="container">
        <!-- <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>Why Partner with MatrixOne for Bench</h2>
            <p>
              MatrixOne's Aggregator Platform: The Path to Partnership Success
            </p>
            <p>
              When it comes to partnering for success, MatrixOne Tech Solutions' Partner Aggregator platform stands as a beacon of opportunity for IT organizations. This collaboration unlocks a myriad of advantages, shaping a partnership that is both practical and visionary. Here is why partnering with us is an exceptional choice
            </p>
            <div class="section-border"></div>
          </div>
        </div> -->
        <div class="row no-gutters">
          <div class="col-12">
        <div id="accordion">
          @php
            $bench_data_list=config('global.why_partner_data');
            $i=0;
          @endphp

          @if(isset($bench_data_list) && !empty($bench_data_list))
            @foreach($bench_data_list as $row)
             <div class="card mb-4 rounded-0 border-0">
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
            </div> 

             

             @php $i++; @endphp
           @endforeach 
          @endif
          <p class="shadow-box text-center">
            By choosing MatrixOne for its Value-Added Services, you not only tap into a diverse and highly skilled talent pool but also ensure that your projects are executed swiftly, efficiently, and with reduced risks, ultimately giving you a competitive edge in the market.  
          </p>
        </div>
      </div>
        </div>
      </div>
    </section>
    <!-- /team -->

</div>


