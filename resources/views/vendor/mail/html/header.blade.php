@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://buyhomesecurity.org/frontend/my_img/logo/logo-2.png" class="logo" alt="Laravel Logo" style="height: auto; width:220px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
