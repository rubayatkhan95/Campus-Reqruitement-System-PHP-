<?php include "../service/person_service.php"; ?>



<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $organizations = getPersonsByName($searchKey);
    }


     else 
     {
        $organizations = getAllPersons();
    }
?>



<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Organization Profile</title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

					<nav align="right">

						<button type="button" onclick="location.href='org_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='org_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='org_whoWeAre_view.php'"><font color="red" size="4em" /><b/>Who We Are</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='homepage.php'"><font color="red" size="4em" /><b/>Log Out</button>
					</nav>
			</td>
		</tr>
		<tr>
			<!-- Changes will apply here -->
<!--<tr align="left" >
			<td></td>
			<td colspan="2">
				<nav>
					<button type="button" onclick="location.href='S_home.html'">Home</button>
					<button type="button" onclick="location.href='S_profile.html'">Profile</button>
					<button type="button" onclick="location.href='S_job_offer.html'">Job Offers</button>
					<button type="button" onclick="location.href='login.html'">Log Out</button>
					
				</nav>
			</td>
		</tr>-->
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="6em" color="#F78541">
					
				<b/><span>Search Employee</span>
				</font></legend>
				<br><br>
				<ul>
			
				    <span><a href="org_postAJob_view.php"style="text-decoration:none"><font color="teal" size="5em" />Post A Job</a></span>
					<hr width="150" align="left" size="5">
					
					 <span><a href="org_joblist_view.php" style="text-decoration:none"><font color="teal" size="5em" />Job List</a></span>
					<hr width="150" align="left" size="5">
					
					
					<span><a href="org_searchEmployee_view.php"style="text-decoration:none"><font color="teal" size="5em" />Search Employee</a></span>
					<hr width="150" align="left" size="5">
					
				</ul>
			</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							Shamim
						</h2>
					</legend>


								<table>
									<fieldset>
    <legend>Search Employee</legend>

    <form method="post">                
        <input name="search"/>
        <input type="submit" value="SEARCH"/>                
    </form>
    <br>

    <table border="2" cellspacing="0" cellpadding="5">
    	<tr>
                <th><h4><font color="red">Name</font></h4></th>
                <th><h4><font color="red">Email</font></h4></th>
                <th><h4><font color="red">Gender</font></h4></th>
                <th><h4><font color="red">Mobile_No</font></h4></th>
                <th><h4><font color="red">Experience</font></h4></th>
                 <th><h4><font color="red">skills</font></h4></th>
                
            </tr>
        <?php if (count($organizations) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($organizations as $organization) { ?>
        		

            <tr>
                <td><?= $organization['name']?></td>
                <td><?= $organization['email']?></td>
                <td><?= $organization['gender']?></td>

                <td><?= $organization['mobile_no']?></td>
                <td><?= $organization['experience']?></td>
                <td><?= $organization['skills']?></td>
               
            </tr>
        <?php } ?>
    </table>
</fieldset>
   			

										



											<br><br>
											<br><br>
											<span><font color="white" size="5em" />Email To</span>
										    <input size="30"  type="text" value="">
											
											<br><br>
											<br><br>
											
											<span><font color="white" size="5em" />Message Body</span>
										    <textarea placeholder="type your message here.." rows="3"style="height:80px;width:800px;maxlength:1200">
											
											</textarea>
											<span>
											<font color="teal" size="4em" />
											<em>0<em>
											/1200
											</span>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											
											<button type="submit" onclick="#"><font color="red" size="4em" /><b/>Cancel</button>
											<button type="submit" onclick="#"><font color="green" size="4em" /><b/>Send</button>
										</td>
										
										
										
										
										
										
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="right">
				<td colspan="2">
					<h5 align="center">
						<font color="white">
							<!--<input type="search" id="mySearch" name="mysearch">
    						<button>Search</button>
    					-->
						</font>
					</h5>
				</td>
			</tr>
	</table>
</body>
</html>



