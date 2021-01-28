<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#button").click(function(){
     $.get("http://localhost/movie/movies/GetMovies", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
</head>
<body>
<div id="div_result">
<a href="#" id="button">Click here </a>  
</div>



<?php for($i=0;$i<count($data);$i++){
   <tr>
   $firstObj=$data[i][0];
    for($j=0;$j<5;$j++){
       <td><?php echo $i; ?></td>
       <td><?php echo $firstObj[$j]['payment_student']?></td>
       <td><?php echo $firstObj[$j]['arrears']?></td>
       <td><?php echo $firstObj[$j]['payment_description']; ?></td>
       <td><?php echo $firstObj[$j]['payment_amount']." ".$firstObj[$j]['arrears']; ?></td>
    }
   </tr>
}  


<?php

} ?>


</html>
