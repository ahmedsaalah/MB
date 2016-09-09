            <div class="container-fluid CustomeContainer">
                <div class="row CustomRow">
                    <div class="DataContainer box-wider-text col-md-12">
                          <div class="box-header">
                            <div class="row CustomeRow">
                                <div class="boxHeaderLeft">
                                    <ul class="nav navbar-nav row CustomeRow">
                                        <li><a href="#" onclick="ShowOverLay('AddPackageOverlayForm');">إضافة نوع إشتراك</a></li>
                                    </ul>
                                </div>
                                <div class="boxHeaderRight">                  
                                    <h3>إدارة الإشتراكات</h3>
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
                                          <th>نوع الإشتراكات</th>
                                          <th>عدد الرحلات </th>
                                          <th>سعر الإشتراك</th>
                                          <th class="tbicons">تعديل</th>
                                          <th class="tbicons">حذف </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                        <td>1</td>
                                        <td>ذهبى</td>
                                        <td>25</td>
                                        <td>250</td>
                                        <td ><a href="#" onclick="ShowOverLay('EditPackageOverlayForm');"><span class="fa fa-cog"></span></a></td>
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
      <!----AddPackageOverlayForm---------------------------------------------------------------->
            <div class="OverLayForm closed" id="AddPackageOverlayForm">
                  <div class="container-fluid OverLayFormHeader">
                       <div class="row CustomRow">
                            <div class="OverLayFormHeaderLeft">
                                 <span class="fa fa-close ExitBtn"></span>
                            </div>
                            <div class="OverLayFormHeaderRight">
                                <h2> إضافة تفاصيل إشتراك</h2>
                            </div>
                       </div>
                   </div>
                  <form action="#" method="post" id="add">
                      <div class="container-fluid OverLayFormContent">
                           <div class="FormSection">
                                <div class="SectionHeader">
                                     <h3>بيانات الإشتراك</h3>
                                </div>
                                <div class="SectionContent">
                                    <div class="form-group formLayout">
								        <label for="requesttype" class="control-label ">نوع الإشتراك: </label>
									    <input class="form-control" name="requesttype" placeholder=""/>
							        </div>
                                    <div class="form-group formLayout">
								        <label for="requesttype" class="control-label ">عدد الرحلات: </label>
									    <input class="form-control" name="requesttype" placeholder=""/>
							        </div>
                                    <div class="form-group formLayout">
								        <label for="requesttype" class="control-label ">سعر الإشتراك : </label>
									    <input class="form-control" name="requesttype" placeholder=""/>
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
      <!----EditPackageOverlayForm---------------------------------------------------------------->
            <div class="OverLayForm closed" id="EditPackageOverlayForm">
                  <div class="container-fluid OverLayFormHeader">
                       <div class="row CustomRow">
                            <div class="OverLayFormHeaderLeft">
                                 <span class="fa fa-close ExitBtn"></span>
                            </div>
                            <div class="OverLayFormHeaderRight">
                                <h2> تعديل بيانات إشتراك</h2>
                            </div>
                       </div>
                   </div>
                  <form action="#" method="post" id="add">
                      <div class="container-fluid OverLayFormContent">
                           <div class="FormSection">
                                <div class="SectionHeader">
                                     <h3>بيانات الإشتراك</h3>
                                </div>
                                <div class="SectionContent">
                                    <div class="form-group formLayout">
								        <label for="requesttype" class="control-label ">نوع الإشتراك: </label>
									    <input class="form-control" name="requesttype" placeholder=""/>
							        </div>
                                    <div class="form-group formLayout">
								        <label for="requesttype" class="control-label ">عدد الرحلات: </label>
									    <input class="form-control" name="requesttype" placeholder=""/>
							        </div>
                                    <div class="form-group formLayout">
								        <label for="requesttype" class="control-label ">سعر الإشتراك : </label>
									    <input class="form-control" name="requesttype" placeholder=""/>
							        </div>
                                 </div>
                           </div>
                      </div>
                      <div class="container-fluid OverLayFormFooter">
                           <div class="row CustomRow">
                                <div class="OverLayFormFooterItem right">
                                     <button type="submit" class="btn btn-md OverLayFormBtn" onclick="SubmitForm('add', 'employee', 'adddemand', 'CustomersTableDiv','AddDone');CloseOverLay('AddDemandOverlayForm');"> تعديل</button>
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
