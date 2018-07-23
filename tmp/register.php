
<div class="container top-margin"id="register">
                <div class="form col-md-12 card-box ">
                  <div class="row">
                      <div class="col-md-12 text-center">
                            <h2>REGISTER</h2><br><br>
                      </div>
                  </div>         
                  <form  name="myForm" method="POST">
                    <div class="col-md-9 col-md-offset-1">
                        <div class="row">   
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group ">                                   
                                        <label for="email" >Email :</label>
                                            <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email" ng-model="user.email" required/>
                                            <div ng-show="myForm.email.$touched && myForm.email.$invalid">
                                            <p class="error" ng-show="myForm.email.$invalid">This is invalid email.</p>
                                            <p class="error" ng-show="myForm.email.$error.required">This field is required.</p>
                                            </div>                                  
                                    </div>
                                    <div class="form-group">                                   
                                        <label for="phone">Phone:</label>
                                        <input class="form-control" type="text" name="phone"   required="" ng-model="user.phone" placeholder="Phone " ng-minlength="10" ng-maxlength="10"  required>
                                            <div ng-show="myForm.phone.$touched" >
                                                <p ng-show="myForm.phone.$error.minlength" class="error">Min Length required 10!</p>    
                                                <p ng-show="myForm.phone.$error.maxlength" class="error">Max Length reached!</p> 
                                                <p ng-show="myForm.phone.$error.required" class="error">This feild is required !</p>
                                            </div>                                 
                                    </div>
                                    <div class="form-group">                                    
                                    <label for="password" >Password :</label>
                                        <input class="form-control" type="password" name="password" id="password" ng-minlength="6" ng-model="user.password" placeholder="Password" required>
                                        <div ng-show="myForm.password.$touched || myForm.password.$dirty">
                                            <p ng-show="myForm.password.$error.minlength" class="error">Min. Length is 6 characters!</p>
                                            <p ng-show="myForm.password.$error.required" class="error">Password Required !</p>
                                       </div>                                    
                                    </div>
                                    <div class="form-group">                                  
                                        <label for="password">Confirm Password :</label>
                                        <input class="form-control" type="password" name="cpassword" ng-model="user.cpassword" placeholder="Confirm Password"  ng-pattern="user.password" required>
                                            <div ng-show="myForm.cpassword.$touched" >
                                                <p class="error" ng-show=" myForm.cpassword.$error.pattern">Password do not match.</p> 
                                            </div>                                   
                                    </div>

                                </div><!--/col-5-->
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group ">                                   
                                        <label for="username" >First Name :</label>
                                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Enter your First name" ng-model="user.firstname"  ng-minlength="4" required>
                                                <div ng-show="myForm.firstname.$touched || myForm.firstname.$dirty">
                                                    <p ng-show="myForm.firstname.$error.minlength" class="error">Minimum Length 4 characters required!</p>
                                                    <p ng-show="myForm.firstname.$error.required" class="error">FirstName Required !</p>
                                                </div>
                                    </div>
                                    <div class="form-group ">                                   
                                        <label for="username" >Last Name :</label>
                                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last name" placeholder="Enter your Last Name" ng-model="user.lastname">
                                    </div>
                                    <div class="form-group">                                   
                                    <label for="date">Date of Birth</label>
                                        <input class="form-control" type="Date" name="dob" id="datepicker" ng-model="user.dob" required>
                                            <div ng-show="myForm.dob.$touched" >
                                                <p ng-show="myForm.dob.$error.required" class="error">This feild is required !</p>
                                            </div>                                  
                                    </div>
                                    <div class="form-group">                                   
                                        <label for="Address">Address:</label>
                                        <input class="form-control" type="text" name="address" ng-model="user.address" placeholder="Address" required>
                                            <div ng-show="myForm.address.$touched" >
                                                <p ng-show="myForm.address.$error.required" class="error">This feild is required !</p>
                                            </div>
                                    </div>

                                </div><!--/col-5-->
                        </div><!--/row-->
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <div class="col-xs-4 col-sm-offset-4" style="margin-top:5%" >
                                            <button class="btn  btn-primary" type="submit" ng-disabled="!myForm.$valid" name="register" ng-click="register(user);">Register</button>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-6  col-sm-offset-3" style="margin-top:5%" >
                                            <p>Already have an account? <a href="#/login"> LOGIN</a></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div><!--/col-9-->    
                 </form>
                </div>
</div>


