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

<div class:"container">
	<table content="width=device-width" style="margin:80px auto; margin-left:20px;" class="table table-striped">
		<thead>
			<tr>
		        <th>Materiaal</th>
		        <th>Aantal</th>
		    </tr>
		</thead>
	</table>
</div>