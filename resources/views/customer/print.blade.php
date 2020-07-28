<html>
<head>
	<title>PrintOut</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
</head>
<style> td,tr{
	text-align: center;
	margin: 0!important;
	padding: 0!important;
}
th{
	font-weight: 1000;
}
.fs-75{
	font-size: 30px;
}
	@media print{
		@page {size: landscape}
		.row
		{
          transform: scale(1.05);
          margin-top: 1rem;/*
          margin-left: 3rem;
          margin-right: -5rem;*/
		}
		.fs-75 td span{
			font-size: 35px;
		}
		td{
			/*height: 5rem;*/
			/*vertical-align: middle!important;*/
		}
		.mt-5 td span{
			font-size: 25px!important;
		}
		.mt-5{
			margin-top: 6rem!important;
		}
		th{
			font-family: sans-serif;
			text-decoration: underline;
			font-size: 45px!important;
		}
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="mb-0  table fs-75">
					<thead>
						<tr>
							<th colspan="3" class="border-0 text-center font-size">TO</th>
						</tr>
					</thead>
					<tbody class="text-justify ">
						<tr>
							<td class="border-0">
								<span class="font-weight-bold">{{$customer->customername}}</span>
							</td>
						</tr>
						<tr>

							<td class="border-0"> 
								<span class="font-weight-bold">
									{{$customer->addressline1}}
								</span><br>
								<span class="font-weight-bold">
									{{$customer->addressline2}}
								</span><br>
								<span class="font-weight-bold">
									{{$customer->addressline3}}
								</span>
							</td>
						</tr>
							<td class="border-0">
								<span class="font-weight-bold">
								<i class="fas fa-mobile"></i>
								{{$customer->number}}</span>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold" style="margin-left: -2rem">
								<i class="fas fa-map-pin"></i>
								{{$customer->pincode ? '$customer->pincode':'N|A'}}</span>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="mb-0 table mt-5">
					<thead>
						<tr>
							<th colspan="3" class="border-0 text-center font-size">From</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold">{{'Shree Balaji Photocopiers'}}</span>
							</td>
						</tr>
						<tr>
							<td class="border-0"> 
								<span class="font-weight-bold">
									{{'Shop no 211, 2nd floor Grain house'}}<br>{{'Chawani ,Indore'}}
								</span>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold">
								<i class="fas fa-mobile"></i>
								{{9630035421}}</span>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold" style="margin-left: -2rem">
								<i class="fas fa-map-pin"></i>
								{{452001}}</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
	<script>
		window.print();
	</script>
</body>
</html>
