<?php include 'inc/header.php';?>
<h2>Ajax:- Auto Refresh Div Content</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Content</td>
                <td>: </td>
                <td><textarea name="body" id="body" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Save" id="autorefresh"></td>
            </tr>
        </table>
        <div id="userstatus"></div>
    </form>
</div>
<?php include 'inc/footer.php';?>