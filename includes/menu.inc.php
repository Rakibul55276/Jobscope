
			<ul>
				<li><a href="index.php" class="first">Home</a></li>
				<li><a href="category.php">category</a></li>
				<li><a href="contact.php">contact</a></li>
				<li><a href="verify.php">Verify Job</a></li>
				<li><a href="View_Employee.php">View Employee</a></li>
				<li><a href="View_Employer.php">View Employer</a></li>
				<?php
	
				if(isset($_SESSION['status']))
				{
					echo '<li><a href="process_logout.php">Logout</a></li>';
				}
	
				?>
				
			</ul>
		