<table>
	@foreach($posts as $post)
	<tr>
		<td>{{ $post['status'] }}</td>
		<td>{{ $post['name'] }}</td>
	</tr>
	@endforeach
</table>