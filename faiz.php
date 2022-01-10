<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Faiz Facilities Management System | Manage Attendance</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="../../images/logo.png">

<link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">

<link rel="stylesheet" href="../../css/bootstrap.min.css">

<link rel="stylesheet" href="../../css/font-awesome.min.css">

<link rel="stylesheet" href="../../css/owl.carousel.css">
<link rel="stylesheet" href="../../css/owl.theme.css">
<link rel="stylesheet" href="../../css/owl.transitions.css">

<link rel="stylesheet" href="../../css/animate.css">

<link rel="stylesheet" href="../../css/normalize.css">

<link rel="stylesheet" href="../../css/meanmenu.min.css">

<link rel="stylesheet" href="../../css/main.css">

<link rel="stylesheet" href="../../css/morrisjs/morris.css">

<link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">

<link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">

<link rel="stylesheet" href="../../css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="../../css/calendar/fullcalendar.print.min.css">

<link rel="stylesheet" href="../../css/editor/select2.css">
<link rel="stylesheet" href="../../css/editor/datetimepicker.css">
<link rel="stylesheet" href="../../css/editor/bootstrap-editable.css">
<link rel="stylesheet" href="../../css/editor/x-editor-style.css">

<link rel="stylesheet" href="../../css/data-table/bootstrap-table.css">
<link rel="stylesheet" href="../../css/data-table/bootstrap-editable.css">

<link rel="stylesheet" href="../../style.css">

<link rel="stylesheet" href="../../css/responsive.css">

<script src="../../js/vendor/modernizr-2.8.3.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
</head>
<body>
<div class="left-sidebar-pro">
    <?php echo $sidebar; ?>
</div>

<div class="all-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo-pro">
<a href="index.html"><img class="main-logo" src="#" alt="" /></a>
</div>
</div>
</div>
</div>
<div class="header-advance-area">
<div class="header-top-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php echo $header;  ?>

</div>
</div>
</div>
</div>

