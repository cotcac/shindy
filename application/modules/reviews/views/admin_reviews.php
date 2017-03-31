<script>
function doConfirm(id)
{
    var xhttp;
    var ok= confirm("Are you sure? You want to delete id:"+id);
    if(ok)
    {
        $.ajax({
        type:'post',
        url:base_url+'reviews/delete_review',
        data:'id='+id,
        success: function (data) {
            if(data==='true')
            {
                 location.reload();  
            }
            else
            {
                alert(data)
            }
         
        }
    });
    }
}
</script>
<h1>List reivews</h1>  
<?php
            foreach ($records as $record) {
                ?>
                <div class="well">
                    <p><strong><?php echo $record->name; ?></strong> <span class="glyphicon glyphicon-envelope"></span> <?php echo $record->email; ?> 
                    
                    <a href="#" onclick="doConfirm('<?php echo $record->id; ?>')"><button class="btn btn-danger btn-xs pull-right"><span class="glyphicon glyphicon-trash"></span></button></a>
                    </p>
                    <?php echo $record->reviews; ?>
                    <p class="text-right"><?php
                        $ts = $record->date;
                        $convertTime = ($this->time_ago->convert_datetime($ts));
                        $when = ($this->time_ago->make_ago($convertTime));
                        echo $when;
                        ?></p>
                </div>
                        <?php
                    }
   ?>
            <!-- complain form--> 
<div class="text-center">  <?php  echo $this->pagination->create_links(); ?></div>