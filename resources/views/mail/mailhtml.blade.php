<p
	style="font-family: 'Open Sans', Arial, sans-serif;margin-top: 0;margin-bottom: 15px;font-size: 16px;line-height: 22px;color: #555;">
	Hello,
	<br><br>
	You have received a new form submission from the wesbite.<br>
	You can see details below:
</p>
<p
	style="font-family: 'Open Sans', Arial, sans-serif;margin-top: 0;margin-bottom: 15px;font-size: 16px;line-height: 22px;color: #555;">
	<b>Subject:</b>&nbsp;{{ $subject }}<br><br>
	
</p>
<p
	style="font-family: 'Open Sans', Arial, sans-serif;margin-top: 0;margin-bottom: 15px;font-size: 16px;line-height: 22px;color: #555;">
	@foreach($data as $key => $node)
	- <b>{{ ucfirst($key) }}</b>:&nbsp;&nbsp;{{ $node }}<br>
	@endforeach
</p>
<p
	style="font-family: 'Open Sans', Arial, sans-serif;margin-top: 0;margin-bottom: 15px;font-size: 18px;line-height: 22px;color: #555;">
	<br>
	Have a nice day!
</p>