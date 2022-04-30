
</<!DOCTYPE html>

<html>
<head>
   
</head>
<body>

<h1>All Information</h1>


 @foreach ($message as $message)
<li> {{ $message}}  </li>
@endforeach

<h1>Only Email</h1>

@foreach ($message as $message)

<li> {{ $message->name}}  </li>

@endforeach

<h1>Only Message</h1>

@foreach ($message as $message)

<li> {{ $message->description}}  </li>

@endforeach

</body>
</html>