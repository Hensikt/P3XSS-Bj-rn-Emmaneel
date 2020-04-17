<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEC - Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="action.php">
    <ul class="form-style-1">
        <li><label>First name &amp; Last name <span class="required">&#42;</span></label><input type="text" name="field1"
                                                                                                class="field-divided" placeholder="First"/>
            <input type="text" name="field2" class="field-divided" placeholder="Last"/></li>
        <li>
            <label>Email <span class="required">&#42;</span></label>
            <input type="email" name="field3" class="field-long"/>
        </li>
        <li>
            <label>Subject</label>
            <select name="field4" class="field-select">
                <option value="Advertise">Advertise</option>
                <option value="Partnership">Partnership</option>
                <option value="General Question">General</option>
            </select>
        </li>
        <li>
            <label>Your Message <span class="required">&#42;</span></label>
            <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
        </li>
        <li>
            <input type="submit" value="Submit"/>
        </li>
    </ul>
</form>
</body>
</html>

