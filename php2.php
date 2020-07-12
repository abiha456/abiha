<?php 

// pyramid no 1
    echo "<h2>Pyramid 1</h2>";
    echo "</br>";

    for($i=0; $i <= 5; $i++){
        for($a=0; $a <= $i; $a++){
            echo "* ";
        }
        echo "</br>";
    };

    echo "</br>";
// pyramid no 2
    echo "<h2>Pyramid 2</h2>";


    for($i=1; $i <= 5; $i++) {
        for($j=5; $j > $i; $j--) {
            echo "&nbsp;&nbsp;&nbsp;";
        }

        for($a=0; $a < 2 * $i - 1; $a++) {
            echo " * ";
        }
        echo "</br>";
    };
    echo "</br>";
// pyramid no 3

echo "<h2>Pyramid 3</h2>";

for($i=5; $i > 0; $i--) {
    for($j = 5 - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;";
    }

    for($a = 2 * $i - 1; $a > 0; $a--) {
        echo " * ";
    }
    echo "</br>";
};
echo "</br>"; 

// Form

    $name                        = '';
    $email                       = '';
    $phone                       = '';
    $address                     = '';
    $country                     = '';
    $password                    = '';
    $cnfrm_password              = '';

    if(isset($_POST['submit']))
    {
        $name                        = $_POST['name'];
        $email                       = $_POST['email'];
        $phone                       = $_POST['phone'];
        $address                     = $_POST['address'];
        $country                     = $_POST['country'];
        $password                    = $_POST['password'];
        $cnfrm_password              = $_POST['cnfrm_password'];
    };

?>
<form method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
    </div>
    <div>
        <label for="country">Country</label>
        <input type="text" name="country" id="country">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
    </div>
    <div>
        <label for="cnfrm_password">Confirm Password</label>
        <input type="text" name="cnfrm_password" id="cnfrm_password">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>

<table>
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>country</th>
            <th>password</th>
        </tr>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $phone ?></td>
            <td><?php echo $address ?></td>
            <td><?php echo $country ?></td>
            <td><?php echo password_hash($password, PASSWORD_DEFAULT); ?></td>
        </tr>
    </thead>
</table>