<html>
<head>

<style>

body {background-color: black;}

table
{
position:absolute; 
top:225px; right:100px;
border-style:solid;
border-width:2px;
border-color:red;
width: 500px;
height :500px;
color:#fff;
}
th, td {
  padding: 15px;
  text-align: left;
  
}
</style>

</head>
<body>
    <img src="book.png" alt="Gateways" style="position:absolute; top:225px; left:30px; width:630px;height:430px;">
<?php
$userProfile = array ("Name"=>$_POST["name"],"Email"=>$_POST["email"],"Age"=>$_POST["age"],"Gender"=>$_POST["gender"],"Mobile"=>$_POST["mobile"],"Username"=>$_POST["username"],"Password"=>$_POST["password"]);
$address =  array ($_POST["address"],$_POST["state"],$_POST["country"]);
$wallet = array (
  array("ADA",100,215),
  array("COTI",175,73),
  array("LOCG",1000,330),
  array("FLOW",10,140)
);
?>
<h1 style="position:absolute; top:45px; Right:500px; color:#fff">
<?php
$myfile = fopen("pancake.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
</h1> <br>

<?php

function print_address($location)
{
    echo '<tr>';
    echo "<th> Address </th>";
    echo '<td>'.$location[0].", ".$location[1].", ".$location[2].'</td>';
    echo '</tr>';
}

function print_wallet($book)
{
    echo '<tr>';
    echo "<th  rowspan='4'> book </th>";
    echo '<td>'.$book[0][0]." --> ".$book[0][1]." --> $".$bookt[0][2].'</td>';
    echo '</tr>';

    echo '<tr>';
     echo '<td>'.$book[1][0]." --> ".$book[1][1]." --> $".$book[1][2].'</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>'.$book[2][0]." --> ".$book[2][1]." --> $".$book[2][2].'</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>'.$book[3][0]." --> ".$book[3][1]." --> $".$bookt[3  ][2].'</td>';
    echo '</tr>';

    
}

function userinfo_to_table($userinfo,$location,$book)
{
echo "<table border='1'>";
foreach($userinfo as $x => $x_value)
{
    echo '<tr>';
    echo '<th>'.$x.'</th>';
    echo '<td>'.$x_value.'</td>';
    echo '</tr>';
}

print_address($location);

print_wallet($book);

echo '</table>';
}

userinfo_to_table($userProfile,$address,$book);
?>

<?php
$myfile = fopen("userInfo.txt", "w") or die("Unable to open file!");
$txt = "User Informatio\n\nName : ".$userProfile['Name']."\n";
fwrite($myfile, $txt);
$txt = "Email : ".$userProfile['Email'];
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>