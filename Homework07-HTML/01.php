<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>First Task</title>
</head>
<body>
	<?php 
		$months = "<option value=\"0\">month</option><option value=\"1\">January</option><option value=\"2\">February</option><option value=\"3\">March</option>
                    <option value=\"4\">April</option><option value=\"5\">May</option><option value=\"6\">June</option><option value=\"7\">July</option>
                    <option value=\"8\">August</option><option value=\"9\">September</option><option value=\"10\">October</option>
                    <option value=\"11\">November</option><option value=\"12\">December</option></select>";

        $days = '';
        for ($i = 1; $i < 32; $i++) {
            $days .= "<option value=\"$i\">$i</option>";
        }
        $days .= '</select>';

        $year = date('Y');

        $birthYear = '<select name="birthYear" ><option value="0">year</option>';
        for ($i = $year - 18; $i > 1950; $i--) {
            $birthYear .= "<option  value=\"$i\">$i</option>";
        }
        $birthYear .= '</select>';

        $hireYear = '<select name="hireYear" ><option value="0">year</option>';
        for ($i = $year; $i > $year - 40; $i--) {
            $hireYear .= "<option value=\"$i\">$i </option>";
        }
        $hireYear .= '</select>';

        $birthDay = '<select name="birthDay" ><option value="0">day</option>' . $days;
        $birthMonth = '<select name="birthMonth" id="birthMonth">' . $months;
        $hireDay = '<select name="hireDay" ><option value="0">day</option>' . $days;
        $hireMonth = '<select name="hireMonth" id="hireMonth">' . $months;
    ?>
	<h1>Add Employee</h1>
	<form action="add.php" method="post">
		<table>
			<tr>
				<td><label for="fname">First name: </label></td>
				<td><input type="text" id="fname" name="fname" required/></td>
			</tr>
			<tr>
				<td><label for="lname">Last name: </label></td>
				<td><input type="text" id="lname" name="lname"  required/></td>
			</tr>
			<tr>
				<td><label for="title">Title: </label></td>
				<td><input type="text" id="title" name="title" required/></td>
			</tr>
			<tr>
				<td><label>Title of Courtesy: </label></td>
				<td>
					<input name="courtesy" id="dr" value="Dr." type="radio" /><label for="dr">Dr.</label>
					<input name="courtesy" id="mr" value="Mr." type="radio" checked/><label for="mr">Mr.</label>
					<input name="courtesy" id="mrs" value="Mrs." type="radio" /><label for="mrs">Mrs.</label>
					<input name="courtesy" id="ms" ="Ms." type="radio" /><label for="ms">Ms.</label>
				</td>
			</tr>
			<tr>
				<td><label for="birthMonth">Birth date: </label></td>
				<td><?= $birthMonth, $birthDay, $birthYear ?></td>
			</tr>
			<tr>
				<td><label for="hireMonth" >Hire date: </label></td>
				<td><?= $hireMonth, $hireDay, $hireYear ?></td>
			</tr>
			<tr>
				<td><label for="address">Address: </label></td>
				<td><input type="text" id="address" name="address"  required/></td>
			</tr>
			<tr>
				<td><label for="city">City: </label></td>
				<td><input type="text" id="city" name="city" required/></td>
			</tr>
			<tr>
				<td><label for="region">Region: </label></td>
				<td><input type="text" id="region" name="region" required/></td>
			</tr><tr>
				<td><label for="postCode">Postal Code: </label></td>
				<td><input type="text" id="postCode" name="postCode"/></td>
			</tr>
			<tr>
				<td><label for="country">Country: </label></td>
				<td><input type="text" id="country" name="country" required/></td>
			</tr>
			<tr>
				<td><label for="homePhone">Home Phone: </label></td>
				<td><input type="text" id="homePhone" name="homePhone" required/></td>
			</tr>
			<tr>
				<td><label for="extension">Extension: </label></td>
				<td><input type="text" id="extension" name="extension" /></td>
			</tr>
			<tr>
				<td><label for="notes">Notes: </label></td>
			</tr>
			<tr><td colspan="2"><textarea name="notes" rows="5" cols="37" id="notes" name="notes"></textarea></td></tr>
			<tr>
				<td><label for="manager">Manager: </label></td>
				<td>
					<select name="manager" id="manager">
						<option value="Andrew Fuller">Andrew Fuller</option>
						<option value="Martin Luter">Martin Luter</option>
						<option value="Jesus Maladega">Jesus Maladega</option>
						<option value="Penka Martova">Penka Martova</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="password">Password: </label></td>
				<td><input type="password" id="password" name="password" required/></td>
			</tr>
			<tr>
				<td><label for="repeatPassword">Repeat Password: </label></td>
				<td><input type="password" id="repeatPassword" name="repeatPassword" required/></td>
            </tr>
		</table>
        <br>
		<button type="submit">Add Employee</button>
	</form>
</body>
</html>