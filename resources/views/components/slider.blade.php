@php
    $componentName="slider_item";
    $componentData= \Modules\General\Http\Controllers\GeneralController::initComponent($componentName);
@endphp
<section id="slider" class="swiper_wrapper full-screen clearfix" data-loop="true" data-autoplay="5000">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            @foreach($componentData as $item)
                <div class="swiper-slide" style="background-image: /*linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.4) 100%),*/  url('{{$item->getImageUrl() }}');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-right" style="max-width: 700px;">
                            @if($item['title_'.$lang])
                                <h2 data-caption-animate="fade" class="text-center" style="-webkit-border-radius:2em ;-moz-border-radius:2em ;border-radius:2em ;padding:15px 20px 15px 20px;background:linear-gradient(to bottom, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.6) 100%)">{{$item['title_'.$lang]}}</h2>
                            @endif
                            {{--<p data-caption-animate="flipInX" data-caption-delay="500">Our Team of Doctors are specialized in Various Disciplines to make sure you get the Best Treatment.</p>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</section><!-- #slider end -->