<div class="container">
    <div class="row">
        
        <div class="col-md-8">
            <h1><?php echo $query->name; ?></h1>
            <hr>
            <?php echo $query->content; ?>

            <hr>
            <div class="text-right"><?php echo $query->date; ?></div>
        </div>
        <div class="col-md-4">
            <h1>현재 프로젝트</h1><!-- current fix -->
            
            <?php
            echo Modules::run('fixing/current_right');
            
            ?>
            
            
            
        </div>
    </div>

</div>