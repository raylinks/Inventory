@component('mail::message')
HAFFINITY FASHION-OUTLET
<h1>You are one of us, {{$users->name}}</h1>

Thanks So much for Patronizing our Store.

-one
-two
-three
-four

@component('mail::button', ['url' => 'https://goggle.com'])
Start browsing
@endcomponent

@component('mail::panel', ['url' => ''])
    21,Finbars Road, YABA
    hope to see you again, ....WE OFFER THE BEST

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
