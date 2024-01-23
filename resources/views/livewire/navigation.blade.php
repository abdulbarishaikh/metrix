<div>
    <header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets')}}/images/matrixOneWhite.png" class="" style="width: 70%;" alt="Egen"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a wire:navigate class="nav-link" href="{{url('/')}}" >Home</a>
        </li>
        <!-- <li class="nav-item">
          <a wire:navigate class="nav-link" href="{{url('/aboutus')}}" >About Us</a>
        </li>
        <li class="nav-item">
          <a wire:navigate class="nav-link" href="{{url('/services')}}" >Services</a>
        </li>
        <li class="nav-item">
          <a wire:navigate class="nav-link" href="{{url('/partners')}}" >Partners</a>
        </li>
        <li class="nav-item">
          <a wire:navigate class="nav-link" href="{{url('/resources')}}" >Resources</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="team.html" wire:navigate>Team</a>
            <a class="dropdown-item" href="team-single.html" wire:navigate>Team Details</a>
            <a class="dropdown-item" href="career.html" wire:navigate>Career</a>
            <a class="dropdown-item" href="career-single.html" wire:navigate>Career Details</a>
            <a class="dropdown-item" href="blog-single.html" wire:navigate>Blog Details</a>
            <a class="dropdown-item" href="pricing.html" wire:navigate>Pricing</a></a>
            <a class="dropdown-item" href="faqs.html" wire:navigate>FAQ's</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('resources/success_stories')}}" wire:navigate>Success Stories</a>
            <a class="dropdown-item" href="{{url('resources/blogs')}}" wire:navigate>Blogs</a>
            <a class="dropdown-item" href="{{url('resources/find_jobs')}}" wire:navigate>Fresh Opportunities</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Partners</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('partners/partner_network')}}" wire:navigate>Partner Network</a>
            <a class="dropdown-item" href="{{url('partners/why_partner')}}" wire:navigate>Why Partner with MatrixOne Tech Solutions</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('services/bench')}}" wire:navigate>Bench Sales</a>
            <a class="dropdown-item" href="{{url('services/why_matrixone')}}" wire:navigate>Managed Project Services</a>
            <a class="dropdown-item" href="{{url('services/product')}}" wire:navigate>Products</a>
            <a class="dropdown-item" href="{{url('services/service_management')}}" wire:navigate>Service Management</a>
            <a class="dropdown-item" href="{{url('services/pmo_service')}}" wire:navigate>PMO Service</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('aboutus/')}}" wire:navigate>About</a>
            <a class="dropdown-item" href="{{url('aboutus/team')}}" wire:navigate>Team</a>
            <a class="dropdown-item" href="{{url('aboutus/why_matrixone')}}" wire:navigate>Why MatrixOne Tech Solutions</a>
          </div>
        </li>

        <li class="nav-item">
          <a wire:navigate class="nav-link" href="{{url('/contactus')}}" >Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
</div>
