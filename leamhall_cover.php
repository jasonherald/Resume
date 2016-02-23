<?php

require_once 'leamhall_includes.php';

print<<<_HTML_
<html>
<head>
	<title>$title</title>
</head>
<body bgcolor="#ffffff" text="#000000">

<center>
<table border="0"  width="90%">
    <tr >
    <td width="40%" valign="top" align="left"><h1>Leam Hall</h1>
		$phone
		<br>$email
		<br>$linkedin
	</td>

	<td align="left" valign="top">
	<h2>Summary:</h2> 
	$summary
	<br>
	<br>
	<br>$headline_list
	</td>
	</tr>

<tr>
<td colspan="3" align="left">
	<br>
	$leadership_achievements
	<br>
	$engineering_achievements
</td>
</tr>

<tr>
<td colspan="3">
	<br>
	<br>
	<h2>Professional Experience</h2></p>
<br>
</td>
</tr>
<tr valign="top" align="left">
<td width="40%"> <b>Linux Systems Engineer</b>
</td>
<td>
	<b>Rackspace</b> (Aug 12 - Feb 13)
</td>
<tr valign="top" align="left">
<td width="40%"><b>Team Lead (Linux/Unix)</b>
</td>
<td>
	<b>Smartronix</b> (Apr 09 - present)
</td> 
</tr>
<tr valign="top" align="left">
<td width="40%"> <b>Project Manager (Network Engineering Team)</b>
</td>
<td>
	<b>Smartronix</b> (May 10 - Dec 11)
</td></tr>

<tr valign="top" align="left">
<td width="40%"><b>Senior Systems Engineer</b></td>
</td>
<td>
	<b>Independent Contractor</b> (Sep 08 - present)
</td>
</tr>

<tr valign="top" align="left">
<td width="40%"><b>Senior Systems Engineer</b></td>
</td>
<td>
	<b>Wachovia Bank</b> (Dec 05-Aug 08)
</td>
</tr>

<tr valign="top" align="left">
<td width="40%"><b>Systems Engineer</b></td>
</td>
<td>
	<b>Bank of America (Apex Systems)</b> (May 05-Dec 05)
</td>
</tr>

<tr valign="top" align="left">
<td><b>Senior Unix Engineer</b> </td>
</td>
<td>
	<b>Transamerica Reinsurance, Inc. (Contractor)</b> (Sep 04-May 05)
</tr>

<tr valign="top" align="left">
<td><b>Senior Unix Engineer</b> </td>
</td>
<td>
	<b>Wall Street Journal/Dow Jones, Inc.</b> (Jan 01-Sep 04)
</tr>

<tr valign="top" align="left">
<td><b>Senior Unix Engineer</b> </td>
</td>
<td>
	<b>Rosenbluth International</b> (May 00 - Dec 00) 
</tr>

<tr valign="top" align="left">
<td><b>Team Lead (Software Deployment)</b> </td>
</td>
<td>
    <b>Bell Atlantic/Verizon (TekSystems, Inc.)</b> (Aug 99-May 00)
</td>

<tr valign="top" align="left">
<td><b>Senior Unix Administrator</b> </td>
</td>
<td>
	<b>Wall Street Journal/Dow Jones Inc. (TekSystems, Inc.)</b> (Sep 98-Aug 99)
</tr>

<tr valign="top" align="left">
<td><b>Unix Engineer</b> </td>
</td>
<td>
	<b>Independent Contractor</b> (Jun 98-Sep 98)
</tr>

<tr valign="top" align="left">
<td><b>Linux Admin</b> </td>
</td>
<td>
	<b>Spidernet s.r.l</b> (Apr 97-May 98)
</td>
</tr>

<tr valign="top" align="left">
<td><b>Director of Operations</b>
</td> 	
<td>
	<b>City of Glenarden, MD</b> (Feb 94-Feb 95)
</td>
</tr>

<tr valign="top" align="left">
<td>
<b>Small Business Manager</b>
</td> 	
<td>
	<b>Entrepreneur</b> (May 90-Feb 94)
</td>
</tr>

<tr valign="top" align="left">
<td>
	<b>Operations Section Manager</b>
 </td> 
<td>
	<b>U.S. Air Force</b> (Apr 82-Sep 92)
</td>
</tr>
</table>
</center>


</body></html>
_HTML_;

?>
