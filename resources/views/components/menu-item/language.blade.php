<li class="hidden-xs"><a href="{{ LaravelLocalization::getLocalizedURL($lang) }}">
        <img src="{{ asset("images/icons/flags/$lang.gif") }}" alt="{{ $lang }} flag">
    </a>
    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{ $localeCode }}" >
                    <img src="{{ asset("images/icons/flags/$localeCode.gif") }}" alt="{{ $properties['native'] }} flag">{{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>
</li>