


    <form action="<?=site_url("users","edit",["id" => $userData["id"]]) ;?>" method="post">

        <input type="text"   name="id" placeholder="uid" value="<?= $userData["id"]; ?>"> <br>
        <input type="text"   name="email" placeholder="email" value="<?= $userData["email"]; ?>"> <br>

        <input type="text"   name="username" placeholder="user name" value="<?= $userData["username"]; ?>"><br>
		

        <input type="number" name="password" placeholder="password" value="<?= $userData["password"]; ?>"><br>

        <div>
            <input type="submit" name="edit" value="Edit">
        </div>
<button class="button" onclick="window.location.href='<?=site_url("users","index")?>'">
            Back to list
        </button>

    </form>

