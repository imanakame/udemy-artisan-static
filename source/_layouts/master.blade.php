<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
                <strong>{{ $page->site->title }}</strong><br>
                <ul>
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/posts">記事</a></li>
                    <li><a href="/about">About Me</a></li>
{{--                    <li><a href="/contact">Contact</a></li>--}}
                </ul>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
            <small>
                <span data-year></span> {{ $page->owner->name }}
                <a href="{{ $page->owner->twitter }}" target="_blank">Twitter</a> /
                <a href="{{ $page->owner->udemy }}" target="_blank">Udemy</a> /
                <a href="{{ $page->owner->StandFm }}" target="_blank">StandFm</a> /
                <a href="{{ $page->owner->github }}" target="_blank">GitHub</a>
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
