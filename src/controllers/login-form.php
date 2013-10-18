<form role="form" name="form1" method="post" action="<?php controll('do-login'); ?>">
    <div class="form-group">
        <label>Username</label>
        <input name="username" type="text" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Log in</button>
</form>