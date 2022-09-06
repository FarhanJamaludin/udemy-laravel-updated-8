@component('mail::message')
# Someone has a posted a blog post

Be sure to proof read it. 

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
