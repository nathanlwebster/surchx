<html>
    <body>
<form name="contactform" method="post" action="email.php">
    <table width="450px">
    <tr>
     <td valign="top">
      <label for="name">First and Last Name*:</label>
     </td>
     <td valign="top">
      <input  type="text" name="name" maxlength="50" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="company_name">Company Name:</label>
     </td>
     <td valign="top">
      <input  type="text" name="company_name" maxlength="50" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="transactions">Monthly credit card transcations (not dollar volume)*:</label>
     </td>
     <td valign="top">
      <input  type="text" name="transactions" maxlength="50" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="email">Email*:</label>
     </td>
     <td valign="top">
      <input  type="text" name="email" maxlength="80" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="phone">Phone:</label>
     </td>
     <td valign="top">
      <input  type="text" name="phone" maxlength="30" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="message">Message (not required):</label>
     </td>
     <td valign="top">
      <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
     </td>
    </tr>
    <tr>
     <td colspan="2" style="text-align:center">
      <input type="submit" value="Submit"> 
     </td>
    </tr>
    </table>
    </form>
    </body>
</html>