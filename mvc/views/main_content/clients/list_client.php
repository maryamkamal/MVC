
<div>
	 <button class="button" onclick="window.location.href='<?= site_url("Clients","add") ?>'">
              Add Client
        </button>

</div>
    
<div>

    


            <table >

 <thead>

            <tr>
                <th>id</th>
                <th>client name</th>
                <th>password</th>
                <th>email</th>
                <th>actions</th>
            </tr>
</thead
<tbody>
            <?php foreach ($client as $row): ?>
                <tr>
                    <td><?= $row["id"]; ?></td>
                    <td><?= $row["username"]; ?></td>
                    <td><?= $row["password"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td>

                        <?php $controllers="clients"?>
                        <?php  layout_element("actions",["controllers"=>"$controllers","row"=>$row]); ?>
                    </td>
                </tr>

            <?php endforeach; ?>
</tbody
        </table>
    </div>

    
