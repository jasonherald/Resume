<?php

require_once 'leamhall_includes.php';

print<<<_HTML_

<html>
<head>
     <title>$title</title>
</head>
<body bgcolor="#ffffff" text="#000000">

<h2> Leam's geek bio</h2>

<br>
<br>
<table width="90%">
<tr valign="top">
<td>
<h3>Top 3 reasons you want to hire me:</h3>
	<ul>
	<li><i>I will be using a decade and a half of enterprise experience to make your life easier.</i>
	<li><i>When things blow up I know how to get them back on track quickly.</i>
	<li><i>Co-workers (present and former) know they can call me at any time and get an answer that doesn't make them feel stupid.</i>
	</ul>
</td>

<td>
<h3>Resumes</h3>
<p><a href="./leamhall.php">Short and to the point</a>
<p><a href="./leamhall_long.php">Longer but not too boring</a>
</td>
</tr>
</table>

<p><h3>What I really do:</h3>
<p><b>Learn more:</b> My RHCE is dated from 2003 on RHEL version 2. I earned that certification after teaching myself Linux and Unix systems administration for about 8 years and I have not stopped learning yet. Current projects are deeper PHP, a configuration management tool like Puppet, and formal project management. 


<p><b>Make things work:</b> I support Red Hat systems every day and often fix Solaris and HP/UX machines too. I am fortunate to be a part of the Aqueduct community and contribute code to secure Red Hat systems on my own time.

<p><b>Have fun:</b> Life is too short and crazy to take everything seriously. My goals and plans are pretty big so I try to keep from getting bothered by small stuff and stay focused on what my passions really are.

<br>
<br>
<p>Leam

<p><i>p.s. You can see what people say about my work on <a href="http://www.linkedin.com/in/leamhall">LinkedIn</a></i>

<br>
<br>
<br>
<table width="90%">
<tr valign="top">
<td width="50%">
	<b>Certifications and Community Involvement</b>
	$cert_edu_community_list
</td>
<td width="50%">
	<b>Current Projects</b>
	$current_projects_list
</td>
</tr>
</table>

</body>
</html>
_HTML_

?>

