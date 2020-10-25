<div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
            <nav id="menuzord-right" class="menuzord green no-bg">
                <a class="menuzord-brand pull-left flip"><img height="100px" src="{{ asset('frontant/images/ezb-foundation.png') }}" alt=""></a>
                <ul class="menuzord-menu">
                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="#">About</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('photo.gallery.page') }}">Gallery</a></li>
                            <li><a href="{{ route('faq.page') }}">FQA</a></li>
                            <li><a href="{{ route('team.page') }}">Team</a></li>
                            <li><a href="{{ route('founder.page') }}">Our Founder</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="{{ route('donate.page') }}">Donation</a></li>
                    <li class=""><a href="#home">Sponsor A Child</a></li>
                    <li class=""><a href="#home">Involved</a>
                        <ul class="dropdown">
                            <li><a href="features-preloader.html">Make A Donation</a></li>
                            <li><a href="features-preloader.html">Fundraised</a></li>
                            <li><a href="{{ route('volunteer.page') }}">Volunteer</a></li>

                        </ul>
                    </li>
                    <li class=""><a href="{{ route('event.page') }}">Event</a></li>
                    <li class=""><a href="{{ route('update.page') }}">Update</a></li>
                    <li class=""><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>