               @php
               $lang = LaravelLocalization::getCurrentLocale();
               if ($lang == 'ar') {
                $dir = 'rtl';
              } else {
                $dir = 'ltr';
              }
              @endphp
              <div class="section footer-sidebar">
                <ul class="footer-sidebar-list">
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="#">Privacy & Securty</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#" class="fab fa-facebook"></a></li>
                  <li><a href="#" class="fab fa-twitter"></a></li>
                  <li><a href="#" class="fab fa-instagram"></a></li>
                  <li class="col-md-6 mb-2 p-2"><a href="#"> <img class="vatFotter" src="{{ asset('site_assets/'.$dir.'/images/VAT.png') }}"/> </a></li>
                  <li class="col-md-6 mb-2 p-2"><a href="#"> <img src="{{ asset('site_assets/'.$dir.'/images/maroofStamp.png') }}"/> </a></li>
                  <li class="col-md-6 p-2"><a href="#"> <img class="vatFotter" src="{{ asset('site_assets/'.$dir.'/images/googleplay.png') }}"/> </a></li>
                  <li class="col-md-6 p-2"><a href="#"> <img src="{{ asset('site_assets/'.$dir.'/images/appstore.png') }}"/> </a></li>
                </ul>
                <p>All Rights Reserved</p>
              </div>