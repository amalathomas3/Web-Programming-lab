<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color:pink;
			font-size: 15px;
		}
		h1{
			font-family: arial;
			background-color: pink;
		}
		table{
			background-color:pink;
			font-size: 20px;
		}
	</style>
</head>
<body><center><h1><u>Library details</u></h1>
	<form action="library3.php" method="POST" name="form2"><table border='2' height="50%" width="50%">
		<tr><th>Book ID</th><th><input type="text" name="Book_id" id="Book_id" required></th></tr>
		<tr><th>Book Name</th><th><input type="text" name="Book_name" id="Book_name" required></th></tr>
		<tr><th>Author</th><th><input type="text" name="Author" id="Author" required></th></tr>
		<tr><th>Publications</th><th><input type="text" name="Publications" id="Publications" required></th></tr>
		<tr><th>issue date</th><th><input type="date" name="issue_date" id="issue_date" required></th></tr>
		<tr><th>Due date</th><th><input type="date" name="due_date" id="due_date"  required></th></tr>
		<tr><th><input type="submit" name="s1" value="save" onclick="return validate()"></th><th><input type="submit" name="s2" value="show details"></th></tr></table></form></center>
		<script type="text/javascript">
			function validate()
			{
				var bookid=document.getElementById("Book_id");
				var bookname=document.getElementById("Book_name");
				var id=/^[0-9]+$/;

				if(bookid.value=="")
				{
					window.alert("Please enter a bookid id");
					return false;
				}
				if(!(bookid.value.match(id)))
				{
					window.alert("Please enter a valid  bookid");
					return false;
				}
				if(!bookname.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid bookname name");
					return false;
				}
				
				return true;

			}
		</script>

</body>
</html>