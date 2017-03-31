<script>
function doConfirm(id)
{
    var ok= confirm("Are you sure? You want to delete id:"+id);
    if(ok)
    {
        $.ajax({
        type:'post',
        url:base_url+'fixing/delete',
        data:'id='+id,
        success: function (data) {
            if(data==='true')
            {
                 location.reload();  
            }
            else
            {
                alert(data);
            }
        }
    });
    }
}
</script>
<br>
<a href="<?php echo base_url(); ?>fixing/add-project" class="btn btn-success">Add fixing </a>
<h1>List fixing</h1> 
<br>
<table class="table">
    <thead>
        <tr> 
            <th>Name</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($query->result() as $row) {
              $edit = base_url() . 'fixing/add-project/' . $row->id;
            ?>
            <tr>
                <td><a href="<?php echo base_url().'fixing/project-detail/'.$row->id; ?>"><?php echo $row->name; ?></a></td>
                 <td><?php 
                        $ts = $row->date;
                        $convertTime = ($this->time_ago->convert_datetime($ts));
                        $when = ($this->time_ago->make_ago($convertTime));
                        echo $when;
                    
                    ?></td>
                
                 <td><a href="<?php echo $edit; ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></p</a>
                 <a href="#" onclick="doConfirm('<?php echo $row->id; ?>')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>
                 </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

     <?php  echo $this->pagination->create_links(); ?>
