<span class="dropup">
  <a data-toggle="dropdown"  class="dropdown-toggle light-text-color"  href="{{ LaravelLocalization::getLocalizedURL($lang) }}">
    {{--  <img src="{{ asset("images/icons/flags/$lang.gif") }}" alt="{{ $lang }} flag">--}}{{LaravelLocalization::getCurrentLocaleNative()}}
  </a>
    <span class="caret"></span>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <li class="clearfix">
              <a class="clearfix" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{ $localeCode }}" >
                  <img class="f{{$left}} clearfix" src="{{ asset("images/icons/flags/$localeCode.gif") }}" alt="{{ $properties['native'] }} flag"><span class="f{{$right}} clearfix">{{ $properties['native'] }}</span>
              </a>
          </li>
      @endforeach
  </ul>
</span>
