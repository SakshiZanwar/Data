<!-- Form Example 4-->
<!DOCTYPE html>
<html>
    <head>
        <title>Form Example 4</title>
    </head>
    <body>
        <form>
            <table>
                <tr>
                <th class="td_acctype" rowspan="2"><label for="acctype">Account Type:</label></th>
                <td class="individual">
                    <input type="radio" id="Individual" name="acctype" value="Individual">
                    <label for="Individual">Individual</label>
                </td>
                <td>
                    <input type="radio" id="Entity" name="acctype" value="Entity">
                    <label for="Entity">Entity</label>
                </td>
                </tr>
            </table>
            <label for="fname"><strong>First Name:</strong></label>
            <input type="text" id="fname" name="fname" />
            <br>
            <br>
            <label for="mname"><strong>Middle Name or Initial:</strong></label>
            <input type="text" id="mname" name="mname" />
            <br>
            <br>
            <label for="lname"><strong>Last Name:</strong></label>
            <input type="text" id="lname" name="lname" />
            <br>
            <br>
            <label for="suffix"><strong>Suffix:</strong></label>
            <select name="suffix" id="suffix">
            <option value="--">--</option>
                <option value="mr">MR.</option>
                <option value="miss">MISS.</option>
                <option value="mrs">MRS.</option>
            </select>
            <br>
            <br>
            <label for="tin"><strong>Taxpayer Identification Number:</strong></label>
            <input type="tin" id="tin" name="tin" size="3" />-
            <input type="tin" id="tin" name="tin" size="3" />-
            <input type="tin" id="tin" name="tin" size="3" />
            <br>
            <br>
            <label for="dob"><strong>Date of Birth:</strong></label>
            <input type="num" id="dob" name="dob" size="3">-
            <input type="num" id="dob" name="dob" size="3">-
            <input type="num" id="dob" name="dob" size="3"> (MM-DD-YYYY)
            <br>
            <br>
            <label for="address"><strong>Street Address:</strong></label>
            <input type="text" id="address" name="address" size="40" /><br>
            <input type="text" id="address" name="address" size="40" /><br>
            <input type="text" id="address" name="address" size="40" />
            <br>
            <br>
            <label for="city"><strong>City :</strong></label>
            <input type="text" id="city" name="city" size="40" />
            <br>
            <br>
            <label for="state"><strong>State :</strong></label>
            <select name="state" id="state">
            <option value="--">--</option>
                <option value="maharashtra">Maharashtra</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Rajasthan">Rajasthan</option>
            </select>
            <br>
            <br>
            <label for="code"><strong>Zip Code:</strong></label>
            <input type="num" id="code" name="code" size="3">-
            <input type="num" id="code" name="code" size="3"> (Plus Four - Optional)
            <br>
            <br>
            <label for="phone"><strong>Home Phone:</strong></label>
            (<input type="num" id="phone" name="phone" size="3">)
            <input type="num" id="phone" name="phone" size="3">-
            <input type="num" id="phone" name="phone" size="4">
            <br>
            <br>
            <label for="license"><strong>Driver's License/State ID Number :</strong></label>
            <input type="text" id="license" name="license" size="40" />
            <br>
            <br>
            <label for="issuingState"><strong>Issuing State:</strong></label>
            <select name="issuingState" id="issuingState">
            <option value="--">--</option>
                <option value="maharashtra">Maharashtra</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Rajasthan">Rajasthan</option>
            </select>
            <br>
            <br>
            <label for="exp."><strong>Expiry Date:</strong></label>
            <input type="num" id="dob" name="dob" size="3">-
            <input type="num" id="dob" name="dob" size="3">-
            <input type="num" id="dob" name="dob" size="5"> (MM-DD-YYYY)
            <br>
            <br>
        </form>
    </body>
</html>