
        <table >
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
            </tr>
            <tr>
                <td><?= $userData["id"]; ?></td>
                <td><?= $userData["username"]; ?></td>
                <td><?= $userData["password"]; ?></td>
                <td><?= $userData["email"]; ?></td>
            </tr>

        </table>
   
<div>
 <button class="button" onclick="window.location.href='<?=site_url("users","index")?>'">
            Back to list
        </button>
</div>