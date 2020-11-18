@extends('frontant_layouts.app')
@section('title')
Adviser Committe List
@endsection
@section('content')

<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->



  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('frontant/images/bg/bg1.jpg') }}">
    <div class="container pt-100 pb-50">
      <!-- Section Content -->
      <div class="section-content pt-100">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-white">Donate</h3>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Section: Project Start Form -->
  <section class="divider parallax layer-overlay" style="background-color: red!important;">
    <div class="container-fluid">
      <div class="row equal-height">

        <div class="col-md-12 hidden-xs">

          <div class="row">
            <div class=" col-md-5  text-white">
              <img src="frontant/currentDonation/{{$current->image }}" />
            </div>
            <div class=" col-md-7  text-white">
              <div class=" col-md-4 text-white">
                <div class="funfact text-center">
                  <div class="funfact-content">
                    <div class="funfact-icon">
                      <i class="pe-7s-smile font-50 text-white"></i>
                    </div>
                    <h2 style="color:white!important;" data-animation-duration="2000" data-value="{{$current->raised}}" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                    <h4 class="text-uppercase text-white">RAISED</h4>
                    <p>Raised Project Demand</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4  text-white">
                <div class="funfact text-center">
                  <div class="funfact-content">
                    <div class="funfact-icon">
                      <i class="pe-7s-add-user font-50 text-white"></i>
                    </div>
                    <h2  style="color:white!important;" data-animation-duration="2000" data-value="{{$current->goal}}" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                    <h4 class="text-uppercase text-white">Goal</h4>
                    <p>Goal Project Target</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4  text-white">
                <div class="funfact text-center">
                  <div class="funfact-content">
                    <div class="funfact-icon">
                      <i class="pe-7s-rocket font-50 text-white"></i>
                    </div>
                    <h2  style="color:white!important;" data-animation-duration="2000" data-value="{{$current->success}}" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                    <h4 class="text-uppercase text-white">Success </h4>
                    <p>Success Project Demand</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 text-white">
                <hr>
                <p>{{$current->description}}</p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>








  <!-- Section: Donation -->
  <section id="donation">
    <div class="container mt-0 pt-50">
      <div class="section-content">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">

            <h2 class="mt-0 line-height-1 text-center">Make a Donation<span class="text-theme-colored"> Now!!</span></h2>
            <div class="separator separator-rouned">
              <i class="fa fa-cog fa-spin"></i>
            </div>
            <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->

            <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Make Payment</h3>
            <form action="{{ route('donate.store') }}" method="POST" id="">
            {{csrf_field()}}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group mb-20">
                    <label><strong>Payment Type</strong></label> <br>
                    <label class="radio-inline">
                      <input type="radio" checked="" value="One Time" name="payment_type">
                      One Time
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="Recurring" name="payment_type">
                      Recurring
                    </label>
                  </div>
                </div>
                <div class="col-sm-12" id="donation_type_choice">
                  <div class="form-group mb-20">
                    <label><strong>Donation Type</strong></label>
                    <div class="radio mt-5">
                      <label class="radio-inline">
                        <input type="radio" value="Daily" name="donate_type" checked="">
                        Daily</label>
                      <label class="radio-inline">
                        <input type="radio" value="Weekly" name="donate_type">
                        Weekly</label>
                      <label class="radio-inline">
                        <input type="radio" value="Monthly" name="donate_type">
                        Monthly</label>
                      <label class="radio-inline">
                        <input type="radio" value="Yearly" name="donate_type">
                        Yearly</label>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label><strong>I Want to Donate for</strong></label>
                    <select name="project_category_id" class="form-control">
                      <option value="" disabled selected>Select Donation Type</option>
                      @foreach($project as $key => $value)
                      <option value="{{$value->title }}">{{ $value->title }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label><strong>Country</strong></label>
                    <select name="country" class="form-control">
                      <option value="">Select One</option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antarctica">Antarctica</option>
                      <option value="Antigua and/or Barbuda">Antigua and/or Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Aruba">Aruba</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azerbaijan">Azerbaijan</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                      <option value="Bhutan">Bhutan</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British lndian Ocean Territory">British lndian Ocean Territory</option>
                      <option value="Brunei Darussalam">Brunei Darussalam</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                      <option value="Dominican Republic">Dominican Republic</option>
                      <option value="East Timor">East Timor</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="France, Metropolitan">France, Metropolitan</option>
                      <option value="French Guiana">French Guiana</option>
                      <option value="French Polynesia">French Polynesia</option>
                      <option value="French Southern Territories">French Southern Territories</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Grenada">Grenada</option>
                      <option value="Guadeloupe">Guadeloupe</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guinea-Bissau">Guinea-Bissau</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Ivory Coast">Ivory Coast</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                      <option value="Korea, Republic of">Korea, Republic of</option>
                      <option value="Kosovo">Kosovo</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macau">Macau</option>
                      <option value="Macedonia">Macedonia</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Martinique">Martinique</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mayotte">Mayotte</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option value="Moldova, Republic of">Moldova, Republic of</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montenegro">Montenegro</option>
                      <option value="Montserrat">Montserrat</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option>
                      <option value="Norfork Island">Norfork Island</option>
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau">Palau</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Pitcairn">Pitcairn</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Reunion">Reunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russian Federation">Russian Federation</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option value="Saint Lucia">Saint Lucia</option>
                      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                      <option value="Samoa">Samoa</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Serbia">Serbia</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="St. Helena">St. Helena</option>
                      <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Svalbarn and Jan Mayen Islands">Svalbarn and Jan Mayen Islands</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Togo">Togo</option>
                      <option value="Tokelau">Tokelau</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="United States minor outlying islands">United States minor outlying islands</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Vatican City State">Vatican City State</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                      <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                      <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                      <option value="Western Sahara">Western Sahara</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Yugoslavia">Yugoslavia</option>
                      <option value="Zaire">Zaire</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select>




                  </div>
                </div>




                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Full Name <small>*</small></label>
                    <input id="form_name" name="full_name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Phone<small>*</small></label>
                    <input id="form_name" name="phone" type="text" placeholder="Phone" required="" class="form-control" aria-required="true">
                  </div>
                </div>






                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label><strong>How much do you want to donate?</strong></label>
                    <select name="amount" class="form-control">
                      <option value="500">500</option>
                      <option value="1000">1000</option>
                      <option value="2000">2000</option>
                      <option value="3000">3000</option>
                      <option value="4000">4000</option>
                      <option value="5000">5000</option>
                      <option value="10000">10000</option>
                      <option value="other">Other Amount</option>
                    </select>
                    <div id="custom_other_amount">
                      <label><strong>Custom Amount:</strong></label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">E-mail<small>*</small></label>
                    <input id="form_name" name="email" type="email" placeholder="Phone" required="" class="form-control" aria-required="true">
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                  </div>
                </div>
              </div>
            </form>

            <!-- Script for Donation Form Custom Amount -->
            <script type="text/javascript">
              $(document).ready(function(e) {
                var $donation_form = $("#paypal_donate_form_onetime_recurring");
                //toggle custom amount
                var $custom_other_amount = $donation_form.find("#custom_other_amount");
                $custom_other_amount.hide();
                $donation_form.find("select[name='amount']").change(function() {
                  var $this = $(this);
                  if ($this.val() == 'other') {
                    $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                  } else {
                    $custom_other_amount.children(".input-group").remove();
                    $custom_other_amount.hide();
                  }
                });

                //toggle donation_type_choice
                var $donation_type_choice = $donation_form.find("#donation_type_choice");
                $donation_type_choice.hide();
                $("input[name='payment_type']").change(function() {
                  if (this.value == 'recurring') {
                    $donation_type_choice.show();
                  } else {
                    $donation_type_choice.hide();
                  }
                });


                // submit form on click
                $donation_form.on('submit', function(e) {
                  $("#paypal_donate_form-onetime").submit();
                  var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                  var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                  var amount = $donation_form.find("select[name='amount'] option:selected").val();
                  var t3 = $donation_form.find("input[name='t3']:checked").val();

                  if (amount == 'other') {
                    amount = $donation_form.find("#input_other_amount").val();
                  }

                  // submit proper form now
                  if ($("input[name='payment_type']:checked", $donation_form).val() == 'recurring') {
                    var recurring_form = $('#paypal_donate_form-recurring');

                    recurring_form.find("input[name='item_name']").val(item_name);
                    recurring_form.find("input[name='currency_code']").val(currency_code);
                    recurring_form.find("input[name='a3']").val(amount);
                    recurring_form.find("input[name='t3']").val(t3);

                    recurring_form.find("input[type='submit']").trigger('click');

                  } else if ($("input[name='payment_type']:checked", $donation_form).val() == 'one_time') {
                    var onetime_form = $('#paypal_donate_form-onetime');

                    onetime_form.find("input[name='item_name']").val(item_name);
                    onetime_form.find("input[name='currency_code']").val(currency_code);
                    onetime_form.find("input[name='amount']").val(amount);

                    onetime_form.find("input[type='submit']").trigger('click');
                  }
                  return false;
                });

              });
            </script>

            <!-- Paypal Onetime Form -->



            <!-- ===== END: Paypal Both Onetime/Recurring Form ===== -->
          </div>

        </div>
      </div>
    </div>
  </section>




  <h2 class="mt-0 line-height-1 text-center">Account<span class="text-theme-colored"> Details</span></h2>
  <div class="separator separator-rouned">
    <i class="fa fa-cog fa-spin"></i>
  </div>
  <section class="position-inherit">
    <div class="container">
      <div class="row">
        <div class="col-md-3 scrolltofixed-container">
          <div class="list-group scrolltofixed z-index-0">
            @foreach($account as $key => $value)
            <a href="#section-one{{$key}}" class="list-group-item smooth-scroll-to-target text-theme-colored bg-success">
              <h3>{{ $value->name }}</h3>
            </a>
            @endforeach

          </div>
        </div>
        <div class="col-md-9">

          @foreach($account as $key => $value)

          <div id="section-one{{$key}}" class="mb-50">
            <h3>{{ $value->name }}</h3>
            <ul class="mt-10">
              <?php echo $value->description; ?>
            </ul>
          </div>

          @endforeach



        </div>
      </div>
    </div>
  </section>

</div>

@endsection