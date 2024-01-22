<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/table_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:39:31 GMT -->
<head>
	<meta charset="utf-8" />
	<title>BookBarns</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/bootstrap/bootstrap4/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE CSS STYLE ================== -->
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/AutoFill-2.2.0/css/autoFill.bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/ColReorder-1.3.3/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/FixedColumns-3.2.2/css/fixedColumns.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/FixedHeader-3.1.2/css/fixedHeader.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/KeyTable-2.2.1/css/keyTable.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Responsive-2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/RowGroup-1.0.0/css/rowGroup.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/RowReorder-1.2.0/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Scroller-1.4.2/css/scroller.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Select-1.2.2/css/select.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/loader/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="page-header-fixed page-sidebar-fixed fade">
		<!-- BEGIN #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- BEGIN container-fluid -->
			<div class="container-fluid">
				<!-- BEGIN mobile sidebar expand / collapse button -->
				<?php include_once("aheader.php");?>
				<!-- END header navigation right -->
			</div>
			<!-- END container-fluid -->
			<!-- BEGIN header-search-bar -->
			<div class="header-search-bar">
                <form action="#" method="POST" name="search_bar_form">
                    <div class="form-group">
                        <div class="left-icon"><i class="ti-search"></i></div>
                        <input type="text" class="form-control" id="header-search" placeholder="Search infinite admin..." />
                        <a href="javascript:;" data-dismiss="search-bar" class="right-icon"><i class="ti-close"></i></a>
                    </div>
                </form>
			</div>
			<!-- END header-search-bar -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="sidebar sidebar-inverse">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<?php include_once("navigation.php")?>
			</div>
			<!-- END scrollbar -->
			<!-- BEGIN sidebar-minify-btn -->
			<a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ti-arrow-left"></i></a>
			<!-- END sidebar-minify-btn -->
		</div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="content">
			<!-- BEGIN breadcrumb -->
			
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">
				Inquiries
			</h1>
			<!-- END page-header -->
			
			<!-- BEGIN table -->
			<table id="datatables-default" class="table table-striped table-condensed table-bordered bg-white">
				<thead>
					<tr>
						<th style="white-space: nowrap">#</th>
<!-- 						<th style="white-space: nowrap">InquiryID</th> -->
<!-- 						<th style="white-space: nowrap"></th> -->
                        <th style="white-space: nowrap">Book</th>
					    <th style="white-space: nowrap">UserName</th>
						<th style="white-space: nowrap">message</th>
						<th style="white-space: nowrap">Inquiry On</th>
						<th style="white-space: nowrap">Replied By</th>
						<th style="white-space: nowrap">Reply</th>

					</tr>
				</thead>

				<tbody>

								<?php
							foreach ($inquiries as $i) {
								?>
								<tr>
									
					<td><?php echo $i->inquiryid ?></td>
					<!-- <td>
				<img src="<?php echo base_url("resources/shared/images/$i->image")?>" height="75px" width="75px"></td> -->
					<td><?php echo $i->bookname ?></td>
				    <td><?php echo $i->uname?></td>
					<td><?php echo $i->message?></td>
					<td><?php echo $i->datetime?></td>

    				<td><?php echo $i->username?></td>
    				
       				<td><?php echo $i->reply?></td>
					</td>
					</tr>
 	<?php
                       }
					?>
				</tbody>
			</table>
			<!-- END table -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #page-container -->
	

	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/cookie/js/js.cookie.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/tooltip/popper/popper.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/bootstrap/bootstrap4/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/JSZip-3.1.3/jszip.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/pdfmake-0.1.27/build/pdfmake.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/pdfmake-0.1.27/build/vfs_fonts.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/pdfmake-0.1.27/build/vfs_fonts.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/AutoFill-2.2.0/js/dataTables.autoFill.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/AutoFill-2.2.0/js/autoFill.bootstrap.min.js"></script><!-- 
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/js/dataTables.buttons.min.js"></script> -->
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/js/buttons.bootstrap.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/js/buttons.colVis.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/js/buttons.flash.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Buttons-1.3.1/js/buttons.print.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/ColReorder-1.3.3/js/dataTables.colReorder.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/FixedColumns-3.2.2/js/dataTables.fixedColumns.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/FixedHeader-3.1.2/js/dataTables.fixedHeader.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/KeyTable-2.2.1/js/dataTables.keyTable.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Responsive-2.1.1/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Responsive-2.1.1/js/responsive.bootstrap.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/RowGroup-1.0.0/js/dataTables.rowGroup.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/RowReorder-1.2.0/js/dataTables.rowReorder.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Scroller-1.4.2/js/dataTables.scroller.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/table/DataTables/Select-1.2.2/js/dataTables.select.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/js/page/table-data.demo.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableData.init();
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/table_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:40:39 GMT -->
</html>
