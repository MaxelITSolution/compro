<?php
	$work = $_POST['work'];
	$result = "";

	if($work == "default"){
		$result .= "<h4>
					Not only software and website
                    <br> we also work in computer networks and 
                    <br>hardware procurement. 
                    </h4>";
		echo $result;
	}

	if($work == "software"){
		$result .= "<h4>
					<strong style='color:#ae6665;'>Software </strong>Development
					  <br>
					We create application for desktop 
					<br>and apps for android.
                    </h4>";
		echo $result;
	}

	if($work == "website"){
		$result .= "<h4>
					<strong style='color:#dfba54;'>Website </strong>Development
					  <br>
					Don't know how to create a beautiful website?
					<br><br> Someone please call ...
					<br><strong>BIT</strong>Solution !!!
                    </h4>";
		echo $result;
	}

	if($work == "internet"){
		$result .= "<h4>
					<strong style='color:#bfdf54;'>Internet </strong>Connection
					<br>
					Even your problem in love connection,
					<br>can we handle. Wanna try?
                    </h4>";
		echo $result;
	}

	if($work == "hardware"){
		$result .= "<h4>
					<strong style='color:#2AB0C5;'>Hardware </strong>Procurement
					<br>
					  <div class='col-md-12' style='text-align:left;'>
					  	<div class='col-md-2' style='text-align:left;'></div>
					  	<div class='col-md-4' style='text-align:left;margin-left:20%;'>
							<span class='glyphicon glyphicon-check' style='font-size:14px;margin:0;color:grey;'></span>&nbsp;&nbsp; Desktop Application
							    <br>
							<span class='glyphicon glyphicon-check' style='font-size:14px;margin:0;color:grey;'></span>&nbsp;&nbsp; Apps for Android
							  <br>
							<span class='glyphicon glyphicon-check' style='font-size:14px;margin:0;color:grey;'></span>&nbsp;&nbsp; Website
							  <br>
							<span class='glyphicon glyphicon-check' style='font-size:14px;margin:0;color:grey;'></span>&nbsp;&nbsp; Internet Connection
					  	</div>
					  </div>
					  <div class='col-md-12' style='text-align:center;margin-top:-40px;margin-bottom:-10px;'>
						Ummm... Hardware ? 
						<br><strong>Check !!</strong>
					</div>
                    </h4>";
		echo $result;
	}

?>