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
		.border-bottom{
			border: none!important;
		}
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
		.parcel-number{
			text-transform: uppercase;
			position: absolute;
			bottom: 7rem;
			left: -7rem;
			transform: rotate(-90deg)
		}
	}
</style>
@if(!isset($userAddress) && empty($userAddress) )
	<script>
		alert('Please add your address details first.');
		location.replace('{{route("home")}}');
	</script>
@endif
<body onafterprint="myFunction()">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="mb-0  table fs-75">
					<thead>
						<tr>
							<th colspan="3" class="border-0 text-center font-size">
								<span class="border-bottom">TO</span>
							</th>
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
								@empty(!$customer->pincode)
									{{$customer->pincode}}
								@else
									{{__('N|A')}}
								@endempty
								</span>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="mb-0 table mt-5">
					<thead>
						<tr>
							<th colspan="3" class="border-0 text-center font-size">
								<span class="border-bottom">From</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold">{{$userAddress->user->name}}</span>
							</td>
						</tr>
						<tr>
							<td class="border-0"> 
								<span class="font-weight-bold">
									{{$userAddress->addressline1}},{{$userAddress->addressline2}}<br>{{$userAddress->addressline3}}
								</span>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold">
								<i class="fas fa-mobile"></i>
								{{$userAddress->pincode}}</span>
							</td>
						</tr>
						<tr>
							<td class="border-0">
								<span class="font-weight-bold" style="margin-left: -2rem">
								<i class="fas fa-map-pin"></i>
								{{$userAddress->number}}</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-4">
				<h2 class="parcel-number">Parcel number - <span id="parcel"></span></h2>
			</div>
		</div>
	</div>	
	<script>
		function myFunction(params) {
			setTimeout(function(){
				window.close();
			}, 500);
		}
		let parcelnumber = prompt('Please enter parcel number.');
		if (typeof parcelnumber == 'string') {
			if(parcelnumber.length){
				$('#parcel').html(parcelnumber);
				window.print();
			}else{
				alert('You can\'t continue without entering a number.')
				location.reload();
			}
		}else{
			alert('You can\'t continue without entering a number.')
			location.reload();
		}
	</script>
</body>
</html>
