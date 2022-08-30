

    <form action="<?=site_url("users","add")?>" method="post">
<br><br>
 <label ><b>
	User Name</b></label>
	<br>
        <input type="text" name="name" placeholder="user name"><br>
		<label ><b>
	email</b></label>
	<br>
	<input type="text" name="email" placeholder="Email"><br><br>
	<label ><b>
	password</b></label>
	<br>
        <input type="number" name="password" placeholder="password"><br><br>
        

        <div>
            <input type="submit" name="Add" value="Add">
        </div>


       
    </form>



<div>
 <button class="button" onclick="window.location.href='<?=site_url("users","index")?>'">
            Back to list
        </button>
</div>