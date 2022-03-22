<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidding Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php
    include "con.php"
    ?>
</head>
<body>
    <div class="formbidding">
        <form class="w-auto" method="post">
            
           <!-- <div class="mb-3">
              <label for="inputgst" class="form-label">GST NO</label>
              <input type="number" class="form-control" name="gnum">
            </div>-->
    
            <div class="mb-3">
              <label for="inputbidprice" class="form-label">Bid Price</label>
              <input type="number" class="form-control" name="bprice">
            </div>
    
            <div class="mb-3">
                <label for="inputduration" class="form-label">Duration (In Month)</label>
                <input type="number" class="form-control" name="dur">
            </div>
    
            <div class="mb-3">
              <label for="inputwar" class="form-label">Warranty(In Month)</label>
              <input type="text" class="form-control" name="war">
            </div>
            
            <div class="mb-3">
                <label for="inputgur" class="form-label">Guarantee(In Month)</label>
                <input type="text" class="form-control" name="gur">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
        <?php 
		if(isset($_POST['submit']))
			{
				
				//$gnum = $_POST['gnum'];
				$bidprice = $_POST['bprice'];
				$duration = $_POST['dur'];
				$warrenty = $_POST['war'];
				$guarantee=$_POST['gur'];
			
				$query="INSERT INTO BIDTB(bidPrice,duration,warranty,guarantee) VALUES('$bidprice','$duration','$warrenty','$guarantee')";
				$res=mysqli_query($con, $query);
				
				}	
				
						
				
				
				
	?>
</body>
</html>