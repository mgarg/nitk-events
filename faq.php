<html>
	<script type="text/javascript" src='jquery-1.11.0.js'></script>

	<script type="text/javascript">
		function showHint(id) {
			$.get("foo.php?id="+ id, function (data) {
				//#txtHint selects the span and updates its body with data recieved from the server
				$("#txtHint").html(data);
			});
		}
	</script>
<body>
	<form> 
		pid : <input type="text" onkeyup="showHint(this.value)">
	</form>
	<p>Suggestions: <span id="txtHint"> type something</span></p>
</body>
</html>