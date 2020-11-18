<footer id="footer" class="bg-black-222" style="color:#a9a9a9!important;">
  <div class="container pt-80 pb-30">
    <div class="row border-bottom-black">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <img class="mb-20" alt="" src="{{ asset('frontant/images/ezb-foundation.png') }}">

          <p>22 Segun Bagicha, Chittagong Hotel(4th Floor), Dhaka-1000.</p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">01743732845</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">info@ezbfoundation.org</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">http://ezbfoundation.org</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom">Useful Links</h5>
          <ul class="list angle-double-right list-border">
            <li><a href="{{ route('contact') }}">Body Building</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('faq.page') }}">FAQ</a></li>
            <li><a href="{{ route('team.page') }}">Team</a></li>
            <!-- <li><a href="{{ route('volunteer.page') }}">Volunteer</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom">Twitter Feed</h5>
          <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom">Latest News</h5>
          <div class="latest-posts">
            <article class="post media-post clearfix pb-0 mb-10">
              <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
              <div class="post-right">
                <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
              </div>
            </article>
            <article class="post media-post clearfix pb-0 mb-10">
              <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
              <div class="post-right">
                <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
              </div>
            </article>
            <article class="post media-post clearfix pb-0 mb-10">
              <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
              <div class="post-right">
                <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-30">
      <div class="col-md-5">
        <div class="widget dark">
          <h5 class="widget-title mb-10">Subscribe Us</h5>
          <!-- Mailchimp Subscription Form Starts Here -->
          <form id="mailchimp-subscription-form-footer" class="newsletter-form">
            <div class="input-group">
              <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
              <span class="input-group-btn">
                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
          <!-- Mailchimp Subscription Form Validation-->
          <script type="text/javascript">
            $('#mailchimp-subscription-form-footer').ajaxChimp({
              callback: mailChimpCallBack,
              url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
            });

            function mailChimpCallBack(resp) {
              // Hide any previous response text
              var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                $response = '';
              $mailchimpform.children(".alert").remove();
              console.log(resp);
              if (resp.result === 'success') {
                $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
              } else if (resp.result === 'error') {
                $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
              }
              $mailchimpform.prepend($response);
            }
          </script>
          <!-- Mailchimp Subscription Form Ends Here -->
        </div>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <div class="widget dark">
          <h5 class="widget-title mb-10">Call Us Now</h5>
          <div class="text-gray">
            01739-801419 <br>
            ezbfoundation@gmail.com
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget dark">
          <h5 class="widget-title mb-10">Connect With Us</h5>
          <ul class="styled-icons icon-dark icon-circled icon-sm">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-black-333">
    <div class="container pt-20 pb-20">
      <div class="row">
        <div class="col-md-6">
          <p class="font-11 text-black-777 m-0">Copyright &copy;<?php echo date('Y') ?> Zoom Bangladesh. All Rights Reserved</p>
        </div>
        <div class="col-md-6 text-right">
          <div class="widget no-border m-0">
            <ul class="list-inline sm-text-center mt-5 font-12">
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>|</li>
              <li>
                <a href="#">Help Desk</a>
              </li>
              <li>|</li>
              <li>
                <a href="#">Support</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>