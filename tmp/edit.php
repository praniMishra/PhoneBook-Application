
<div class="container top-margin">
  <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>EDIT YOUR DATA</h3></div>
    <div class="panel-body">
     
       <form  name="myForm" method="POST" ng-repeat="user in userDetails">
            <input type="hidden" name="id" ng-model="id">
                    <div class="col-md-9 col-md-offset-1">
                        <div class="row">   
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                        <label for="email" >Email :</label>
                                            <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email" ng-model="user.email" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                        <label for="phone">Phone:</label>
                                            <input class="form-control" type="text" name="phone"   required="" ng-model="user.phone" placeholder="Phone ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-xs-12">
                                            <label for="Address">Address:</label>
                                                <input class="form-control" type="text" name="Address"   required="" ng-model="user.address" placeholder="Address"><br><br>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">  
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                            <label for="username" >First Name :</label>
                                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First name" ng-model="user.first_name" required>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                            <label for="username" >Last Name :</label>
                                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last name" placeholder="Enter your Last Name" ng-model="user.last_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                            <label for="date">Date of Birth</label>
                                                <input class="form-control" type="" name="dob" id="datepicker-12"  required ng-model="user.dob">
                                            </div>
                                        </div>
                                       
                                </div>
                        </div> <!--row--> 
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <div class="col-md-3 col-sm-offset-3" style="margin-top:2%" >
                                            <button class="btn  btn-primary" type="submit" name="register" ng-click="editData(user);">Update Changes</button>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-md-2 col-sm-offset-1">
                                             <a href="#/dashboard" class="btn btn-primary"style="color:white">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                        </div> <!--row-->
                    </div><!--col-9-->    
          </form>
         </div>
        </div><!--panel-->
    </div>
        