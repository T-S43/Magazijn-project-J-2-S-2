<h1>Warehouse</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Aantal</th>
        <th>Beschrikbaar</th>
        <th>locatie</th>
    </tr>
    <tr>
        <td><?php echo $data["warehouseData"];?></td>
    </tr>

</table>
<br><br>
<button>
    <a href="<?php echo URLROOT; ?>/managewarehouse/items">Items aanvragen</a>
</button>
