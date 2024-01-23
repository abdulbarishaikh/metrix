<div>
   <!-- page-title -->
    <section class="page-title bg-cover" data-background="{{asset('assets')}}/images/backgrounds/page-title.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="display-1 text-white font-weight-bold f-playball new-color">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- /page-title -->

    <div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758" data-marker="{{asset('assets')}}/images/marker.png"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <section class="section py-5 bg-secondary mt-3">
      <div class="container">

        <div class="row  justify-content-center">
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
    </section>
</div>
