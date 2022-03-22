<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
</head>

<body>
    <form action="order.php" method="post">
        <div>
            <label for="type">Select Your Favorite Pizza</label>
            <br>
            <select name="type" id="type">
                <option value="pizzaA">Pizza A</option>
                <option value="pizzaB">Pizza B</option>
            </select>
        </div>
        <div>
            <p>Choose Your Favorite Toping</p>
            <div>
                <input type="checkbox" name="toping[]" id="Cheese" value="cheese"> <label for="Cheese">Cheese</label>
            </div>
            <div>
                <input type="checkbox" name="toping[]" id="Sausage" value="sausage"> <label for="Sausage">Sausage</label>
            </div>
            <div>
                <input type="checkbox" name="toping[]" id="Paprika" value="paprika"> <label for="Paprika">Paprika</label>
            </div>
            <div>
                <input type="checkbox" name="toping[]" id="Mushrooms" value="mushrooms"> <label for="Mushrooms">Mushrooms</label>
            </div>
        </div>

        <button type="submit">Order</button>
        <button type="reset">Reset Order</button>
    </form>
</body>

</html>