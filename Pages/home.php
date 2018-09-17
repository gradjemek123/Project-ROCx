<?php

App::pageAuth(['user'], "login");

// Example to get user
// $user = User::findById(1);

// same as above, but different
// $user = DB::getInstance()->prepare('SELECT * FROM users WHERE id = :id');
// $user->execute(['id' => 1]);
// $user = $user->fetchAll(PDO::FETCH_CLASS, 'User');

// dd($user);
?>
<form action="">
	<div class:"container">
		<table content="width=device-width" style="margin:80px auto; margin-left:20px;" class="table table-striped">
			<thead>
				<tr>
			        <th>Materiaal</th>
			        <th>Aantal</th>
			    </tr>
			<tbody>
	      		<tr>
			        <td>PC's</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>
	      		<tr>
			        <td><img src="images/pc.png" width="50px" height="50px"> Beeldschermen</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>
	      		<tr>
			        <td>Voedingskabels</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>
	      		<tr>
			        <td>Adapters</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>
	      		<tr>
			        <td>HDMI</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>
	      		<tr>
			        <td>Muizen</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>
	      		<tr>
			        <td>Toetsenborden</td>
			        <td><input type="number" name="quantity" min="0" max="20"></td>
	      		</tr>

	    </tbody>
			</thead>
		</table>
</div>



</form>