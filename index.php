<!-- PHP START -->
	<?php 
	/*** DATA & ARRAYS ***/

		//VARIABLES
	$ucDomain = "dc.nextiva.com/uc";
	$vvxDomain = "dc.nextiva.com/ucvvx";

		//ARRAYS
		$modelList = array(

			'IP321'		=> "Soundpoint IP321",
			'IP331'		=> "Soundpoint IP331",
			'IP335'		=> "Soundpoint IP335",
			'IP450'		=> "Soundpoint IP450",
			'IP550'		=> "Soundpoint IP550",
			'IP560' 	=> "Soundpoint IP560",
			'IP650' 	=> "Soundpoint IP650",
			'IP5000' 	=> "Soundstation IP5000",
			'IP6000' 	=> "Soundstation IP6000",
			'IP7000' 	=> "Soundstation IP7000",
			'VVX101' 	=> "VVX 101",
			'VVX201' 	=> "VVX 201",
			'VVX300' 	=> "VVX 300",
			'VVX400' 	=> "VVX 400",
			'VVX500' 	=> "VVX 500",
			'VVX600' 	=> "VVX 600",
			'VVX1500' 	=> "VVX 1500");

		$customTags = array(

			'port'		=> "LOCAL_PORT",
			'transfer'	=> "SBC_TRANSPORT",
			'label'		=> "REG_X_LABEL",
			'line'		=> "REG_X_KEYS",
			'ptt'		=> "PTT_KEY",
			'web'		=> "WEBUI",
			'dnd'		=> "DND",
			'echo'		=> "ECHO_CANCELLATION",
			'blf'		=> "BLF_RING",
			'dls'		=> "DST_ENABLE");

?>

<!-- HTML START -->
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
	 <html>
		 <head>
		 	<title>handiVOIP</title>
		 	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans|Prompt|Ubuntu" rel="stylesheet">
		</head>
		<body>
		<div id="wrapper">
			
			<div id="header">
				<div class="tabbable tabs-below">
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
						</div>
						<div class="tab-pane" id="tab2">
						</div>
						<div class="tab-pane" id="tab3">
						</div>
					</div>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Polycom</a></li>
						<li><a href="cisco.html" data-toggle="tab">Cisco</a></li>
						<li><a href="panasonic.html" data-toggle="tab">Panasonic</a></li>
					</ul>
				</div>
			</div><!-- header end -->

			<div id="sidebar" class="column-left">
				<img id="logo" src="http://efreshersjobs.com/wp-content/uploads/2015/07/Polycom-Logo.jpg">
				<ul class="nav nav-list">
					<li class="nav-header">Wiki Quick Links</li>
					<li class="active"><a href="/">Polycom Main Wiki</a></li>
					<li><a href="#">NextOS provisioning</a></li>
					<li><a href="#">Pactolus Provisioning</a></li>
					<li><a href="#">Custom Tags</a></li>
					<li class="nav-header">Polycom Product Links</li>
					<li><a href="#">Owners Manuals</a></li>
					<li><a href="#">Photos</a></li>
					<li class="divider"></li>
					<li><a href="#">Feature List</a></li>
				</ul>
			</div><!-- sidebar end -->

			<div id="content">
			<!-- BEGIN CHANGEABLE CONTENT. -->
				<div id="regServers" class="column-center">
					<table class="table">
						<caption>NextOS Registration Servers</caption>
						<thead>
							<tr>
								<th>Phone Model</th>
								<th>Server Address</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $modelList['VVX101'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "101/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['VVX201'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "201/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['VVX300'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "300/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['VVX400'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "400/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['VVX500'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "500/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['VVX600'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "600/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['VVX1500'] . ":";?></td>
								<td><?php print_r("$vvxDomain" . "1500/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP321'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "321/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP331'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "331/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP335'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "335/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP450'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "450/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP550'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "550/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP560'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "560/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP650'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "650/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP5000'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "5000/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP6000'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "6000/");?></td>
							</tr>
							<tr>
								<td><?php echo $modelList['IP7000'] . ":";?></td>
								<td><?php print_r("$ucDomain" . "7000/");?></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div id="customTags" class="column-right">
					<table class="table">
						<caption>Custom Tags</caption>
						<thead>
							<tr>
								<th>Tags</th>
								<th>Values</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $customTags['transfer'];?></td>
								<td>UDPonly(Default) / TCPonly</td>
							</tr>
							<tr>
								<td><?php echo $customTags['port'];?></td>
								<td>5070 - 5090</td>
							</tr>
							<tr>
								<td><?php echo $customTags['label'];?></td>
								<td>enter line label</td>
							</tr>
							<tr>
								<td><?php echo $customTags['line'];?></td>
								<td>enter number of line appearances</td>
							</tr>
							<tr>
								<td><?php echo $customTags['ptt'];?></td>
								<td>0* , 1</td>
							</tr>
							<tr>
								<td><?php echo $customTags['web'];?></td>
								<td>0* , 1</td>
							</tr>
							<tr>
								<td><?php echo $customTags['dnd'];?></td>
								<td>0, 1*</td>
							</tr>
							<tr>
								<td><?php echo $customTags['echo'];?></td>
								<td>0*, 1</td>
							</tr>
							<tr>
								<td><?php echo $customTags['blf'];?></td>
								<td>1*, 0 </td>
							</tr>
							<tr>
								<td><?php echo $customTags['dls'];?></td>
								<td>1*, 0</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- END CHANGEABLE CONTENT. -->
			</div>

			<!-- <div id="footer">
				<p>Template design by Kevin C.</p>
				<p>&copy; 2011</p>
			</div><!-- footer ends --> -->
		</div>
		</body>
	</html>