@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'bumblebee')
<img src="https://img.freepik.com/free-vector/illustration-share-icon_53876-5843.jpg?w=740&t=st=1687541781~exp=1687542381~hmac=d5e6e7f563d16036f13a1313ef96d713b0fa055a0160123b3df371c168360e9b" class="logo" alt="bumblebee Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
