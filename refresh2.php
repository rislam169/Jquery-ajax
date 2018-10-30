<?php include 'inc/header.php';?>
<style>
.autoshow {border: 1px solid #ddd;border-radius: 5px;margin-left: 82px;margin-top: 35px;padding: 10px;width: 295px;height:300px;overflow:scroll;}
.autoshow li {list-style: none;background: #f2f2f2;border-radius: 5px;margin-bottom: 2px;padding: 3px;}
</style>
<h2>Ajax:- Auto Refresh Div Content-Output</h2>
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
        <div id="autoshow"></div>
    </form>
</div>
<?php include 'inc/footer.php';?>