@php
  $partner_list=config('global.partner_logos');
  $i=0;
@endphp
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h2 class="section-title">Our Partners</h2>
        </div>
        <div class="client-logo-slider d-flex align-items-center">
          @if(isset($partner_list) && !empty($partner_list))
            @foreach($partner_list as $row)
             <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="{{asset('assets/images/partners/'.$row['file_name'].'.png')}}" alt="{{$row['file_name']}}"></a>
            @endforeach
          @endif  
          
        </div>
      </div>
    </div>
  </div>
</section>