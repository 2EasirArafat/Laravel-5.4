<html>

	<head>
			<title>All Users</title>
	</head>

	<body>
			<h1>User name <?php echo $myname?></h1>
			<h2>ID is<?php echo $id?></h2>
			<h3>Phone is <?php echo $phone?></h3>
			<h4>Address is <?php echo $address?></h4>

			<h1> checking if and else condition </h1>

			@if($address)

			{{$address}}</br>

			@endif


			<h1> Blade Output</h1>

		<h1>User name	{{$myname}} </h1>
		<h2> ID is	{{$id}} </h2>
		<h3> Phone is {{$phone}} </h3>
		<h4> Address is {{$address}} </h4>

		<h1> checking if and else condition </h1>

		@if($address=="Dinajpur")
		{{$address}}</br>

		@else 
		{{"NOT DINAJPUR FOUND"}}

		@endif

		<h1> Show id is exist or not</h1>

		{{$id2 or "NO id"}}

		@for ($i = 0; $i < 10; $i++)
    <h1> The current value is {{ $i }} </h1>
		@endfor
			
			<p>Lorem</p>
			<p>Easir</p>
			<p>Arafat</p>
			<p>Munna</p>
	</body>

</html>