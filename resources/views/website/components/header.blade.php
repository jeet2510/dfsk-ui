<header>
	<h2>Header</h2>


	<primary-logo-component></primary-logo-component>
	{{ $config_values['contact_email'] }}

<h2>Other Languages</h2>
	@foreach ($otherlangpageslinks as $title => $link)
	<a href="{{ url($link)  }}">{{ $title }}</a> |
	@endforeach
	<br>_____________________________<br>
	<ul>
    @php
        $lang = app()->getLocale();
        $activesite = App\Models\Site::where('language_code', $lang)->orWhere('isdefault', 1)->first();
        $site_id = $activesite ? $activesite->id : null;
    @endphp
    
    @foreach ($headermenu as $fm)
        @if($fm->site_id == $site_id)
            <li>
                @php
                    $link = route('page', ['slug' => $fm->PageLink()]);
                    if (strpos($fm->PageLink(), 'https://') !== 0 && strpos($fm->PageLink(), 'javascript:') !== 0) {
                        $link = $fm->PageLink();
                    }
                    $active = Route::current()->parameters()['slug'] == $fm->slug ? 'active' : '';
                @endphp
                
                <a href="{{ $link }}" class="{{ $active }}">
                    {{ $fm->title }}
                </a>
                
                @if($fm->pages()->count() > 0)
                    <ul class="submenu">
                        @foreach ($fm->pages as $submenu)
                            <li>
                                @php
                                    $linksub = route('page', ['slug' => $submenu->PageLink()]);
                                    if (strpos($submenu->PageLink(), 'https://') !== 0 && strpos($submenu->PageLink(), 'javascript:') !== 0) {
                                        $linksub = $submenu->PageLink();
                                    }
                                    $subActive = Route::current()->parameters()['slug'] == $submenu->slug ? 'active' : '';
                                @endphp
                                
                                <a href="{{ $linksub }}" class="{{ $subActive }}">
                                    {{ $submenu->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endif
    @endforeach
</ul>

</header>