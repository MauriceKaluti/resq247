   <!-- 
        <form class="form-contact form form-emergency_fire_inst" action="{{route('storeFirePackage')}}" method="post">
                      {{csrf_field()}}
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
                <input class="form-control valid" value="Institution" name="package_type" hidden="" type="text"  placeholder="Package Type">
          <div class="popup_boxPage ">
            <div class="popup_inner">
                <h3>Subscribe For Institution</h3>
                            <div class="row">
 

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="inst_name"  type="text"   placeholder="Enter Institution Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="cont_person"  type="text"  placeholder="Enter Cont. Person 1">
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="cont_person2"  type="text"  placeholder="Enter Cont. Person 2">
                                    </div>
                                </div>


                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="email"  type="email"  placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="phone_one"  type="text"  placeholder="Enter Phone 1">
                                    </div>
                                </div>



                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="phone_two" type="text"  placeholder="Enter Phone 2">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="number_students" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Number of Students'" placeholder="Enter Number of Students">
                                    </div>
                                </div>
                           
                      
                                <div style="margin-bottom: 30px;" class="col-sm-6">
                                    <div class="form-group">
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="county" multiple="" name="county[]"></select>
                                        
                                    </div>
                                </div>


                                      <div style="margin-bottom: 30px;" class="col-sm-6">
                                    <div class="form-group">
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="town" multiple="" name="town[]"></select>
                         
                                    </div>
                                </div>
                                
                                
                                      <div style="margin-bottom: 30px;" class="col-sm-6">
                                    <div class="form-group">
                               <select style="display:block; width:100%;padding:0;border-width:0" required="" id="fire_serv_category" multiple="" name="serv_category[]"></select>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="post_address"  type="text"   placeholder="Enter Postal Address">
                                    </div>
                                </div>


                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="post_code"  type="text"  placeholder="Enter Postal Code">
                                    </div>
                                </div>
                                
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <textarea required="" class="form-control valid" name="additional" placeholder="Enter Additional Details(Use Guide)"></textarea>
                                        
                                    </div>
                                </div>
                          

                               <div class="col-sm-6">
                                    <div class="form-group">
                                        <input value="Deploy a standby fire engine" type="checkbox" name="fire_engine">
                                        <label for="terms_agree">Deploy a standby fire engine</label>

                                    </div>

                                      <div class="form-group">
                                        <input value="Deploy fire marshal in site" type="checkbox" name="fire_marshal">
                                        <label for="terms_agree">Deploy fire marshal in site</label>
                                        
                                    </div>

                                      <div class="form-group">
                                        <input value="Service existing fire fighting equipments on site" type="checkbox" name="service_equip">
                                        <label for="terms_agree">Service existing fire fighting equipments on site</label>
                                        
                                    </div>

                                      <div class="form-group">
                                        <input value="Supply and service fire fighting equipments" type="checkbox" name="supply_service">
                                        <label for="terms_agree">Supply and service fire fighting equipments</label>
                                        
                                    </div>

                                      <div class="form-group">
                                        <input value="Offer fire safety and first Aid training" type="checkbox" name="fire_safety">
                                        <label for="terms_agree">Offer fire safety and first Aid training</label>
                                        
                                    </div>
                                </div>
                         
                         
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Package Price(Ksh.)</label>
                                        <input required="" readonly="" value="9500" class="form-control valid" name="cost"  type="text" placeholder="Price">
                                    </div>
                                </div> 
                            

                            </div>
                             <br><br>
                            <div class="form-group">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I agree to share details with ResQ247 in line with  <a href="#">OUR ONLINE POLICY</a></label>
            </div>
                <div class="form-group mt-3">
                    <button type="submit" class="boxed-btn3-login">Subscribe Now</button>
                </div>
                </div>
                </div>
          </form> -->