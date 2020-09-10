<?php

error_reporting(E_ALL);

require_once('user.php');
require_once('t9search.php');

if(isset($_POST['submit'])) {

    $digits = $_POST["digits"];
    $combinations = get_combinations(str_split($digits));

    $u = new user();
    $data = $u->getNameOfUsers($combinations);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
table, th, td {
    border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
    padding: 5px;
        }
        th {
    text-align: left;
        }
    </style>
    <title>T9 Phonebook</title>
</head>
<body>
<h1>T9 Phonebook</h1>

<form action="index.php" method="post">
    <label for="digits">Search Field:</label>
    <input type="number" id="digits" name="digits" placeholder="Only numbers" required><br><br>
    <input type="submit" value="Search" name="submit">
    <input type="reset" value="Reset">
</form>


<?php if(isset($_POST['submit'])): ?>
<h1>Search Results</h1>
<table style="width:100%">
    <?php if($data): ?>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>

    <?php foreach($data as $key=> $value) { ?>
    <tr>

        <td><?php echo $value["first_name"] ?></td>
        <td><?php echo $value["last_name"] ?></td>
    </tr>
    <?php } ?>

    <?php else: ?>
        <tr>
            <th>No result found</th>
        </tr>
    <?php endif; ?>

</table>
<?php endif; ?>
</body>
</html>