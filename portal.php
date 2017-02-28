<?php include "_header.php" ?>
<body>
	<div id="sideNavContainer" class="bg-primary">
		<?php include 'sideNav.php' ?>
	</div>
	<div id="portalMainContent" class="col-md-10">
		<?php
    include 'resources.php';
			$current_page = isset($_GET['page']) ? $_GET['page'] : null;
			switch ($current_page) {
				case ('overview'):
					include 'overview.php';
					break;
				case ('checklist'):
					include 'checklist.php';
					break;
				case ('applications'):
					include 'applications.php';
					break;
				case ('colleges'):
					include 'colleges.php';
					break;
				case ('majors'):
					include 'majors.php';
					break;
				case ('statistics'):
					include 'statistics.php';
					break;
				case ('resources'):
					include 'resources.php';
					break;
				case ('settings'):
					include 'settings.php';
					break;
				default:
					break;
			}
		?>
	</div>
</body>
