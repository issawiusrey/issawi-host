<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>غرفة المحامين</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="غرفة المحامين" name="description" />
        <meta content="ESLAM SAEED" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon 
        <link rel="shortcut icon" href="../assets/images/favicon.ico">-->
		<link href="assets/libs/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
		 <!-- Summernote css -->
        <link href="assets/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />
        <!-- third party css -->
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
		  <!-- Plugin css -->
        <link href="assets/libs/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/chat.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		 <link href="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="authentication-bg authentication-bg-pattern" style="background-color: #363b62;">
        <div class="account-pages mt-3 mb-2">
            <div class="container" style="max-width: 100%!important;">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <a href="index">
										<span><img src="assets/images/logo-dark.png" alt="" height="80"></span>
                                    </a>
                                </div><br>
                         <h4 class="auth-title">إنشاء عضوية جديدة</h4>
						 <form id="addoffers" method="post" enctype="multipart/form-data" > 
							<div class="col-md-12">
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<div class="form-group">
											<label for="field-1" class="control-label">إسم العضو</label>
											<input type="text" name="name" class="form-control"  required>
										</div>
									</div>
									<div class="col-xl-6 col-md-12">
										<div class="form-group">
											<label for="field-1" class="control-label">رقم التلفون</label>
											<input type="text" name="phone" class="form-control"  required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<div class="form-group">
											<label for="example-select">المحافظة</label>
											<select class="custom-select" name="provinces_id" required>
												<option value="يرجى إختيار محافظتك" ></option>
													<?php
													include('connectdb.php');
													 $query_provinces = $db->prepare("SELECT * FROM  provinces where provinces_st='1'");
													 $query_provinces->execute();
															while ($row_provinces = $query_provinces->fetch(PDO::FETCH_ASSOC))
																{
																$name_provinces = $row_provinces['provinces'];
																$id_provinces = $row_provinces['id'];		?>
																 <option value ="<?php echo $id_provinces;?>" ><?php echo $name_provinces ; ?></option>
															<?php	}?>
											</select>
										</div>
									</div>
									<div class="col-xl-6 col-md-12">
										<div class="form-group">
											<label for="field-1" class="control-label">العنوان بالتفصيل</label>
											<input type="text" name="address" class="form-control">
										</div>
									</div>
								</div>
							</div>
					
							<div class="col-md-12">
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<div class="form-group">
											<label for="field-1" class="control-label">رقمك بالنقابة</label>
											<input type="text" name="union_number" class="form-control"  required>
										</div>
									</div>
									<div class="col-xl-6 col-md-12">
											<div class="form-group">
											<label for="field-1" class="control-label">الرقم القومى </label>
											<input type="text" name="national_id" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<div class="form-group">
											<label for="emailaddress">البريد الالكتروني</label>
											<input type="email"  name="email" class="form-control"  required>
										</div>
									</div>
									<div class="col-xl-6 col-md-12">
											<div class="form-group">
												<label for="password">الرقم السرى</label>
											<input  class="form-control" type="password" name="password" class="form-control"  required>
										</div>
									</div>
						
								</div>
							</div>
							<div class="media mb-1 mt-1">
								<div class="media-body">
									<div class="mb-2">
									   <div  id="attach_files_link" class="dropzone" >
											<div class="dz-message">
												<div class="drag-icon-cph">
												<i class="mdi mdi-upload mr-2" style="font-size: 40px;"></i>
												</div>
												<h4>إضغط هنا لرفع صورتك الشخصية أو صورة كارنية النقابة</h4>
											   <div class="fallback">
												<input name="cr_att_files" type="file"/>
											   </div>
											</div>
											<input type="hidden" name="files_list" value="0"></input> 
										</div> 
									</div> 
								</div> 
							</div>
							<div class="dropzone-previews mt-3" id="file-previews"></div>
							<button type="submit" class="btn btn-dark btn-block">إنشاء عضوية جديدة</button>
								</form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
		<!-- Footer Start -->
        <footer class="footer footer-alt">
            2022 &copy;<a style="color:#fff!important;" href="https://www.facebook.com/eslam.saeed.9809672" target="_blank"> ESLAM SAEED</a>
        </footer>
        <!-- end Footer -->
        <script src="assets/js/vendor.min.js"></script>
		 <!--Summernote js-->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>
        <script src="assets/js/pages/email-summernote.init.js"></script>
        <!-- third party js -->
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
        <!-- Init js-->
         <script src="assets/libs/dropzone/dropzone.min.js"></script>
		<!-- Init js-->
        <script src="assets/js/pages/form-fileuploads.init.js"></script>
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>
		<script src="assets/libs/jquery-blockui/jquery.blockui.js"></script>
     <!-- Plugins js-->
        <script src="assets/libs/moment/moment.min.js"></script>
        <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/daterangepicker/daterangepicker.js"></script>
        <!-- Init js-->
        <script src="assets/js/pages/form-pickers.init.js"></script>
        <!-- App js -->
		<!-- Init js-->
        <!-- Tickets js -->
        <script src="assets/js/pages/tickets.js"></script>
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
		 
	
<!--=============================================================================-->
  <script>	
    var fileslist = [];
    $("div#attach_files_link").dropzone({
    url: 'system/control/member/dropzone/dropezone_upload.php',
	paramName: 'file',
	clickable: true,
	maxFilesize: 5,
	uploadMultiple: false, 
	maxFiles: 1,
	addRemoveLinks: true,
	removedfile: function(file) {
    var filename = file.newdata;
	console.log(filename);
    $.ajax({
	type: 'POST',
	url: 'system/control/member/dropzone/dropezone_delete.php',
	data: {filename:filename},
	dataType: 'html'
         });
	console.log("files list :"+fileslist);
	var itemtodelete = filename;
		console.log("item to delete:"+itemtodelete);
	console.log("before:"+fileslist);
    var index = fileslist.indexOf(itemtodelete);
    if (index > -1) {
       fileslist.splice(index, 1);
                    }
    console.log("after:"+fileslist);

    $('input[name=files_list]').val(fileslist);
	var _ref;
    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                                },

	dictDefaultMessage: 'Upload your files here',
	autoProcessQueue: true,
	error: function(file,response){
    Swal.fire({type:"warning",title:"معلومات",text:response,confirmButtonClass:"btn btn-confirm mt-2"})
			                      },
    success: function(file, response)
		{
	var obj = JSON.parse(response);
	console.log("xxxx :"+obj.validator);
	if (obj.validator == "success" ) {
	var original_name = obj.final_file
	var microtimerec = obj.microtimerec
	fileslist.push( microtimerec+original_name.replace(/[""]/g, "").replace(/ /g,"-"));
	$('input[name=files_list]').val(fileslist);
	var fileuploded = file.previewElement.querySelector("[data-dz-name]");
	fileuploded.innerHTML = microtimerec+original_name.replace(/[""]/g, "");
	file.newdata = microtimerec+original_name.replace(/[""]/g, "").replace(/ /g,"-");
	$.unblockUI();
	}else{
	$.unblockUI();
	Swal.fire({type:"warning",title:"خطأ",text:"لم تتم عملية الرفع .. تأكد من اتصالك بالانترنت",confirmButtonClass:"btn btn-confirm mt-2"})
		}
	setTimeout(function() {
	$('#insert_pic_div').hide();
	$('#startEditingDiv').show();
						  }, 2000);
		},
        init: function () {
	this.on("maxfilesexceeded", function (file) { this.removeFile(file); });
	this.on("error", function(file, message, xhr) { 
   if (xhr == null) this.removeFile(file); // perhaps not remove on xhr errors
   console.log(message);
												  });
	myDropzone = this;
		
		$(document).on('submit','form#addoffers',function(e){
		if(myDropzone.files.length > 0) {
			
		swal.fire({
		title: "رسالة تأكيد",
		text: "تأكيد عملية إضافة عضوية جديدة",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "تأكيد",
		cancelButtonText: "إلغاء",
		preConfirm: ()=>{
		
		$.blockUI({ 
	    message:  '<p font-family:cairo;font-size:10px;>جارى حفظ بيانات العضوية برجاء الإنتظار</p>',
		css: { 
		border: 'none', 
		padding: '15px', 
		backgroundColor: '#000', 
		'-webkit-border-radius': '10px', 
		'-moz-border-radius': '10px', 
		opacity: .5, 
		color: '#fff' 
           } });
		
        $.ajax({
		type: "POST",
		url: "system/control/member/add.php",
		crossDomain: true,
		dataType: 'json', 
		data: $('#addoffers').serialize(),
        complete: function () {
                 $.unblockUI();
				
            },
                    success: function(data) {
                        if (data['validator'] == "success" ) {
							
		$.unblockUI();
			 Swal.fire({type:"success",title:"تم إضافة العضوية بنجاح",text:"عملية ناجحة",confirmButtonClass:"btn btn-confirm mt-2"}).then(function (result) {
				if (result.value) {
						location.replace("user/index.php"); 
				}
			})						}else{
			console.log("failed");
			  $.unblockUI();
			Swal.fire({type:"warning",title:"خطأ",text:"هذا الإيميل مسجل بالفعل ... برجاء تسجيل الدخول",confirmButtonClass:"btn btn-confirm mt-2"})
						}
                    }
					,
						error: function(jqXHR, textStatus, errorThrown){
						alert("error" + errorThrown);
						}
                });	
          }
	})
	myDropzone.on("queuecomplete", function (file) {
		if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
	$('input[name=files_list]').val(fileslist);
	console.log($("input[name=files_list]").val());
	$.event.trigger({
	type: "uploadfinished",
	message: "Dropzone Files upload finished",
            });
      }else{
	  }
      });
	   myDropzone.on("sending", function (file) {
        $.event.trigger({
            type: "uploadstarted",
            message: "Dropzone File upload started",
        });
    });
			myDropzone.processQueue(); 
				}else{
			   Swal.fire({type:"warning",title:"معلومات",text:"رجاء قم برفع صورة كارنية النقابة أو صورتك الشخصية لإستكمال بيانات عضويتك",confirmButtonClass:"btn btn-confirm mt-2"})
			   e.preventDefault(e);
					}
			return false;
										});
			console.log("initialized");
			}
	});
	   $(document).on("uploadfinished", function(event){
			$("button[type='submit']").attr('disabled', '');
		});
		$(document).on("uploadstarted", function(event){
			$("button[type='submit']").attr('disabled', 'disabled');
		});
    </script>
    </body>
</html>