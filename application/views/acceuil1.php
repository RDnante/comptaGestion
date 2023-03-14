<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$gen = $general;
var_dump($gen);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url()."assets/css/bootstrap.css"?>>
    <title>test ato</title>
</head>
<body>
    <form action="<?php echo site_url("Welcome/tiers"); ?>" method="post">
        <label>compte generale</label>
        <select name="general" class="">
            <?php for ($i=0; $i < count($gen) ; $i++) { ?>
                <option value="<?php echo $gen[$i]['idcomptegeneral'] ?>"><?php echo $gen[$i]['intitule'] ?></option>
            <?php } ?>
        </select>
        <label>numero</label>
        <input type="number" name="numero" min="0" max="9999">
        <label>intituler</label>
        <input type="text" name="intituler" id="">
        <input type="submit" value="ok">
    </form>
</body>
</html>