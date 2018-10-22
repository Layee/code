function search(value) {
      if(value.length == 0) 
      {
        $("#results").html("");
      } else {

        $.post("employees.php", {search:value}, function(data){
          $("#results").html(data);
        });
 }
}
 

