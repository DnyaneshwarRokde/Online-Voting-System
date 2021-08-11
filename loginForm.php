
<html>
<head>
	<title>Voting System</title>
</head>
<style>
body{
		margin:0;
		padding:0;
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(2.jpg);
		background-size:cover;
		background-position:center;

	}
nav{
	height:15%;
	background-color:rgba(0,0,0,.2);
	}
	h1{
		position:relative;
		left:40%;
		font-size:60px;
		left:480px;
		top:20px;
		color:#4caf50;
		
	}
	.logo{	
		position:relative;
		top:-110px;
		left:100px;
	}
	

.p1{
		position:absolute;
		font-size:40px;
		padding:10px;
		left:0%;
		top:28%;
		color:yellow;
	
	}
table th{
			color:white;
			border-bottom:#4caf50 solid;
		}
table{
		position:absolute;
		width:30%;
		top:20%;
		font-size:23px;
		left:1%;
		color:#008b8b;
		background-color:rgba(0,0,0,.2);
		border:#4caf50 solid;
	}	
.loginbox {
			position:absolute;
			width:330px;			
			left:80%;	
			top:45%;
			transform:translate(-50%,-50%);
			color:white;
			background:rgba(0,0,0,.2);
			margin:10px;
		}
		
.loginbox h2{
				
				font-size:40px;
				border:6px solid #4caf50;
				margin-bottom:50px;
				padding:13px;
			}
.UNtext{
		width:100%;
		overflow:hidden;
		font-size:20px;
		margin:8px 0;
		padding:8px 0;
		border-bottom:1px solid #4caf50;
	}
	.UPtext{
		width:100%;
		overflow:hidden;
		font-size:20px;
		margin:8px 0;
		padding:8px 0;
		border-bottom:1px solid #4caf50;
	}	

	.UNtext input{
		border:none;
		outline:none;
		background:none;
		color:white;
		font-size:18px;
		width:80%;
		float:left;
		margin:0 10px;
	}
	.UPtext input{
		border:none;
		outline:none;
		background:none;
		color:white;
		font-size:18px;
		width:80%;
		float:left;
		margin:0 10px;
	}
	.submitbtn{
	
		width:100%;
		background:none;
		border:2px solid #4caf50;
		color:white;
		padding:5px;	
		font-size:21px;
		cursor:pointer;
		margin:12px 0;
		transition:.6s;
	}
	.submitbtn:hover{
				background-color:#4caf50;
				color:white;
			}
	.createaccount{
		position:absolute;
			width:330px;			
			left:80%;	
			top:70%;
			transform:translate(-50%,-50%);
			color:red;			
			margin:10px;
	}
	.createaccount a{
		color:white;
		font-size:20px;
	}

	h3{
		position:absolute;
		width:150px;
		font-size:30px;
		color:orange;
		left:45%;	
		top:69%;
		border-bottom:solid;

	}
		
</style>

<body method="post">
	<nav>
		<div >
			<h1>Online Voting System</h1>
			<div class="logo"><img src="logo3.png" width="120" height="80"></div>
			
		</div>
	
	</nav>

<table border="0">
	<tr>
		<th>Importance of Elections in India</th>
	</tr>
	<tr>
		<td><p>Elections form the bedrock of the largest democracy in the world - India. Since Independence, as many as 15 Lok Sabhas have been formed through elections, the first one being held in 1951-52. The methodology of election is through universal adult suffrage, whereby every citizen of India over 18 years of age is an eligible voter in the eyes of the Constitution.
			Elections provide a way to the people to assert their voice, opinion and choose the person whose priorities and ideas matches with them most. In India the elections are not new and they started taking place before the independence from British rule itself. But before independence the franchise was quit limited and very few were having rights to participate and vote. After independence, India adopted universal adult suffrage and each adult Indian got the right to vote.</p></td>
	</tr>
</table>
		<div class="loginbox">
		<h2>User Login</h2>

		<div class="UNtext">
			<input type="text" placeholder="USERNAME">
		</div>

		<div class="UPtext">
			<input type="password" placeholder="PASSWORD" >
		</div>

		
			<input class="submitbtn" type="submit" Value="Submit">
		</div>
		<div class="createAccount">
				<a href="registration_form.php">Dont have an account?</a>
		</div>


</html>
	