<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title><?php echo $title; ?> | MicroHRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url(); ?>tpl/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>tpl/css/simple-sidebar.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>tpl/css/datepicker3.css" rel="stylesheet" id="bootstrap-css">

    <script src="<?php echo base_url(); ?>tpl/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>tpl/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>tpl/js/bootstrap-datepicker.js"></script>

    <link id="bsdp-css" href="<?php echo base_url(); ?>/tpl/css/bootstrap-datepicker3.css" rel="stylesheet">

</head>
<body>
        <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       MicroHRM
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="<?php echo base_url(); ?>employee/">List Employees</a></li>
                    <li><a href="<?php echo base_url(); ?>employee/add">Add Employee</a></li>
                    <li><a href="<?php echo base_url(); ?>employee/unsuspend">Unsuspend Employee</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaction <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="<?php echo base_url(); ?>transaction/">List Transactions</a></li>
                    <li><a href="<?php echo base_url(); ?>transaction/process">Process Transaction</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="https://twitter.com/adilj13">Follow me</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>