<div>
        <table >
            <tr>
                <th>id</th>
                <th>client name</th>
                <th>password</th>
                <th>email</th>
            </tr>
            <tr>
                <td><?= $clientData["id"]; ?></td>
                <td><?= $clientData["username"]; ?></td>
                <td><?= $clientData["password"]; ?></td>
                <td><?= $clientData["email"]; ?></td>
            </tr>
        </table>
    
   
  </div>
<div>
        <button class="button" onclick="window.location.href='<?= site_url("clients","index")?>'">
            Back to list
        </button>

   </div>