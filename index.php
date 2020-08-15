<?php

include ("production.php");

define("logPath", "/var/www/html/log/");

date_default_timezone_set("Asia/Taipei");
$date = date('Y-m-d H:i:s');
define("logFile", "log" . "-" . $date . ".txt");

$production = new production();


$production->addItem("Iphone8",22000);
$production->addItem("Iphone11",31000);
$production->addItem("Iphone11pro",39000);

$map = $production->getAllItem();

// $log->write("start");
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<div class="container">
	<div class="row justify-content-start">
		<div class="col">
			<h1>Welcome!</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<h1><br></h1>
		</div>
	</div>

	<div class= "row justify-content-start">
		<div class="col">
			<table class="table table-hover table-bordered"
				<thead>
				    <tr>
				    	<th>#</th>
				        <th>Name</th>
				        <th>Price</th>
				        <th></th>
				    </tr>
				</thead>
				<tbody>
					
					<?php foreach ($map as $item => $price){ ?>
						<tr>
							<td></td>
							<td><?php echo $item; ?></td>
							<td><?php echo $price; ?></td>
							<td align="center"><button id="<?php echo $item; ?>" type="button" class="btn btn-secondary" value="Insert">Insert</button></td>
							<!-- <td align="center"><input type="submit" class="button" name="insert" value="insert"/></td> -->
						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<?php foreach ($map as $item => $price){ ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        var clickBtnValue = "<?php echo $item ?>";
        $(document).ready(function() {
            $("#" + "<?php echo $item ?>").click(function() { //ID 為 submitExample 的按鈕被點擊時
                $.ajax({
                    type: "POST", //傳送方式
                    url: "service.php", //傳送目的地
                    // dataType: "json", //資料格式
                    data: { //傳送資料
                    	'action': "<?php echo $item ?>"
                    },
                    success: function(data) {
                       alert('Data from the server' + data);
                    },
                    error: function(jqXHR) {
                        // $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
                        // $("#result").html('<font color="#ff0000">發生錯誤：' + jqXHR.status + '</font>');
                    }
                })
            })
        });
</script>

<?php } ?>



