<div class="main">
      <h1>Register</h1>
      <form name="myForm" method="post">
        <input type="text" placeholder="Enter your First Name" ng-model="user.firstname"><br>
        <input type="text" placeholder="Enter your Last Name" ng-model="user.lastname"><br>
        <input type="email" placeholder="Enter your email" ng-model="user.email"><br>
        <input type="number" placeholder="Enter your Phone Number" ng-model="user.phone"><br>
        
        <input id="datepicker" name="date" ng-model="user.dob" placeholder="MM/DD/YYY" type="text"><br>
               
      
        <input type="text" placeholder="Enter your Address" ng-model="user.address"><br>
        <button type="submit" class="btn btn-primary" ng-click="register(user);"><a href="#/add">Register</a></button>  
      </form>
</div>