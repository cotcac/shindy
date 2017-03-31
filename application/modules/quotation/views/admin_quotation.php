<script>
function doConfirm(id)
{
    var xhttp;
    var ok= confirm("Are you sure? You want to delete id:"+id);
    if(ok)
    {
        $.ajax({
        type:'post',
        url:base_url+'quotation/delete',
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
<h1>List quotation</h1>  
    <br>
        <table class="table">
            <thead>
                <tr>
                    <th>표제</th><!-- title -->
                    <th>작가</th><!-- writer -->
                    <th>Email</th><!-- email -->
                    <th>Phone</th><!-- email -->
                    <th>Contact me by</th><!-- email -->
                    <th>날짜</th><!-- date -->
                    <th>Edit/Delete</th><!-- date -->
                </tr>
            </thead>
            <tbody>
                <?php
                 foreach ($records as $record) {
                     $edit = base_url() . 'quotation/insert/'. $record->id;
                     $detail = base_url() . 'quotation/detail/'. $record->id;
                     if( $record->contact=='p')
                     {
                         $contact='Phone';
                     }else if($record->contact=='e'){
                         $contact='Email';
                     }else if($record->contact=='r')
                     {
                         $contact='댓글';//reply
                     }else{
                         $contact='Unknow';
                     }
                     ?>
                <tr>
                    <td> <a href="<?php echo $detail; ?>"><?php echo $record->qtitle; ?></a></td>
                    <td><?php echo $record->name; ?></td>
                    <td><?php echo $record->email; ?></td>
                    <td><?php echo $record->phone; ?></td>
                    <td><?php  echo $contact; ?></td>
                    <td><?php 
                        $ts = $record->date;
                        $convertTime = ($this->time_ago->convert_datetime($ts));
                        $when = ($this->time_ago->make_ago($convertTime));
                        echo $when;
                    ?></td>
                    <td>
                        <a href="<?php echo $edit; ?>"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a> 
                        <a href="#" onclick="doConfirm('<?php echo $record->id; ?>')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>
                    </td>
                </tr>
        <?php
           }
        ?>               
            </tbody>
        </table>
         <div class="clearfix"></div>
      <?php  echo $this->pagination->create_links(); ?>
</div>







