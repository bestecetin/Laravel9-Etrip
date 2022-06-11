@php
use App\Models\Setting;
$setting=Setting::first();
@endphp

<footer class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Need help?</h3>
                <a href="tel://004542344599" id="phone">{{$setting->phone}}</a>
                <a href="mailto:help@citytours.com" id="email_footer">{{$setting->email}}</a>
            </div>
            <div class="col-md-3">
                <h3>About</h3>
                <ul>
                    <li><a href="{{route('about')}}">About us</a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Login</h3>
                <ul>
                    <li><a href="/loginuser" >Sign in</a></li>
                    <li><a href="/registeruser" >Join</a></li>
                </ul>
               </div>
            </div>
        </div><!-- End row -->

        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="{{$setting->facebook}}"><i class="icon-facebook"></i></a></li>
                        <li><a href="{{$setting->twitter}}"><i class="icon-twitter"></i></a></li>
                        <li><a href="{{$setting->youtube}}"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Beste Çetin 2022</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->
