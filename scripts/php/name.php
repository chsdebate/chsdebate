<?php
    if(empty($fname)){
?>
        <p>It looks like I don't have your name</p>
        <div id="Sign-In">
            <fieldset style="width:50%"><legend>Enter your name</legend>
                <form method="POST" action="update_engine.php">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" required>
                    </div>
                <br>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </fieldset>
        </div>
<?php
    }
    else{
        //echo "check it";
    }
?>