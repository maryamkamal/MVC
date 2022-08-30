
<div>
       
<button class="button" onclick="window.location.href='<?=site_url("{$controllers}","view",["id" => $row["id"]])?>'">
            View
        </button>

<button class="button" onclick="window.location.href='<?=site_url("{$controllers}","edit",["id" =>$row["id"]])?>'">
            Edit 
        </button>
    
<button class="button" onclick="window.location.href='<?=site_url("{$controllers}","delete",["id" =>$row["id"]])?>'">
           Delete
        </button>
    
   
</div>
