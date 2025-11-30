@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
					<h3 class="page-title">Employee</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Employee</li>
					</ul>
					</div>
					<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
					<div class="view-icons">
						<a href="{{ route('all-employee-card') }}" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
						<a href="{{ route('all-employee-list') }}" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
					</div>
					</div>
				</div>
			</div>
			<div class="row filter-row">
				<div class="col-sm-6 col-md-3">
					<div class="form-group form-focus">
					<input type="text" class="form-control floating">
					<label class="focus-label">Employee ID</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="form-group form-focus">
					<input type="text" class="form-control floating">
					<label class="focus-label">Employee Name</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="form-group form-focus select-focus">
					<select class="select floating">
						<option>Select Designation</option>
						<option>Web Developer</option>
						<option>Web Designer</option>
						<option>Android Developer</option>
						<option>Ios Developer</option>
					</select>
					<label class="focus-label">Designation</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="#" class="btn btn-success btn-block"> Search </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
					<table class="table table-striped custom-table datatable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Employee ID</th>
								<th>Email</th>
								<th>Mobile</th>
								<th class="text-nowrap">Join Date</th>
								<th>Role</th>
								<th class="text-right no-sort">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
									<a href="profile.html">StarCode Kh <span>Web Designer</span></a>
								</h2>
								</td>
								<td>FT-0001</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="046e6b6c6a606b6144617c65697468612a676b69">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
									<a href="profile.html">Richard Miles <span>Web Developer</span></a>
								</h2>
								</td>
								<td>FT-0002</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c4e555f545d4e58515550594f7c59445d514c5059125f5351">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>18 Mar 2014</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
									<a href="profile.html">John Smith <span>Android Developer</span></a>
								</h2>
								</td>
								<td>FT-0003</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7ada8afa9b4aaaeb3af87a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>1 Apr 2014</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
									<a href="profile.html">Mike Litorus <span>IOS Developer</span></a>
								</h2>
								</td>
								<td>FT-0004</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5b8bcbeb0b9bca1baa7a0a695b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>1 Apr 2014</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
									<a href="profile.html">Wilmer Deluna <span>Team Leader</span></a>
								</h2>
								</td>
								<td>FT-0005</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="47302e2b2a223523222b32292607223f262a372b226924282a">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>22 May 2014</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
									<a href="profile.html">Jeffrey Warden <span>Web Developer</span></a>
								</h2>
								</td>
								<td>FT-0006</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="147e71727266716d63756670717a54716c75796478713a777b79">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>16 Jun 2013</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
									<a href="profile.html">Bernardo Galaviz <span>Web Developer</span></a>
								</h2>
								</td>
								<td>FT-0007</td>
								<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6d0f081f030c1f09020a0c010c1b04172d08150c001d0108430e0200">[email&#160;protected]</a></td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>
								<div class="dropdown">
									<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Software Engineer</a>
										<a class="dropdown-item" href="#">Software Tester</a>
										<a class="dropdown-item" href="#">Frontend Developer</a>
										<a class="dropdown-item" href="#">UI/UX Developer</a>
									</div>
								</div>
								</td>
								<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
		<div id="add_employee" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title">Add Employee</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">First Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Last Name</label>
								<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Username <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Password</label>
								<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Confirm Password</label>
								<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
								<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Phone </label>
								<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Company</label>
								<select class="select">
									<option value="">Global Technologies</option>
									<option value="1">Delta Infotech</option>
								</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label>Department <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Department</option>
									<option>Web Development</option>
									<option>IT Management</option>
									<option>Marketing</option>
								</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label>Designation <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Designation</option>
									<option>Web Designer</option>
									<option>Web Developer</option>
									<option>Android Developer</option>
								</select>
								</div>
							</div>
						</div>
						<div class="table-responsive m-t-15">
							<table class="table table-striped custom-table">
								<thead>
								<tr>
									<th>Module Permission</th>
									<th class="text-center">Read</th>
									<th class="text-center">Write</th>
									<th class="text-center">Create</th>
									<th class="text-center">Delete</th>
									<th class="text-center">Import</th>
									<th class="text-center">Export</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Holidays</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Leaves</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Clients</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Projects</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Tasks</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Chats</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Assets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Timing Sheets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div id="edit_employee" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title">Edit Employee</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">First Name <span class="text-danger">*</span></label>
								<input class="form-control" value="John" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Last Name</label>
								<input class="form-control" value="Doe" type="text"> 
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Username <span class="text-danger">*</span></label>
								<input class="form-control" value="johndoe" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" value="johndoe@example.com" type="email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Password</label>
								<input class="form-control" value="johndoe" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Confirm Password</label>
								<input class="form-control" value="johndoe" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
								<input type="text" value="FT-0001" readonly="" class="form-control floating">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
								<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Phone </label>
								<input class="form-control" value="9876543210" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label class="col-form-label">Company</label>
								<select class="select">
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
									<option selected="">International Software Inc</option>
								</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label>Department <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Department</option>
									<option>Web Development</option>
									<option>IT Management</option>
									<option>Marketing</option>
								</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label>Designation <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Designation</option>
									<option>Web Designer</option>
									<option>Web Developer</option>
									<option>Android Developer</option>
								</select>
								</div>
							</div>
						</div>
						<div class="table-responsive m-t-15">
							<table class="table table-striped custom-table">
								<thead>
								<tr>
									<th>Module Permission</th>
									<th class="text-center">Read</th>
									<th class="text-center">Write</th>
									<th class="text-center">Create</th>
									<th class="text-center">Delete</th>
									<th class="text-center">Import</th>
									<th class="text-center">Export</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Holidays</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Leaves</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Clients</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Projects</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Tasks</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Chats</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Assets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Timing Sheets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Save</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal custom-modal fade" id="delete_employee" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
					<div class="form-header">
						<h3>Delete Employee</h3>
						<p>Are you sure want to delete?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
							</div>
							<div class="col-6">
								<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- /Page Wrapper -->
@endsection
