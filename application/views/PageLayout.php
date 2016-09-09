<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8" />
        <title>Tariqi : Admin Panel</title>
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.theme.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/animate.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/BoxComponant.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/MK_Styles.css" rel="stylesheet">
    </head>
    <body>
      <!----- Header ------------------------------------>
        <?php $this->load->view('header')?>
      <!---- /Header -------------------------------------->
      <!----- DataSection ------------------------------------>
        <section class="DataSection">
            <div class="DataContent">
            
            </div>
        </section> 
      <!----- /DataSection ------------------------------------>

      <!----MainMenuOverlayForm---------------------------------------------------------------->
            <div class="OverLayForm closed" id="MainMenuOverlayForm">
                <div class="container-fluid OverLayFormHeaderCustome">
                       <div class="row CustomRow">
                            <div class="OverLayFormHeaderRight">
                                 <span class="fa fa-close ExitBtn"></span>
                            </div>
                       </div>
                </div>
                <div class="container-fluid OverLayFormContent ">
                    <div class="col-md-offset-4 col-md-4 MainMenuDiv">
                        <img src="<?php echo $this->config->base_url(); ?>_/images/logo.png" alt="Logo">
                        <ul>
                            <li><a href="#" onclick="getPage('HomeView','ViewsCtrl',1);CloseOverLay('MainMenuOverlayForm');">الرئيسية</a></li>
                            <li><a href="#" onclick="getPage('CountriesView','ViewsCtrl',1);CloseOverLay('MainMenuOverlayForm');">بيانات البلاد </a></li>
                            <li><a href="#" onclick="getPage('PackagesView','ViewsCtrl',1);CloseOverLay('MainMenuOverlayForm');">إدارة الإشتراكات</a></li>
                            <li><a href="#" onclick="getPage('TripsView','ViewsCtrl',1);CloseOverLay('MainMenuOverlayForm');">عروض الرحلات</a></li>
                            <li><a href="#" onclick="getPage('AboutView','ViewsCtrl',1);CloseOverLay('MainMenuOverlayForm');">عن البرنامج</a></li>
                        </ul>
                    </div>
                </div>
            </div>
      <!----------------------------------------------------------------------------------- -->

      <!--------------------------------------- Scripts ----------------------------------- -->  
        <script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.12.1.min.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.min.js"></script>  
        <script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js"></script>  
        <script src="<?php echo $this->config->base_url(); ?>_/js/perfect-scrollbar.min.js"></script>    
        <script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).on("click", ".ExitBtn", function ()
            {
                $(this).closest(".OverLayForm").removeClass("show");
                $(this).closest(".OverLayForm").addClass("closed");
            });
            $(document).on("click", ".OverLayFormBtn", function ()
            {
                $(this).closest(".OverLayForm").removeClass("show");
                $(this).closest(".OverLayForm").addClass("closed");
            });
            function ShowOverLay(OverLayId){ 
                $("#"+OverLayId).removeClass("closed");
                $("#"+OverLayId).addClass("show");
                var x = $("#cbp-spmenu-s2").hasClass("cbp-spmenu-open");
             if(x){
                ShowPushRightSideBar('cbp-spmenu-s2','DataSection');
               }
            }//ShowOverLay
            //---------------------------CloseOverLay----------
            function CloseOverLay(OverLayId){ 
                $("#"+OverLayId).removeClass("show");
                $("#"+OverLayId).addClass("closed");
            }//ShowOverLay
            //---------------------------getPage----------
            function getPage(name,controller,flag) {
                if(flag == 1){
                    $('.DataContent').html('<img class="LoadingImg" src="<?php echo $this->config->base_url(); ?>_/images/Loading.gif" />');
	                jQuery.ajax({
	                    url: "<?php echo $this->config->base_url(); ?>/index.php/" + controller + "/"+ name,
		                type: "POST",
		                success:function(data){$('.DataContent').html(data);}
	                });
                }else if(flag == 2){
                    $('.SideBarContent').html('<img class="LoadingImg" src="<?php echo $this->config->base_url(); ?>_/images/Loading.gif" />');
                    jQuery.ajax({
		                url: "<?php echo $this->config->base_url(); ?>" + controller + "/"+ name,
		                type: "POST",
		                success:function(data){$('.SideBarContent').html(data);}
	                });
                }
            }//getPage
            //-------------------------- Change Value : Get Result Depend on input Change Value ----------
            function ChangeValue(inputsValues, Controller, FunctionName, ResultDivId){
                
                var inputData = inputsValues;
                var dataSend = JSON.stringify(inputData);
                $.ajax({
                         type: 'POST', 
                         url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                         data: {data : dataSend}
                      })
                      .done(function (data) {
                          $("#"+ ResultDivId).html(data);
                     
                     });  
            }
            //-------------------------- SubmitForm using AJAX --------------------------------
            function SubmitFormv(FormID, Controller, FunctionName, ResultDivId ,ClosedContainer,containerType,Message) {
                 var Fvalid= $("#"+FormID).valid();  
                  if(Fvalid){    
                   var formData = $("#"+FormID).serialize();
						$.ajax({
                            type: 'POST', 
                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        })
                        .done(function (data) {
                            $("#"+ ResultDivId).html(data);
                            if(Message != "none")
                            {
                              $('#'+Message).fadeIn().delay(1000).fadeOut();
                            }
                        });
                        $("#"+FormID)[0].reset();
                        if(containerType != 0 ){
                            if(containerType == 1 ){
                                CloseOverLay(ClosedContainer);
                            }else if( containerType == 2){
                                ShowLeftSideBar(ClosedContainer);
                            }
                        }
                 }
			 }
             //-------------------------- Close Modal ----------
             function closeModal(ModalID) { 
                $('#'+ ModalID).modal('toggle');
             }
        </script> 
    </body>
</html>
