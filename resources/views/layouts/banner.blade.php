<!--========== PROMO BLOCK ==========-->
<div class="banner-area js__parallax-window" style="background: url({{ URL::asset('img/1920x1080/02.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs pt-128-mobile g-padding-y-0--md">
        <div class="g-margin-b-60--xs">
        	@if(isset($page_header))
            	<h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1 banner-title">{{ $page_header }}</h1>
            @else
            	<h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1 banner-title">New Age Startup</h1>
            @endif
        </div>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->