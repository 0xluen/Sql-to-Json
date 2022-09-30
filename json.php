<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/json; charset=utf-8');
	?>

<?php
				$pdo_ = $connect->query("SELECT * FROM  table ORDER BY No DESC LIMIT 0,1");
				$table = $pdo_->fetchAll(PDO::FETCH_ASSOC);
				$json = json_encode($table);
                 print_r ($json);

			?>
	

