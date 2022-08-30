

    <form action="<?= site_url("clients","edit",["id" =>$clientData["id"]]);?>" method="post">

        <input type="text"   name="id" placeholder="uid" value="<?= $clientData["id"]; ?>">
        <input type="text"   name="email" placeholder="email" value="<?= $clientData["email"]; ?>">
		
        <input type="text"   name="username" placeholder="user name" value="<?= $clientData["username"]; ?>">
        <input type="number" name="password" placeholder="password" value="<?= $clientData["password"]; ?>">

        <div>
            <input type="submit" name="edit" value="Edit">
        </div>


      
    </form>

 <button class="button" onclick="window.location.href='<?= site_url("clients","index")?>'">
            Back to list
        </button>
