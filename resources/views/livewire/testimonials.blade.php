<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="text-white mb-5">Testimonials</h2>
      </div>
    </div>
    <div class="row bg-contain mb-60" data-background="images/banner/brush.png">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div id="slider" class="ui-card-slider bg-contain">
          @if(isset($data) && !empty($data))
            @foreach($data as $row)
              <div class="slide">
                <div class="card text-center">
                  <div class="card-body px-5 py-4">
                    @if(isset($row['img']) && !empty($row['img']))
                      <img src="{{asset($row['img'])}}" alt="user-1" class="img-fluid rounded-circle mb-4">
                    @endif
                    <h4 class="text-secondary">{{$row['position']}}</h4>
                    <p>{{$row['company']}}</p>
                    <p>{!! $row['desc'] !!}</p>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</section>