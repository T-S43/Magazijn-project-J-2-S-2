
<form method="POST"
      action="<?php echo URLROOT; ?>/registerUsers/index">
    <?php echo $data['emailError']; ?>

    <br>
    <label>E-mail</label>
    <input type="email" name="email" placeholder="Type E-mail">
    <br><br>

    <label>Password</label>
    <input type="password" name="pass" placeholder="Type password">
    <br><br>

    <label>Firstname</label>
    <input type="text" name="firstname" placeholder="Type firstname">
    <br><br>

    <label>Infix</label>
    <input type="text" name="infix" placeholder="Type infix">
    <br><br>

    <label>Lastname</label>
    <input type="text" name="lastname" placeholder="Type lastname">
    <br><br>

    <label>Roll</label>
    <select name="UserRoll">
        <option selected disabled> select</option>
        <option value="Student">student</option>
        <option value="SuperUser">super user</option>
    </select>
    <br><br>
    <!--Button-->
    <button id="submit" type="submit" value="submit">Invoegen</button>
</form>

    <!--The read from the database-->
    <h3>Results List</h3>
    <table style="width: 80%" border="1">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>roll</th>
        </tr>
        <!--select the rows so the information can be shown in a read-->
        <tr>
            <?php echo $data["usersData"];?>
        </tr>
    </table>
