<?php include 'inc/header.php';?>
<h2>Ajax:- Show Password Button</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>: </td>
                <td><input type="text" placeholder="Enter username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: </td>
                <td><input type="password" name="password" id="password" placeholder="Enter Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="button" id="button">Show Password</button></td>
            </tr>
        </table>
        <div id="userstatus"></div>
    </form>
</div>
<?php include 'inc/footer.php';?>