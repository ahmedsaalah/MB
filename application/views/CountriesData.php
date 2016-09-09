            <div class="container-fluid CustomeContainer">
                <div class="row CustomRow">
                    <div class="DataContainer box-wider-text col-md-12">
                          <div class="box-header">
                            <div class="row CustomeRow">
                                <div class="boxHeaderLeft">
                                    <ul class="nav navbar-nav row CustomeRow">
                                        <li><a href="#" onclick="ShowOverLay('AddDescriptionOverlayForm');">إضافة تفاصيل بلد</a></li>
                                    </ul>
                                </div>
                                <div class="boxHeaderRight">                  
                                    <h3>بيانات البلاد</h3>
                                </div>
                            </div>
                            <hr>
                          </div>
                          <div class="box-body">
                            <div class="table-responsive" id="ResultTable">
                                <table class='table table-bordered table-hover table-condensed' id='AgentsTable'>
                                   <thead>
                                        <tr>
                                          <th>المسلسل</th>
                                          <th>البلد</th>
                                          <th>تفاصيل </th>
                                          <th class="tbicons">الصور</th>
                                          <th class="tbicons">حذف </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                        <td>1</td>
                                        <td>egypt</td>
                                        <td>egypt سشؤسيشسشي شس شيسسي يس سي ش يش</td>
                                        <td ><a href="#" onclick="ShowOverLay('MatchedOffersOverlayForm');"><span class="fa fa-image"></span></a></td>
                                        <td ><a type='button' href="#" class='delete-offer' data-toggle='modal' data-target='#DeleteRequest'><span class="fa fa-trash"></span></a></td>
                                       </tr>
                                   </tbody>
                                </table>
                            </div>
                          </div>
                          <div class="box-footer">
                            <div class="row CustomeRow">
                               <div class="footer-left">
                                   
                               </div>
                               <div class="footer-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li><a href="#"><span>&laquo;</span></a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#"><span>&raquo;</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                             </div>
                          </div>
                    </div>
                </div>
            </div>

            <!----MatchedOffersOverlayForm---------------------------------------------------------------->
            <div class="OverLayForm closed" id="MatchedOffersOverlayForm">
                  <div class="container-fluid OverLayFormHeader">
                       <div class="row CustomRow">
                            <div class="OverLayFormHeaderLeft">
                                 <span class="fa fa-close ExitBtn"></span>
                            </div>
                            <div class="OverLayFormHeaderRight">
                                <h2> الصور</h2>
                            </div>
                       </div>
                   </div>
                   <div class="row CustomRow OverlayTabPanel" id="allOffersContentDiv" >
                        <div class="col-md-3">
                            <div class="box-wider-text">
                                <div class="box-header">
                                    <img src="<?php echo $this->config->base_url(); ?>_/images/hotel3.jpg" alt="Photo">
                                </div>
                                <div class="box-footer">
                                    <div class="row CustomRow">
                                        <div class="HeaderLeft">   
                                             <a href="#"class="btn btn-sucess" onclick="ChangeValue([$(this).closest('div').children('.OfferId').val()], 'HomeCtrl', 'RefuseOffers', 'allOffersContentDiv');"><span class="fa fa-times"></span></a>     
                                        </div>
                                        <div class="HeaderRight">   
                                            <h3>Image Name.png</h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-wider-text">
                                <div class="box-header">
                                    <a href="#" data-toggle='modal' data-target='#AddPhotoModal' class='itemImage'>
                                        <div class="hoverEffect"></div>
                                        <img src="<?php echo $this->config->base_url(); ?>_/images/add.png" alt="Photo">
                                    </a>
                                </div>
                                <div class="box-footer">
                                    <div class="row CustomRow">
                                        <div class="HeaderLeft">   
                                          
                                        </div>
                                        <div class="HeaderRight">   
                                            <h3>Add New Image</h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
            </div>
      <!----AddDemandOverlayForm---------------------------------------------------------------->
            <div class="OverLayForm closed" id="AddDescriptionOverlayForm">
                  <div class="container-fluid OverLayFormHeader">
                       <div class="row CustomRow">
                            <div class="OverLayFormHeaderLeft">
                                 <span class="fa fa-close ExitBtn"></span>
                            </div>
                            <div class="OverLayFormHeaderRight">
                                <h2> إضافة تفاصيل بلد</h2>
                            </div>
                       </div>
                   </div>
                  <form action="#" method="post" id="add">
                      <div class="container-fluid OverLayFormContent">
                           <div class="FormSection">
                                <div class="SectionHeader">
                                     <h3>بيانات البلد</h3>
                                </div>
                                <div class="SectionContent">
                                        <div class="form-group formLayout col-md-6 CustomFormDiv right">
                                            <label for="requesttype" class="control-label ">البلد: </label>
                                            <select class="form-control" name="requesttype" > 
                                                
                                            </select>
                                        </div>
                                        <div class="form-group formLayout col-md-6 CustomFormDiv">
                                            <label for="requesttype" class="control-label ">المدينة: </label>
                                            <select class="form-control" name="requesttype" > 
                                                
                                            </select>
                                        </div>
                                    <div class="form-group formLayout ">
						                <label for="notes" class="control-label " >التفاصيل: </label>
						                <textarea id="notes" name="notes" class="textDetailsArea"></textarea>
					                </div>
                                 </div>
                           </div>
                      </div>
                      <div class="container-fluid OverLayFormFooter">
                           <div class="row CustomRow">
                                <div class="OverLayFormFooterItem right">
                                     <button type="submit" class="btn btn-md OverLayFormBtn" onclick="SubmitForm('add', 'employee', 'adddemand', 'CustomersTableDiv','AddDone');CloseOverLay('AddDemandOverlayForm');"> إضافة</button>
                                </div>
                                <div class="OverLayFormFooterItem left">
                                </div>
                            </div>
                      </div>
                  </form>
            </div>
      <!----------------------------------------------------------------------------------- -->

            <div class="modal fade CustomModal" id="DeleteRequest">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
                      <h3>حذف بيانات</h3> 
                    </div>
                    <form action="<?php echo $this->config->base_url(); ?>index.php/employee/deletedemand" method="post">
                      <div class="modal-body">
                        <div class="form-group formLayout" id="formlayout">   
                            <label for="nameInput" class="control-label ">هل أنت متأكد من حذف البيانات</label>
                          <input type="hidden" name="delete_offerid" id="delete_offerid" class="form-control" readonly/>

                        </div>  
                      </div>
                      <div class="modal-footer mf">
                        <button class="btn btn-info btn-sm " type="submit" id="DoneDelete">حذف</button>
                      </div>
                    </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div> 

              <div class="modal fade CustomModal" id="AddPhotoModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
                      <h3>إضافة صورة</h3> 
                    </div>
                    <form action="<?php echo $this->config->base_url(); ?>index.php/employee/deletedemand" method="post">
                      <div class="modal-body">
                        <div class="form-group formLayout" id="formlayout">   
                          <label for="nameInput" class="control-label ">إدخل رابط الصورة</label>
                          <input type="file" name="delete_offerid" id="ImageInputID" class="form-control"/>
                          <input type="hidden" name="delete_offerid" id="delete_offerid" class="form-control" readonly/>
                        </div>  
                      </div>
                      <div class="modal-footer mf">
                        <button class="btn btn-info btn-sm " type="submit" id="DoneDelete">إضافة</button>
                      </div>
                    </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>

        <script>
            $(".hoverEffect").mouseenter(function(){
                $(".hoverEffect").css("opacity","0.2");
            });
            $(".hoverEffect").mouseleave(function(){
                $(".hoverEffect").css("opacity","0");
            });
        </script>