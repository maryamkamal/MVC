

    <form action="<?=site_url("posts","edit",["id" => $postData["id"]])?>" method="post">

        <input type="text" name="id" placeholder="uid" value="<?= $postData["id"]; ?>">
        <input type="text" name="title" placeholder="title" value="<?= $postData["title"]; ?>">
        <input type="date" name="date" placeholder="date" value="<?= $postData["date"]; ?>">
        <textarea name="content" placeholder="content" value="<?= $postData["body"]; ?>"></textarea>
        <div>
            <input type="submit" name="edit" value="Edit">
        </div>


       
    </form>

<button class="button" onclick="window.location.href='<?= site_url("posts","index")?>'">
            Back to list
        </button>
