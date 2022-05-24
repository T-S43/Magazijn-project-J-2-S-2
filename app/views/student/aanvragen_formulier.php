<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data["title"]?></title>
    <style>
      body {
          background-color: #484e53!important;
      }

      a {
        color: rgb(37, 255, 182) !important;
        text-decoration: none !important;
      }
      h1 {
        color: rgb(37, 255, 182) !important;
      }
      </style>
</head>
<body>
    <!-- Form to write -->
    <form action="/student/aanvragen_formulier" method="POST">
        <h1><label for="amount">Hoeveelheid?</label>
            <input type="number" id="amount" name="amount" min="1" required></h1>
        <br>
        
        <h1><label for="message">Reden voor aanvraag?</label> <br>
        <textarea id="message" name="message" rows="5" cols="60" placeholder="Vul in" required></textarea>
            <!-- <input type="text"  style="height:100px; width:200px;"></h1> -->
        <br>

        <h1><label for="location">Bezorg locatie:</label>
            <select name="location" id="location" required>
                <option value="Daltonlaan">Daltonlaan</option>
                <option value="Kaneneiland">Kaneneiland</option>
            </select></h1>
        <br>
            <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
            <input type="hidden" value="0" name="accepted">
        <input type="submit" style="width:250px; height:30px;">
    </form>
    
</body>
</html>