<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mobile-menu">
<nav id="dropdown">
<ul class="mobile-menu-nav">
<li><a data-toggle="collapse" data-target="#Charts" href="<?php echo base_url(); ?>admin/main/dashboard">Dashboard<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a></li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Company"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Company<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Company/company_view">Company Details</a></li>
<li><a href="<?php echo base_url(); ?>admin/Company/bank_acc_view">Manage Bank Acc</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Service"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Service<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Service/service_view">Manage Services</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/manage_hsncode">HSN/SAC</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/manage_uom">UOM</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Billing & PO"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Billing & PO<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Service/add_billing_view">E-billing</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/add_purchase_order_view">PO Management</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/manage_purchase_order">Manage PO</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/paymentTerms_view">Payment Terms</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/billing_reports_view">Billing Reports</a></li>
<li><a href="<?php echo base_url(); ?>admin/Service/bill_payments_view">Manage Bills</a></li>
<!-- <li><a href="<?php echo base_url(); ?>admin/Service/expense_view">Expenses Reports</a></li> -->
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Clients"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Clients<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Client/clients_list">Manage Clients</a></li>
<li><a href="<?php echo base_url(); ?>admin/Branch/branch_view">Manage Branches</a></li>
<li><a href="<?php echo base_url(); ?>admin/Branch/asset_view">Manage Assets</a></li>
<li><a href="<?php echo base_url(); ?>admin/Branch/change_item_details">Change Item Details</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Vendors"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Vendors<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Vendor/vendor_view">Manage Vendors</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Payroll"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Payroll<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Department/department_view">Manage Departments</a></li>
<li><a href="<?php echo base_url(); ?>admin/Designation/designation_view">Manage Designations</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Employees"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Employees<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Employee/add_employee_view">Add Employee</a></li>
<li><a href="<?php echo base_url(); ?>admin/Employee/employee_view">Manage Employees</a></li>
<li><a href="<?php echo base_url(); ?>admin/Attendance/attendance_view">Daily Attendance</a></li>
<li><a href="<?php echo base_url(); ?>admin/Attendance/manage_attendance">Manage Attendance</a></li>
<li><a href="<?php echo base_url(); ?>RMS/attendance.php">Attendance Reports</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Complaints"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="#">Complaints<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="<?php echo base_url(); ?>admin/Ticket/ticket_view">Complaints Received</a></li>
</ul>
</li>
<li <?php $flag=0; $autority = $this->session->userdata('permission'); if(isset($autority)){ $allAutority = explode(",", $autority); for($i=0; $i<count($allAutority);$i++){ if($allAutority[$i] == "Inventory"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;'"; } } ?>><a <?php if($flag == 0){ echo "style='display:none;'"; } ?> data-toggle="collapse" data-target="#Charts" href="<?php echo base_url(); ?>inventory" target="_blank">Inventory<span <?php if($flag == 0){ echo "style='display:none;'"; } ?> class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="breadcome-heading">

</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<!--<ul class="breadcome-menu">
<li><a href="#">Home</a> <span class="bread-slash">/</span>
</li>
<li><span class="bread-blod">Dashboard V.1</span>
</li>
</ul>-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
			       <?php echo $this->session->flashdata('msg'); ?>

             <div class="col-md-8" style="margin-top:50px;">
                    <form method="post" action="<?php echo site_url(); ?>admin/Attendance/export_manage_attendance">
                          <div class="col-md-2">
                              <input type="number" min="1" max="31" name="export_date" class="form-control" value="<?php echo date("d"); ?>" />
                          </div>
                          <div class="col-md-2">
                              <input type="number" min="1" max="12" name="export_month" class="form-control" value="<?php echo date("m"); ?>" />
                          </div>
                          <div class="col-md-2">
                              <input type="number" min="2015" max="<?php echo date("Y"); ?>" name="export_year" class="form-control" value="<?php echo date("Y"); ?>" />
                          </div>
                         <div class="col-md-2">
                             <input type="submit" name="export" class="btn btn-success"  value="Export" />
                         </div>
                    </form> 

             </div>
<div class="data-table-area mg-tb-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Manage Attendance<span class="table-project-n"></span> </h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">
<div id="toolbar">
<select class="form-control">
<option value="">Export Basic</option>
<option value="all">Export All</option>
<option value="selected">Export Selected</option>
</select>
</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
<tr>
<th data-field="state" data-checkbox="true"></th>
<!--<th data-field="id">ID</th>-->
<th data-field="id" class="text-center">S.NO</th>
<th data-field="Attendance Date" data-sortable="true">Attendance Date</th>
<th data-field="Employee Name" data-sortable="true">Employee Name</th>
<th data-field="Attendance Status" data-sortable="true">Attendance Status</th>
<th data-field="Branch Name" data-sortable="true">Branch Name</th>
<!--<th data-field="Branch Location" data-sortable="true">Branch Location</th>-->
<th data-field="Comment" data-sortable="true">Comment</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>

	<?php
	$cnt = 1;
	if(!empty($attendances))
	{

	foreach($attendances as $row)
	{

	?>

<tr>
<td></td>
<td><?php echo $cnt++; ?></td>
<td><?php echo  $row->attendance_date; ?></td>
<td><?php echo $row->first_name; ?><?php echo $row->last_name; ?></td>
<td><?php echo $row->status; ?></td>
<?php
    $b_location = "";
    foreach($branches as $row_branch){
                                if($row_branch->id == $row->client_id)
                                   $b_location = $row_branch->client_name." - ".$row_branch->branch_name;
                          }
?>
<td><?php echo $b_location; ?></td>
<!--<td><?php //echo $row->branch_name; ?></td>-->
  <td><?php echo $row->comment; ?></td>


<td>

<a rel="tooltip" title="Edit" class="btn btn-link btn-warning table-action edit" href="edit_attendance_view/<?php echo $row->id;?>">
<i class="fa fa-edit"></i>
</a>

<a rel="tooltip" title="Remove" class="btn btn-link btn-danger table-action remove" onClick="return confirm('Are you sure you want to delete?')" href="delete_attendance/<?php echo $row->id;?>">
                       <i class="fa fa-trash"></i>
 </a>
</td>
</tr>

<?php
}
}
else
{
?>

<tr><td colspan="6">NO RECORD FOUND</td></tr>
	<?php
	  }
	?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 <?php echo $footer; ?>
</div>

<script src="../../js/vendor/jquery-1.11.3.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/bootstrap.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/wow.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/jquery-price-slider.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/jquery.meanmenu.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/owl.carousel.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/jquery.sticky.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/jquery.scrollUp.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/scrollbar/jquery.mCustomScrollbar.concat.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/scrollbar/mCustomScrollbar-active.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/metisMenu/metisMenu.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/metisMenu/metisMenu-active.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/data-table/bootstrap-table.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/tableExport.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/data-table-active.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/bootstrap-table-editable.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/bootstrap-editable.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/bootstrap-table-resizable.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/colResizable-1.5.source.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/data-table/bootstrap-table-export.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/editable/jquery.mockjax.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/editable/mock-active.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/editable/select2.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/editable/moment.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/editable/bootstrap-datetimepicker.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/editable/bootstrap-editable.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/editable/xediable-active.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/chart/jquery.peity.min.js" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script src="../../js/peity/peity-active.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/tab.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/plugins.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script src="../../js/main.js" type="ac64c699268bb52d938f506f-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="ac64c699268bb52d938f506f-text/javascript"></script>
<script type="ac64c699268bb52d938f506f-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../client_login_css/js/rocket-loader.min.js" data-cf-settings="ac64c699268bb52d938f506f-|49" defer=""></script></body>
</html>