<script>
  $(function () {
  $('.example-popover').popover({
      container: 'body'
    })
  })
  $(function () {
    $('[data-toggle="popover"]').popover()
  })
</script>
<?php
function popups($dato){
  //Connesione al server
	$hostname="localhost";
	$username="cambiaclima5bi";
	$passwd="";
	$dbname="my_cambiaclima5bi";
	$conn=mysqli_connect($hostname,$username,$passwd,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
  $sql = "SELECT * FROM termine";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $dato = str_ireplace($row["Nome"], '<span stile="color: blue; text-decoration: underline;" "type="button" data-toggle="popover" data-trigger="hover" data-placement="auto" data-html="true" title="'.$row["Nome"].'" data-content="'.$row["descrizione"].'."><u>'.$row["Nome"].'</u></span>' ,$dato);
    }
  }
  $conn->close();
  return $dato;
}
?>
