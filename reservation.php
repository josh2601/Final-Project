<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Subscribe</title>
    </head>
    <body>
        <h2>Reservation Successful!</h2>
        
                
        <label>StartTime:    </label> <?php echo filter_input(INPUT_GET, 'StartTime'); ?>
        <label>EndTime:   </label> <?php echo filter_input(INPUT_GET, 'EndTime'); ?>
        <label>RoomNumber: </label> <?php echo filter_input(INPUT_GET, 'RoomNumber'); ?>
        
    </body>
</html>