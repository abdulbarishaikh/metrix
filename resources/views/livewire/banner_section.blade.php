<section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
  data-background="">
   <div class="video-background-holder">
      <div class="video-background-overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{asset('assets/video/bck_vid.mp4')}}" type="video/mp4">
        </video>
      <div class="video-background-content container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            @if(isset($page_title) && $page_title!='')
              {{-- <h4 class=" text-white new-color f-roboto">{!! $page_title !!}</h4> --}}
              {!! $page_title !!}
              @if(isset($subtitle))
                {!! $subtitle !!}
              @endif
            @else
              <h1 class="display-4  text-white">Bootstrap video background</h1>
              <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
              <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
                            <u>Bootstrapious</u></a> 
            @endif
            
            </p>
          </div>
        </div>
      </div>
    </div>
</section>