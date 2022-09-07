<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h4 class="text-center">Post</h4>
        <div class="row">
            <?php
            $ch = curl_init();
            $id=['.$user->id.'];
            echo $_GET['$id'];
            $url = "https://jsonplaceholder.typicode.com/users/.$user->id./posts";
            curl_setopt($ch, CURLOPT_URL, $url);
		   // This option will return data as a string instead of direct output
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_data = curl_exec($ch);
            curl_close($ch);
            $response_data = json_decode($curl_data);
            $user_data = $response_data;

		echo "<table class='table table-hover'>";
			echo "<thead class='thead-light'>";
                echo"<tr class='text-center'>";
                    echo"<th>ID</th>";
                    echo"<th>Nombre</th>";
                    echo"<th>Nombre de Usuario</th>";
                    echo"<th>Email</th>";
                echo"</tr>";
			echo "<thead>";
            foreach ($user_data as  $posts){
			echo"<tbody>";
                echo"<tr>";
                    echo"<td>".$posts->id.   "</td>";
                    echo"<td>".$posts->userId."</td>";
                    echo"<td>".$posts->title."</td>";
                    echo"<td>".$posts->body."</td>";
                    //echo"<td>".$user->body."></td>";
                echo"</tr>";
            echo"</tbody>";
            }
        echo"</table>";
            ?>
        </div>
    </div>

</body>

</html>