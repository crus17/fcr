@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
        <img src="{{ asset ('home/images/logo-dark.png')}}" alt="{{ config('app.name') }}" width= "150">
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <div class="footer-body">
                <h3>Any questions? we're here to help.</h3>
                <div class="footer-row">
                    <div class="footer-col">
                        <img src="images/email.svg" alt="">
                        Email us
                    </div>
                    <div class="footer-col">
                        <img src="images/call.svg" alt="">
                        Call us
                    </div>
                    <div class="footer-col">
                        <img class="footer-img" src="images/chat.svg" alt="">
                        Chat
                    </div>
                </div>
            </div>
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
