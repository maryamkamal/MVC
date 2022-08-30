
	<div>
	 <button class="button" onclick="window.location.href='<?= site_url("Users","add") ?>'">
             Add User
        </button>

</div>
<div>
			<table >
						<thead>

            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>actions</th>
            </tr>
</thead
<tbody>
            <?php foreach ($user as $row):?>
                <tr >
                    <td><?= $row["id"]; ?></td>
                    <td><?= $row["username"]; ?></td>
                    <td><?= $row["password"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td>

                     <?php $controllers= "users"?>
                     <?php  layout_element("actions",["controllers"=>"$controllers","row"=>$row]); ?>
                    </td>
                </tr>

            <?php endforeach; ?>
</tbody
        </table>
    
	
    </div>


