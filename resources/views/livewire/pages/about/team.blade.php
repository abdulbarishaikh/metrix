<div>
    <!-- banner -->
    @php
      $page_title='<h1 class="f-playball display-4 new-color">The Team MatrixOne</h1>';
    @endphp
    @include('livewire.banner_section',get_defined_vars())
    <!-- /banner -->



    <!-- team -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>Our Expert Team</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p> -->
            {{-- <div class="section-border"></div> --}}
          </div>
        </div>
        <div class="row no-gutters mt-4">

          @php
            $team_list=config('global.team');
            $i=0;
          @endphp
          @if(isset($team_list) && !empty($team_list))
            @foreach($team_list as $row)
          <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow">
              <img src="{{asset($row['img'])}}" onerror='this.src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYGuiJf3Eoo-g5EGdobJSQn-Myq81AirKSWdLp5Rc9Adk04RHSFlgFi8YWqeR_axNAHck&usqp=CAU"' alt="team-member" class="card-img-top" style="width: 267px !important;height: 320px !important;">
              <div class="card-body text-center position-relative zindex-1">
                <h4><a class="text-dark" href="team-single.html">{{$row['name']}}</a></h4>
                <i>{{$row['post']}}</i>
                <hr>
                <p class="text-dark font-weight-bold">{{$row['desc']}}</p>
                <hr>
                <a class="d-block" href="#" href="{{$row['link']}}" target="_blank"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <!-- /team -->

    <!-- testimonial-slider -->
    <section class="section bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="text-white mb-5">Our Client Testimonials</h2>
          </div>
        </div>
        <div class="row bg-contain mb-60" data-background="{{asset('assets')}}/images/banner/brush.png">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div id="slider" class="ui-card-slider bg-contain">
              @php
                $testimonials = config('global.testimonials');
                // dd($testimonials);
              @endphp
              @if(!empty($testimonials))
                @foreach($testimonials as $key=>$row)
                  @foreach($row as $value)
                    <div class="slide">
                      <div class="card text-center mt-5">
                        <div class="card-body px-5 py-4">
                          {{-- <img src="{{asset('assets')}}/images/testimonial/user-1.jpg" alt="user-1" class="img-fluid rounded-circle mb-4"> --}}
                          <h4 class="text-secondary mb-4">{{$value['company']}}</h4>
                          <p>{{$value['position']}}</p>
                          <p>“{{$value['desc']}}.”</p>
                        </div>
                      </div>
                    </div>
                  @endforeach 
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /testimonial-slider -->

    <!-- call to action -->
    <section class="section">
      <div class="container section-sm overlay-secondary-half bg-cover" data-background="{{asset('assets')}}/images/backgrounds/cta-bg.jpg">
      <div class="row">
        <div class="col-lg-8 offset-lg-1">
          <h2 class="text-gradient-primary">Let's Start With Us!</h2>
          <p class="h4 font-weight-bold text-white mb-4">Tells Us About Your Project and ask<br> questions – we will get back to you</p>
          <a href="contact.html" class="btn btn-lg btn-primary">Reach Our To Us</a>
        </div>
      </div>
    </div>
    </section>
    <!-- /call to action -->
</div>
