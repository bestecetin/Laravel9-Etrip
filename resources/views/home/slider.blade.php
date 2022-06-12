<!-- Slider -->
<div id="full-slider-wrapper">
    <div id="layerslider" style="width:100%;height:600px;">
        <!-- first slide -->
        @foreach($sliderdata as $rs)
        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img src="{{Storage::url($rs->image)}}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">{{$rs->title}}</h3>
            <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">{{$rs->city}}</p>
            <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="place/{{$rs->id}}.html">See more</a>
        </div>
        @endforeach
    </div>

</div>
<!-- End layerslider -->
