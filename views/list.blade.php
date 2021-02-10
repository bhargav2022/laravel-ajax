@foreach($pro as $value)
<tr>
<td>{{ $value-id }}</td>
<td>{{ $value-name }}</td>
<td>{{ $value-price }}</td>
<td>{{ $value-desc }}</td>
<td>{{ $value-qty }}</td>
<td>{{ $value-discount }}</td>
<td><a href="">Edit</a></td>
<td><a href="">Delete</a></td>
</tr>
@endforeach
