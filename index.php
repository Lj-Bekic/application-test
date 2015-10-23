<!doctype html>
<head>
	<title>eBASE Developer Application Test</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <style>
	table{
		border-collapse: collapse;
	}
	table, td, th{
		border: 1px solid black;
	}
	button {
		color: #F00;
		font-weight:500;
		background-color:#000;	
	}
	th{
		background-color:#000;
		color:#FFF;
	}
	</style>
</head>

<body>
	<?php
    $people = array(
       array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
       array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
       array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
       array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
       array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
    );
    function displayTableContents($people){
        foreach ($people as $person){
            echo "<tr><td>" . $person['id'] . "</td>";
            echo "<td>" . $person['first_name'] . "</td>";
            echo "<td>" . $person['last_name'] . "</td>";
            echo "<td>" . $person['email'] . "</td>";
            echo "<td> <button>ALERT</button> </td></tr>";
        }
    }
    ?>
    <h3> eBASE Developer Application Test </h3>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
            <?php displayTableContents($people) ?>
    </table>
    
    <script>
    $('button').on('click', function(){
        var firstName = $(this).closest('tr').children('td:nth-child(2)').text();
        var lastName = $(this).closest('tr').children('td:nth-child(3)').text();
        var email= $(this).closest('tr').children('td:nth-child(4)').text();
        
        alert('Notification will be sent to ' + firstName + " " + lastName + " at the following email address:\n\n" + email + "\n")
    });
    </script>
    
</body>
</html> code here
