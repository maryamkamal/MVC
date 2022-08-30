
<div>
	 <button class="button" onclick="window.location.href='<?= site_url("Posts","add") ?>'">
              Add Post
        </button>

</div>
    
<div>
            <table >

 <thead>

            <tr>
                <th>id</th>
                <th>title</th>
                <th>date</th>
                <th>content</th>
                <th>actions</th>
            </tr>

            <?php foreach ($post as $row): ?>
                <tr>
                    <td><?= $row["id"]; ?></td>
                    <td><?= $row["title"]; ?></td>
                    <td><?= $row["date"]; ?></td>
                    <td><?= $row["body"]; ?></td>
                    <td>
                        <?php $controllers ="posts"?>

                        <?php  layout_element("actions",["controllers"=>"$controllers","row"=>$row]); ?>

                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
   </div>