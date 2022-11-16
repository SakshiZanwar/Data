<!-- Form Example 5-->
<!DOCTYPE html>
<html>
    <head>
        <style>
            .columnA, .columnB, .columnC {
				float: left;
				width: 31%;
				padding: 15px;
				text-align:justify;
			}
        </style>
        <title>Form Example 5</title>
    </head>
    <body>
        <form>
        <div class = "row">
			
			<div class = "columnA">
				<h2></h2>
                <label for="fname"><strong>First Name: *</strong></label>
                <input type="text" id="fname" name="fname" required />
                <br>
                <br>
                <label for="lname"><strong>Last Name: *</strong></label>
                <input type="text" id="lname" name="lname" required />
                <br>
                <br>
                <label for="email"><strong>Work Email: *</strong></label>
                <input type="email" id="email" name="email" required />
                <br>
                <br>
                <label for="jobfunc"><strong>Job Function: *</strong></label>
                <select name="jobfunc" id="jobfunc">
                    <option value="Choose One">Choose One</option>
                    <option value="assistant">Assistant</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Developer">Developer</option>
                </select>
                <br>
                <br>
                <label for="company"><strong>Company: *</strong></label>
                <input type="text" id="company" name="company" required />
            </div>

            <div class = "columnB">
				<h2></h2>
                <label for="fname"><strong>First Name: *</strong></label>
                <input type="text" id="fname" name="fname" required />
                <br>
                <br>
                <label for="lname"><strong>Last Name: *</strong></label>
                <input type="text" id="lname" name="lname" required />
                <br>
                <br>
                <label for="email"><strong>Work Email: *</strong></label>
                <input type="email" id="email" name="email" required />
                <br>
                <br>
                <label for="jobfunc"><strong>Job Function: *</strong></label>
                <select name="jobfunc" id="jobfunc">
                    <option value="Select">Select</option>
                    <option value="assistant">Assistant</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Developer">Developer</option>
                </select>
                <br>
                <br>
                <label for="employee"><strong># Employees: *</strong></label>
                <select name="employee" id="employee">
                    <option value="Select">Select</option>
                    <option value="emp1">Emp1</option>
                    <option value="emp2">Emp2</option>
                    <option value="emp3">Emp3</option>
                </select>
                <br>
                <br>
                <label for="Industry"><strong>Industry: *</strong></label>
                <select name="Industry" id="Industry">
                    <option value="1">Advertising & Media</option>
                    <option value="2">Application Development</option>
                    <option value="3">Sales Department</option>
                </select>
            </div>
            <div class = "columnC">
				<h2></h2>
                <label for="fname"><strong>First Name: *</strong></label>
                <input type="text" id="fname" name="fname" required />
                <br>
                <br>
                <label for="lname"><strong>Last Name: *</strong></label>
                <input type="text" id="lname" name="lname" required />
                <br>
                <br>
                <label for="email"><strong>Work Email: *</strong></label>
                <input type="email" id="email" name="email" required />
                <br>
                <br>
                <label for="phone"><strong>Work Phone: *</strong></label>
                <input type="phone" id="phone" name="phone" required />
                <br>
                <br>
                <label for="company"><strong>Company: *</strong></label>
                <input type="text" id="company" name="company" required />
                <br>
                <br>
                <label for="jobfunc"><strong>Job Function: *</strong></label>
                <select name="jobfunc" id="jobfunc">
                    <option value="Select">Select</option>
                    <option value="assistant">Assistant</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Developer">Developer</option>
                </select>
                <br>
                <br>
                <label for="employee"><strong># Employees: *</strong></label>
                <select name="employee" id="employee">
                    <option value="Select">Select</option>
                    <option value="emp1">Emp1</option>
                    <option value="emp2">Emp2</option>
                    <option value="emp3">Emp3</option>
                </select>
                <br>
                <br>
                <label for="CRMSystem"><strong>CRM System: *</strong></label>
                <select name="CRMSystem" id="CRMSystem">
                    <option value="Select">Select</option>
                    <option value="-">-</option>
                    <option value="-">-</option>
                    <option value="-">-</option>
                </select>
                <br>
                <br>
                <label for="Industry"><strong>Industry: *</strong></label>
                <select name="Industry" id="Industry">
                    <option value="1">Advertising & Media</option>
                    <option value="2">Application Development</option>
                    <option value="3">Sales Department</option>
                </select>
            </div>
        </div>>
        </form>
    </body>
</html>