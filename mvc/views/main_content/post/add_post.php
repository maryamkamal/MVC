

    <form action="<?= site_url("{posts","add")?>" method="post">

        <input type="text" name="title" placeholder="title"><br><br>
        <input type="date" name="date" placeholder="date"><br><br>
        <input type="number" name="user_id" placeholder="user_id"><br><br>
        <textarea rows="4" cols="20" name="body" placeholder="content"></textarea><br><br>

        <div>
            <input type="submit" name="Add" value="Add">
        </div>

    </form>

<div>
       
<button class="button" onclick="window.location.href='<?= site_url("posts","index")?>'">
            Back to list
        </button>
</div>