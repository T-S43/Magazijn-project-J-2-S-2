<h1>Welcome to the request pages.</h1>
<table>
    <tr>
        <th>lendID</th>
        <th>requestID</th>
        <th>warehouseID</th>
        <th>userID</th>
        <th>timestamp</th>
        <th>start lendperiod</th>
        <th>status</th>
        <th>approve</th>
        <th>deny</th>
        <th>delete</th>
    </tr>
    
    <?php echo $data['lendData']; ?>    

</table>
<br><br>
<button>
    <a href="<?php echo URLROOT; ?>/lend">test </a>
</button>