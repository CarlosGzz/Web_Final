

<?php 

	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 20; $i++)
    {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

 ?>