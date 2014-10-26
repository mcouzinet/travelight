
<div id="header" class="hcenter">
    <a href="/" class="white">
        <img src="/img/logo.png">
        <h2>Travelight</h2>
    </a>
</div>

<div class="formlog">
    <form class="form-horizontal" method="post" action="/login">
        <fieldset>
            <legend>Login</legend>
            <hr>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="mail">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <input type="submit" class="btn btn-success" value="Login">
                </div>
            </div>
            <span>not a member ? <a href="/signup">signup</a></span>
        </fieldset>
    </form>

</div>