@php
    $codeToFlagMap = [
        'en' => \Nnjeim\World\Models\Country::where('iso2', 'GB')->first()->emoji,
        'ro' => \Nnjeim\World\Models\Country::where('iso2', 'RO')->first()->emoji,
    ];

    $codeToLanguageMap = [
        'en' => 'English',
        'ro' => 'Română',
    ];

    $flags = [];

    foreach ($codeToFlagMap as $code => $flag) {
        $flags[$code] = $flag;
    }

    $sessionLanguage = session('language');
@endphp

<div id="filter-section-2">
    <div class="flex items-center">
        <form action="{{ route('language.switch') }}" method="POST">
            @csrf
            <label>
                <select name="language" onchange="this.form.submit()"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($codeToLanguageMap as $code => $language)
                        @if(!is_null($sessionLanguage))
                            <option
                                value="{{ $code }}" {{ $sessionLanguage === $code ? 'selected' : '' }}>{{ $flags[$code] . ' ' . $code }}</option>
                        @else
                            <option
                                value="{{ $code }}" {{ $code === request()->getPreferredLanguage(['en', 'ro']) ? 'selected' :  ''}}>{{ $flags[$code] . ' ' . $code }}</option>
                        @endif
                    @endforeach
                </select>
            </label>
        </form>
    </div>
</div>
