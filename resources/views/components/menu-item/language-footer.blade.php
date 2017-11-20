@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    /<a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" class="light-text-color" hreflang="{{ $localeCode }}" >
        {{ $properties['native'] }}
    </a>
@endforeach

