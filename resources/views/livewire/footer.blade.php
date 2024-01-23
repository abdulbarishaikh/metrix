@include('livewire.partnet_slider',get_defined_vars())
<div>
 <!-- footer -->
    <footer class="bg-secondary position-relative">
      <img src="{{asset('assets')}}/images/backgrounds/map.png" class="img-fluid overlay-image" alt="">
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-5">
              <h2 class="f-playball new-color">MatrixOne Tech Solutions</h2>
              <p class="text-white">MatrixOne, an organization which provides value added services to its partners and helps them <b class="new-color">ACHIEVE BETTER WITH LESS</b></p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3 col-6">
              <h4 class="text-white mb-5">About</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-light d-block mb-3">Service</a></li>
                <li><a href="{{url('/contactus')}}" class="text-light d-block mb-3">Conatact</a></li>
                <li><a href="{{url('aboutus/')}}" class="text-light d-block mb-3">About us</a></li>
                <li><a href="{{url('resources/blogs')}}" class="text-light d-block mb-3">Blog</a></li>
                <li><a href="#" class="text-light d-block mb-3">Support</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-6">
              <h4 class="text-white mb-5">Company</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-light d-block mb-3">Service</a></li>
                <li><a href="#" class="text-light d-block mb-3">Conatact</a></li>
                <li><a href="{{url('aboutus')}}" class="text-light d-block mb-3">About us</a></li>
                <li><a href="{{url('resources/blogs')}}" class="text-light d-block mb-3">Blog</a></li>
                <li><a href="{{url('/contactus')}}" class="text-light d-block mb-3">Support</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="bg-white p-4">
                <h3 class="f-playball new-color">Contact us</h3>
                <form action="{{route('add-contact-detail')}}" method="post" id="contact-form">
                  <div class="row">
                    <div class="col-6">
                      <input type="text" id="first_name" name="first_name" class="form-control mb-2 px-0" placeholder="Enter First Name">
                    </div>
                    <div class="col-6">
                      <input type="text" id="last_name" name="last_name" class="form-control mb-2 px-0" placeholder="Enter Last Name">
                    </div>
                    <div class="col-6">
                      <input type="text" id="organization_name" name="organization_name" class="form-control mb-2 px-0" placeholder="Enter Organization Name">
                    </div>
                    <div class="col-6">
                      <input type="email" id="email" name="email" class="form-control mb-2 px-0" placeholder="Enter Email Id">
                    </div>
                    <div class="col-12 ">
                      <select name="services" id="services" class="form-control mb-2 px-0">
                        <option value="">Select Service</option>
                        @php
                          $services = config('global.services');
                        @endphp
                        @if(isset($services) && !empty($services))
                          @foreach($services as $row)
                            <option value="{{$row}}">{{$row}}</option>
                          @endforeach
                        @endif
                      </select>

                    </div>
                    <div class="col-12">
                      <textarea name="message" id="message" class="form-control mb-2 px-0" placeholder="Enter Message"></textarea>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pb-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="text-light mb-0">Copyright &copy; 2023  by <a class="text-gradient-primary" href="https://matrixonetechsolutions.com">matrixonetechsolutions.com</a>
              </p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline text-md-right text-center">
                <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-instagram"></i></a></li>
                <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-github"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
</div>
