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
        <h4 class="text-center">Usuarios</h4>
        <div class="row">
            <?php
            $ch = curl_init();
            $url = "https://jsonplaceholder.typicode.com/users";
            curl_setopt($ch, CURLOPT_URL, $url);
		   // This option will return data as a string instead of direct output
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_data = curl_exec($ch);
            curl_close($ch);
            $response_data = json_decode($curl_data);
            $user_data = $response_data;

		echo "<table class='table table-hover'>";
			echo "<thead class='thead-dark'>";
                echo"<tr class='text-center'>";
                    echo"<th>ID</th>";
                    echo"<th>Nombre</th>";
                    echo"<th>Nombre de Usuario</th>";
                    echo"<th>Email</th>";
                    echo"<th>Tel.</th>";
                    echo"<th>Sitio Web</th>";
                    echo"<th>Publicaciones</th>";
                    echo"<th>Tareas</th>";
                    echo"<th>Test</th>";
                echo"</tr>";
			echo "<thead>";
            foreach ($user_data as  $user){
			echo"<tbody>";
                echo"<tr>";
                    echo"<td>".$user->id.   "</td>";
                    echo"<td>".$user->name."</td>";
                    echo"<td>".$user->username."</td>";
                    echo"<td>".$user->email."</td>";
                    echo"<td>".$user->phone."</td>";
                    echo"<td>".$user->website."</td>";
                    echo"<td>".'<a class="btn btn-primary" role="button" href="posts.php/'.$user->id.'">Post</a>'."</td>";
                    echo"<td>".'<a class="btn btn-primary" role="button" href="https://jsonplaceholder.typicode.com/users/'.$user->id.'/todos">Todos</a>'."</td>";
                    echo"<td>".'<a class="btn btn-primary" role="button" href="posts.php?.$user->id.=<?php echo urlencode('.$user->id.');?>">Test</a>'."
            </td>";
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