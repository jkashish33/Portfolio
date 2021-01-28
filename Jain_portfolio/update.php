<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="portfolio.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<style>
	input[type=text],input[type=email],input[type=textarea],input[type=date],input[type=file]{
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	</style>
</head>
<body>
<div id="wrapper">
<center>
		<div class="header" >
			<span class ="header">Update Profile</span>
		</div>
		</center>
		<nav id="navbar">
						<ul>
							<li><a href="index.html"><strong>Logout</strong></a></li>
							<li><a href="#about"><strong>About</strong></a></li>
							<li><a href="#edu"><strong>Education</strong></a></li>
							<li><a href="#resume"><strong>Resumes</strong></a></li>
							<li><a href="#portfolio"><strong>Portfolio</strong></a></li>
							<li><a href="#ref"><strong>Refrences</strong></a></li>
							<li><a href="#exp"><strong>Experience</strong></a></li>
							<li><a href="#hireme"><strong>Hire Me</strong></a></li>
							<li><a href="#lang"><strong>Language</strong></a></li>
							<li><a href="#profile"><strong>Social Profiles</strong></a></li>
						</ul>
				</nav>
<hr>
<h2 id="about">About Page</h2>
<hr>
	<div>
			<form method="post" >
				User_name:<br>
				<input type="text"  name="Fname">
				<br>
				Email:<br>
				<input type="email"  name="email" >
				<br>
				Phone_No:<br>
				<input type="text"  name="phone" >
				<br>
				Date Of Birth:<br>
				<input type="date"  name="DOB" >
				<br>
				Address:<br>
				<input type="text"  name="address" >
				<br>
				Nationality:<br>
				<input type="text"  name="nationality" >
				<br>
				Signature:<br>
				<input type="file"  name="sign" >
				<br>
				Profile_pic:<br>
				<input type="file"  name="profilepic" >
				<br>
				Summary:<br>
				<input type="textarea"  name="summary" rows="5" col="50"/>
				<br>
				Title:<br>
				<input type="text"  name="title" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>
<br>
<h2 id="edu">Education</h2>
<hr>
	<div>
			<form method="post">
				College:<br>
				<input type="text"  name="college">
				<br>
				Degree:<br>
				<input type="text"  name="degree" >
				<br>
				Start Date:<br>
				<input type="date"  name="sdate" >
				<br>
				End Date:<br>
				<input type="date"  name="edate" >
				<br>
				Description:<br>
				<input type="textarea" rows='5'  name="desc" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>

		<br>
<h2 id="exp">Experience</h2>
<hr>
	<div>
			<form method="post">
				Company:<br>
				<input type="text"  name="company" >
				<br>
				Start Date:<br>
				<input type="date"  name="sdate" >
				<br>
				End Date:<br>
				<input type="date"  name="edate" >
				<br>
				Title:<br>
				<input type="text"  name="title" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>
		<br>
<h2 id="hireme">Hire Me</h2>
<hr>
	<div>
			<form method="post">
				Cost:<br>
				<input type="text"  name="cost" >
				<br>
				Job Title:<br>
				<input type="text"  name="j_title" >
				<br>
				Task:<br>
				<input type="textarea" rows='5'  name="task" >
				<br>
				Job_ID:<br>
				<input type="text"  name="job_id" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>
		<br>
<h2 id="lang">Language</h2>
<hr>
	<div>
			<form method="post">
				Language:<br>
				<input type="text"  name="lang" >
				<br>
				Percentage:<br>
				<input type="percentage"  name="percentage" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>
	<br>	
<h2 id="ref">Refrences:</h2>
<hr>
	<div>
			<form method="post">
				Refrence Name:<br>
				<input type="text"  name="rname" >
				<br>
				Image:<br>
				<input type="file"  name="rimage" >
				<br>
				Job Title:<br>
				<input type="text"  name="rtitle" >
				<br>
				Content:<br>
				<input type="textarea"  name="rcontent" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>
<br>	
<h2 id="resume">Resume:</h2>
<hr>
	<div>
			<form method="post">
				Resume:<br>
				<input type="file"  name="resume" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>	
<br>
<h2 id="profile">Social Profiles:</h2>
<hr>
	<div>
			<form method="post">
				Media:<br>
				<input type="text"  name="Smedia" >
				<br>
				Link:<br>
				<input type="text"  name="link" >
				<hr>
				<button type="submit" id="btn1" class="btn">Update</button>
			</form>
		</div>
<br>
<h2 id="portfolio">Portfolio:</h2>
<hr>
	<div>
			<form method="post">
				Images:<br>
				<input type="file"  name="portfolio" >
				<hr>
				<button type="submit" id="btn1" class="btn">Insert</button>
			</form>
		</div>	
</div>
</body>
</html>