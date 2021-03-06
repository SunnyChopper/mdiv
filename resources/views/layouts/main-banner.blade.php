<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper js__swiper-one-item">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{ URL::asset('img/1920x1080/02.jpg') }}');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Attain Financial Freedom<br>With an Online Business</h1>
                    @if(Auth::guest())
                    <a href="/register" class="s-btn s-btn--white-brd s-btn--md">Get Started for Free</a>
                    @endif
                </div>
                {{-- <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                    <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                </a> --}}
            </div>
        </div>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{ URL::asset('img/1920x1080/01.jpg') }}');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Learn to Become a<br>Digital Entrepreneur</h2>
                        @if(Auth::guest())
                        <a href="/register" class="s-btn s-btn--white-brd s-btn--md">Get Started for Free</a>
                        @endif
                    </div>
                    {{-- <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                        <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Swiper Wrapper -->

    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->

</div>
<!--========== END SWIPER SLIDER ==========-->