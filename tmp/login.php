<div class="container top-margin">
    <div class="col-md-12">
        <div class="col-md-6 col-md-offset-3 card-box">
            <div class="row">
                <div class="text-center">
                    <h2>LOGIN</h2><br/>
                </div>
            </div> 
            <div class="row">
                <form class="form-horizontal" name="loginForm" method="post">
                    <strong class="col-md-8 col-md-offset-2 message error text-center"></strong><br><br>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" ng-model="user.email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" ng-model="user.password" placeholder="Password" required>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-md btn-primary" type="submit" ng-click="login(user);" ng-disabled="loginForm.$invalid">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <p>Don't have an account?<a href="#/register"> Register here</a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                            
               