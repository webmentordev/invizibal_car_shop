@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
    <img src="{{ asset('assets/images/invizibal_logo.png') }}" class="logo" alt="Laravel Logo">
    {{-- {{ $slot }} --}}
</a>
</td>
</tr>
