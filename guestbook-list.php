<?php
require('config/config.php');
require('config/db.php');

$sql = "SELECT ID,Last_name, First_name,Address,Log_date from person";
$result = mysqli_query($conn,$sql);

?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($result as $results) : ?>
                    <tr>
                    <th scope="row"><?php echo $results['ID'];?></th>
                    <td><?php echo $results['Last_name'];?></td>
                    <td><?php echo $results['First_name'];?></td>
                    <td><?php echo $results['Address'];?></td>
                    <td><?php echo $results['Log_date'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>