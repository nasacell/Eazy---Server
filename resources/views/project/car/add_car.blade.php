@extends('main')

@section('content')

<div class="page-content-wrapper">
	<div class="page-content">
          <div class="page-head">
               <div class="page-title">
                    <h1>Data Angkot Baru</h1>
               </div>
          </div>
          <ul class="page-breadcrumb breadcrumb">
               <li>
                    <a href="/">Home</a>
                    <i class="fa fa-circle"></i>
               </li>
               <li>
                    Angkot
                    <i class="fa fa-circle"></i>                    
               </li>
               <li>
                    <span class="active">Tambah Angkot Baru</span>                    
               </li>
          </ul>
		<div class="page-body">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered" id="form_contract">
					     <div class="portlet-body form">
							<form class="form-horizontal" action="#" id="submit_form" method="POST">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab_project" data-toggle="tab" class="step">
													<span class="number"> 1 </span>
                                                   	<span class="desc">
                                                       <i class="fa fa-check"></i> Data Pemilik </span>
												</a>
											</li>
											<li>
												<a href="#tab_boq" data-toggle="tab" class="step">
													<span class="number"> 2 </span>
                                                   	<span class="desc">
                                                       <i class="fa fa-check"></i> Pengaturan Trayek </span>
												</a>
											</li>
											<li>
												<a href="#tab_vendor" data-toggle="tab" class="step">
													<span class="number"> 3 </span>
                                                   	<span class="desc">
                                                       <i class="fa fa-check"></i> Detail Angkot </span>
												</a>
											</li>
										</ul>
									     <div id="bar" class="progress progress-striped">
									     	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
									     </div>
                                                  <div class="tab-content">
                                                  	<div class="alert alert-danger display-none" id="alert_danger">
                                                  		<button class="close" data-dismiss="alert"></button> Data harus dilengkapi terlebih dulu
                                                  	</div>
                                                  	<div class="alert alert-success display-none">
                                                  		<button class="close" data-dismiss="alert"></button> Data berhasil dimasukkan
                                                  	</div>

                                                  	<div class="tab-pane active" id="tab_project">
                                                  		<h3 class="block"> Data Pemilik </h3>
                                                  		<div class="form-group">
                                                  			<label class="control-label col-md-3">
                                                  				Nama Anggota
                                                  				<span class="required"> * </span>
                                                  			</label>
                                                  			<div class="col-md-4">
                                                  				<select  class="form-control required font-blue-sharp" id="nama_proyek" name="nama_proyek">
                                                  					<option>Ahmad Nuruddin</option>
                                                  					
                                                  				</select>
                                                  			</div>
                                                  		</div>
                                                  		<div class="form-group">
                                                  			<label class="control-label col-md-3">
                                                  				Nomor KTP
                                                  				<span class="required"> * </span>
                                                  			</label>
                                                  			<div class="col-md-4">
                                                                      <input class="form-control" type="text" id="barang_l5" value="auto-generated" disabled>
                                                  			</div>
                                                  		</div>
                                                  		<div class="form-group">
                                                  			<label class="control-label col-md-3">
                                                  				Tempat Tanggal Lahir
                                                  				<span class="required"> * </span>
                                                  			</label>
                                                  			<div class="col-md-4">
                                                  				<input class="form-control" type="text" id="barang_l5" value="auto-generated" disabled>
                                                  			</div>
                                                  		</div>
                                                            <div class="form-group">
                                                                 <label class="control-label col-md-3">
                                                                      Alamat
                                                                      <span class="required"> * </span>
                                                                 </label>
                                                                 <div class="col-md-4">
                                                                      <input class="form-control" type="text" id="barang_l5" value="auto-generated" disabled>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group">
                                                                 <label class="control-label col-md-3">
                                                                      Kontak
                                                                      <span class="required"> * </span>
                                                                 </label>
                                                                 <div class="col-md-4">
                                                                      <input class="form-control" type="text" id="barang_l5" value="auto-generated" disabled>
                                                                 </div>
                                                            </div>
                                                  	</div>

                                                  	<div class="tab-pane" id="tab_boq">
                                                  		
                                                      </div>

                                                  	<div class="tab-pane" id="tab_vendor">
                                                  		<h3 class="block">Data Vendor</h3>
                                                  		
                                                  	</div>

                                                  	<div class="tab-pane" id="tab_detail">
                                                  		<h3 class="block">Informasi Detail Alat</h3>
                                                  		
                                                  	</div>
                                                  </div>
									</div>
									<div class="form-actions">
										<div class="row">
                                                  	<div class="col-md-offset-4 col-md-10">
                                                  		<ul class="pager wizard">
          											<li class="previous">
          												<a href="javascript:;" class="btn default button-previous">
          										               <i class="fa fa-angle-left"></i> Back 
          										          </a>
          											</li>
          			  								<li class="next col-md-2">
          				  								<a href="javascript:;" class="btn btn-outline green button-next"> Continue
          		                                                     <i class="fa fa-angle-right"></i>
          		                                                </a>
          	                                                </li>
          										</ul>
                                                      </div>
                                                  </div>
                                             </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('plugins')


<link href="{{ asset('theme/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('theme/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('theme/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/pages/scripts/form-wizard.min.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('theme/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('theme/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('theme/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
	$(document).ready(function() {
  		var $validator = $("#submit_form").validate({
		  rules: {
		    kodetahap: {
		      required: true,
		    },
		    namefield: {
		      required: true,
		      minlength: 3
		    },
		    urlfield: {
		      required: true,
		      minlength: 3,
		      url: true
		    }
		  }
		});

		$('#form_contract').bootstrapWizard({
	  		'tabClass': 'nav nav-pills',
	  		'onNext': function(tab, navigation, index) {
	  			var $valid = $("#submit_form").valid();
	  			if(!$valid) {
	  				$validator.focusInvalid();
	  				return false;
	  			}
	  		},
	  		'onTabClick': function(tab, navigation, index) {
				// alert('on tab click disabled');
				return false;
			},
			
				'onTabShow': function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#submit_form .progress-bar').css({width:$percent+'%'});
					$('#alert_danger').hide();
				}
			
	  	});
		$('#date_kontrak').datepicker();
		$('#date_deadline_pekerjaan').datepicker();
		$('#list_boq').DataTable();
	});

</script>
@endsection