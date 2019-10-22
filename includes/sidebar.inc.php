<ul>
					<li>
	
						<b>Login:</b><br> <input type="text">
						<br>
						<br>
						<b>Password:</b><br><input type"text">
					</li>
					<li>
						<h2>categories </h2>
						<ul>
						
<?php
$con = mysqli_connect('localhost','root','','jobscope');

if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'jobscope'))
{
	echo'Can not Select Refered Database';
}
$q="SELECT * FROM categories";
$res=mysqli_query($con,$q) or die("cant connect");
while($row=mysqli_fetch_assoc($res))
{
	echo '<li><a href="jobs_by_category.php">'.$row['cat_nm'].'</a></li>';
}
mysql_close($con);
?>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							<li><a href="jobs_by_category.php">IT-software service</a></li>
							<li><a href="jobs_by_category.php">IT-hardware service</a></li>
							<li><a href="jobs_by_category.php">Atomobile</a></li>
							<li><a href="jobs_by_category.php">Banking</a></li>
							<li><a href="jobs_by_category.php">Construction</a></li>
							<li><a href="jobs_by_category.php">Engineering design</a></li>
						    <li><a href="jobs_by_category.php">Export-Inport</a></li>
					        <li><a href="jobs_by_category.php">Travel</a></li>
							<li><a href="jobs_by_category.php">AirLine</a></li>
							<li><a href="jobs_by_category.php">Telecom</a></li>
							<li><a href="jobs_by_category.php">Insurance</a></li>



						</ul>
					</li>
					
				</ul>