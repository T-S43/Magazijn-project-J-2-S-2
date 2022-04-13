<!-- the title of the update-->
<?= $data['title'];?>
<!-- the form to get the controller in the view en use it to do the methods-->
<form action="<?= URLROOT; ?>/registerUsers/edit" method="POST">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="email" name="email" id="name" value="<?= $data["row"]->email;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" id="pass" value="<?= $data["row"]->pass;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="firstname" id="firstname" value="<?= $data["row"]->firstname;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="infix" id="infix" value="<?= $data["row"]->infix;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="lastname" id="lastname" value="<?= $data["row"]->lastname;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="UserRoll">
                        <option value="<?=$data["row"]->UserRoll;?>"><?=$data["row"]->UserRoll;?></option>
                        <option value="Student">student</option>
                        <option value="SuperUser">super user</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?=$data["row"]->id;?>"
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="update">
                </td>
            </tr>

        </tbody>
    </table>
</form>