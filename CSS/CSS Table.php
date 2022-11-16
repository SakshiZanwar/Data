<!DOCTYPE html>
<html>
<head>
<style>
h1 {
color:green;
}
body {
text-align:left;
}
table,td,th {
 border: 1.5px solid green;
 width: 80px;
}
table.one {
table-layout:auto;
border:100px blue;
border-collapse: collapse;
border-spacing:10px;
caption-side:top;
empty-cells: show;
}
table.two {
table-layout:fixed;
border:100px red;
border-collapse: separate;
border-spacing:20px;
caption-side:bottom;
empty-cells: hide;
}
</style>
</head>
<body>
    <h2>auto table layout:</h2>
    <table class="one">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
        </tr>
        <tr>
            <td>1</td>
            <td>A_B_C_D_E_F_G_H_I_J_K_L_M_N_O_P</td>
        </tr>
        <tr>
            <td>2</td>
            <td>X_Y_Z</td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
        </tr>
    </table>
    <br>
    <br>
    <h2>fixed table layout:</h2>
    <table class="two">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
        </tr>
        <tr>
            <td>1</td>
            <td>A_B_C_D_E_F_G_H_I_J_K_L_M_N_O_P</td>
        </tr>
        <tr>
            <td>2</td>
            <td>X_Y_Z</td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
        </tr>
    </table>
</body>
  
</html>