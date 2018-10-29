<?php include 'inc/header.php';?>
<style>
li {background: #d0d0d0 none repeat scroll 0 0;list-style: outside none none;margin-bottom: 1px;  padding: 2px;cursor:pointer;}
.skill {background: #f5f5f5 none repeat scroll 0 0;margin-left: 51px;width: 250px;}
</style>
<h2>Ajax:- Auto Complete Textbox</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Skill</td>
                <td>: </td>
                <td><input type="text" name="skill" id="skill" placeholder="Enter skill"></td>
            </tr>
        </table>
        <div id="statusskill"></div>
    </form>
</div>
<?php include 'inc/footer.php';?>