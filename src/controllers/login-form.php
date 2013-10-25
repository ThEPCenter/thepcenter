<form role="form" name="form1" method="post" action="<?php controll('do-login'); ?>">
    <div class="form-group">
        <label class="sr-only" for="username">Username</label>
        <input name="username" type="text" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Login</button>
</form>