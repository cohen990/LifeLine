$.ajax({
   url: "configurePeople.php",
   success: function(data){
     $("#data-display").text(data);
   }
 });