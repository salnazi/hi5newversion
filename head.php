<?php
    session_start();
    include ("config/db_connection.php");
    include ("config/func.php");
    include ("config/define_menu.php");
    include ("config/default_date.php");
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo get_title(); ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<link rel="stylesheet" href="css/custom.css">

	<script src="js/jquery-1.7.2.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>  
	<script src="external/jquery.bgiframe-2.1.2.js"></script>
	<script src="ui/jquery.ui.autocomplete.js"></script>

	<script src="ui/jquery.ui.mouse.js"></script>
	<script src="ui/jquery.ui.button.js"></script>
	<script src="ui/jquery.ui.draggable.js"></script>
	<script src="ui/jquery.ui.position.js"></script>
	<script src="ui/jquery.ui.dialog.js"></script>
	<script src="js/combo.js"></script>
	<script src="js/date.js"></script>
	<script src="js/salnazi_custom.js"></script>

	<script language="JavaScript">
		function rollback() {
			window.history.back();
		}
	</script>

	<style type="text/css" title="currentStyle">
		@import "media/css/demo_page.css";
		@import "media/css/demo_table.css";
		@import "media/css/demo_table_jui.css";
		@import "media/css/TableTools.css";
		@import "media/css/jquery-ui-1.8.4.custom.css";
	</style>

	<script type="text/javascript" charset="utf-8" src="media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" src="media/js/ZeroClipboard.js"></script>
	<script type="text/javascript" charset="utf-8" src="media/js/TableTools.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready( function () {
		oTable =	$('#tableview').dataTable( {
				//"sDom": 'T<"clear">lfrtip',
				"bSort": false,
				"bInfo": false
					
			});
		} );
	</script> 

</head>