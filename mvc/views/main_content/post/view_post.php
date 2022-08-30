  <div>
  <table >
            <tr>
                <th>id</th>
				<th>date</th>
                <th>title</th>
                <th>content</th>
            </tr>
            <tr>
                <td><?= $postData["id"]; ?></td>
				<td><?= $postData["date"]; ?></td>
                <td><?= $postData["title"]; ?></td>
                <td><?= $postData["body"]; ?></td>
            </tr>

        </table>
    </div>
       
<div>
       
<button class="button" onclick="window.location.href='<?= site_url("posts","index")?>'">
            Back to list
        </button>
</div>