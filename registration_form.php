
<html>
<head>
<title></title>
<style>
	body{
			margin:0;
			padding:0;
			
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(1.jpg);
		}
	table{
			position:absolute;
			left:35%;
			top:18%;
			width:37%;
			height:79%;
			border: solid orange;
			border-radius:20px;
			color:white;
		}
		table th{
				font-size:30px;
				border-bottom:solid orange;
				
		}
	label{	
			font-size:20px;		
	}
	input{
			border:none;
			background:none;
			border-bottom:solid;
			color:white;
			width:65%;
	}
	.selectClass{
		width:80%;	
	}
	#btn
	{
		border:none;
		background-color:orange;
		
		width:40%;
		height:60%;
		border-radius:20px;
	}
	#r1{
		width:20px;
	}
	#r2{
		width:20px;
	}
	.ta{
		border:none;
		height:60%;
		background-color:white;
		border:solid white;
		color:black;
	}
</style>
</head>
<body>
<form method="post" action="registration_form.php">

	<table border=0> 
		<tr >
			<th colspan=4>Registraion Form</th>
		</tr>
		<tr>	
			<td align=center>
			<label>Enter Name</label>
			</td>
			<td>:-</td>
			<td>
				<input type="text" placeholder="Enter Your Name" required>
			</td>
			
		</tr>

		<tr>
			<td align=center>
			<label>Mail ID</label>
			</td>
			<td>:-</td>
			<td>
				<input type="text" placeholder="Enter Your Mail ID" required>
			</td>
		</tr>

		<tr>
			<td align=center>
			<label>Mobile No</label>
			</td>
			<td>:-</td>
			<td>
				<input type="text" placeholder="Enter Mobile No" required>
			</td>
		</tr>

		<tr>
			<td align=center>
				<label>Gender</label>
			</td>
			<td>:-</td>
			<td>
				<input type="radio"  id="r1">Male<input type="radio" id="r2">Female
			</td>

		</tr>
		<tr>
			<td align=center>	
			<label>Address</label>
			</td>
			<td>:-</td>
			<td><input type="textarea" class="ta" placeholder="Address" required></td>	
		</tr>
		<tr>
			<td align="center" colspan=4>
			<input type="submit" value="Submit" id="btn">			
				<input type="reset" value="Reset" id="btn">
			</td>
		</tr>
	</table>

</form>
</body>
</html>
