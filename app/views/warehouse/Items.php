<div class="container-Items">
    <div class="wrapper-Items">
        <h2>Items</h2>
        <!--the setup for the full import system to write info to the database that is called in the controller and than updated in the model-->
        <form
                id="Items-form"
                method="POST"
                action="<?php echo URLROOT; ?>/warehouse/Items">
            <?php echo $data['nameError']; ?>
            <br>
            <input type="text" placeholder="Naam" name="name">
            <span class="invalidFeedback">
            </span>
            <br><br>
            <input type="number" placeholder="aantal" id="quantity" name="amount" min="1" max="20">
            <span class="invalidFeedback">
            </span>
            <br><br>
            <input type="number" placeholder="beschrikbaar" id="quantity" name="available" min="1" max="20">
            </select>
            <span class="invalidFeedback">
            </span>
            <br><br>
            <select name="location">
                <option selected disabled>locatie</option>
                <option value="ICT academie">ICT</option>
                <option value="Techniek academie">techniek</option>
            </select>
            <span class="invalidFeedback">
            </span>
            <br><br>
            <button id="submit" type="submit" value="submit">Invoegen</button>
        </form>