
<div class="container">
<h3>Login System</h3>
<div class="container">
    <form method="post" action="index.php?module=auth&action=login">
        <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input type="text" name="email" class="form-control" />
            <?= $emailErr ? '<div class="error" style="color:red">'.  $emailErr .'</div>' : '' ?> 
           
        </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">password</label>
            <div class="col-sm-9">
                <input type="text" name="password" class="form-control" />
                <?= $passwordErr ? '<div class="error" style="color:red">'.  $passwordErr .'</div>' : '' ?> 
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button type="submit" name="btn-submit" class="btn btn-primary">Save</button> &nbsp;
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>