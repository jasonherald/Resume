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
      <td width="40%" valign="top" align="left"><h1>$name</h1>
		<br>$street
		<br>$city, $state  $zip
		<br>
		<br>$phone
		<br>$email
		<br>$linkedin
      <td colspan="2" valign="top" align="left">
		<br>
_HTML_;


		foreach( $headlines as $line) {
      		echo "<br><b><font size=\"+1\">$line</font></b>";
		}
	
//		<b><font size="+1">Red Hat Certified Engineer</font></b>
//      <br><b><font size="+1">Linux LPIC-1</b> </font>
//      <br><b><font size="+1">ITIL v3 Foundation</font></b>
//      <br><b><font size="+1">Security+</font></b>
//      <br><b><font size="+1">DoD 8570 IAT Level II Compliant</font></b>
print<<<_HTML_
	<br>	
	<br>	
	<br>	
		</td>
    </tr>
<tr>
	<td align="left">
	<h2>Summary:</h2> 
	</td>
	<td colspan="2" align="left">
	$summary_long
	</td>

	<tr>
	<td colspan="3">
	<br>
_HTML_;

$smx_achievements = "
<h2> Recent Achievments: </h2>
<h3> Enterprise Leadership:</h3>

<p> Served as Project Manager for the Cisco network upgrade. Project consisted of a ten person work team, over thirty stake-holders, three months of planning, and a charter to increase security and network bandwidth. Provided:
	<ul>
    	<li> Problem Discovery.
    	<li> Training.
    	<li> Technical Documentation.
    	<li> Project Leadership.
        <li> Scope, Charter, Project Plan, WBS, and Closure documents.
    	<li> Marketed the project to customer Project Managers.
    	<li> Negotiated schedules.
		</ul>
        
<p> Served as Task Force Leader for three environmentally induced datacenter business disruptions. 
	<ul>
		<li> First event response was 90% of production up in one day, final 10% up in two days. 
		<li> Documented response actions and created recovery framework.
		<li> Turned experiences into the Business Continuity Planning and Procedures Project.
		<li> Distilled capabilities and processes and proved they worked.
		<li> Subsequent Power outage response was 100% of production up in 4 hours; including SAN, Network, and Servers from total power down state.
	</ul>


<p> Mapped contract Statement of Work to personal and team goals
	<ul>
    	<li> Met 100% of client requirements.
		<li> Prepared and delivered executive briefings.
		<li> High level of customer engagement and satisfaction.
    	<li> Commended for going above and beyond in client support.
		<li> Worked high profile projects and trained staff on procedures.
		<li> Researched resources to meet client certification requirements that led to 100% target success.
		<li> Enabled team and co-worker growth through training, documentation, encouragement, and the occasional challenge.
		<li> Led the development of a cross-domain team that resolved hundreds of long-standing security vulnerabilities and stream-lined resolution of new vulnerabilities. Team was formally chartered in the contract re-compete.
	</ul>

<h3> Enterprise Engineering: </h3>

<p>Ensured all servers were on regular backup schedule vice the 80% previous.

<p> Wrote data collection (Bourne Shell) and presentation (PHP) scripts
 
<p> Wrote Policy to ensure all new servers were automatically included
	
<p> Enabled enterprise wide network device monitoring

<p> Lead the decommissioning of standard and classified systems

<p> Instigated the enterprise DNS project

<p> Received higher headquarters compliments on network security posture

<p> Wrote, tested, trained, and utilized bare metal switch recovery

<p> Wrote and Implemented VLAN scheme to prepare for massive server growth
   
<p> Trained staff on host configurations

<p> Worked with Global WAN teams to resolve issues

<p> Provided on-call, off-hours support

<p> Continued to meet customer performance objectives on multiple occasions when the Linux/Unix team was critically undermanned

<p> Automated most parts of the Linux server build process
	<ul>
    	<li> Trained co-workers
    	<li> Wrote Build Policy
    	<li> Embedded security hardening in build out
    	<li> Wrote build process to include cross-team requirements
    	<li> Defined standard enterprise build
    	<li> Wrote Kickstart configurations based on USN SPAWAR guidelines
    	<li> Wrote script (Bash) to create custom Kickstart configurations
		<li> Wrote post-install scripts to fix issues on already built servers
	</ul>

<p> Server and network Install and configuration
	<ul>
    	<li> Hardware rack, stack, and cable
    	<li> OS/IOS install, configuration, and hardening
	</ul>
";

// echo $smx_achievements;

print<<<_HTML_

	</td>

	</tr>
	<tr>
	<td colspan="2"><br>
		<h2>Skills:</h2>
<br>
	</td></tr>
	<tr align="left">
	  <td>Red Hat Enterprise Linux</td>
      <td>Team Leadership</td>
      <td>Networking (Cisco)</td>
    </tr>	
	<tr align="left">
      <td>DevOps</td>
      <td>Shell Scripting</td>
      <td>Mentoring</td>
    </tr>
    <tr align="left">
	  <td>Build Automation</td>
      <td>Documentation</td>
      <td>24/7 Response</td>
    </tr>
    <tr align="left">
      <td>Very Large Enterprise</td>
      <td>Classified systems</td>
      <td>Lights-Out Datacenter</td>
    </tr>

</table>

<table border="0"  width="90%">
	<tr>
	<td colspan="3">
	<br>
		<h2>Professional Experience</h2></p>
	<br>

	</tr>
<tr valign="top" align="left">
<td width="40%"> <h3>Linux Systems Engineer</h3>
</td>
<td>
	<b>Rackspace</b> (Aug 12 - Feb 13)
</td>
<tr>
<td colspan="2">
	Served as Subject Matter Expert for e-mail storage. 
	Restarted a stalled but critical deployment roll to 600+ pairs of servers. 
	Commended by support staff for going above and beyond for my role. 
	Daily duties included engineering and operational support for over 1200 servers. 
	Worked closely with development teams and business leaders to ensure code drops were deployed successfully while minimizing downtime. 
	Provided documentation for my responsibilities and project plans for larger efforts. 
	<p> 
	<p> <em>	
	Red Hat Enterprise Linux 5, 6,
	Chef,
	Git,
	MySQL,
	DRBD
	</em>
<br> <br> <br> <br> 
</td></tr>
<tr valign="top" align="left">
<td width="40%"><h3>Team Lead (Linux/Unix)</h3>
</td>
<td>
	<b>Smartronix</b> (Apr 09 - Aug 12)
</td>
<tr>
<td colspan="2">
	<p> 
	Led a four person team that supported a 1:45 admin to server ratio, met stringent security requirements, tripled server count with reduced staff, and dealt with a high rate of turnover due to contract requirements.
	Served as a Task Force Leader during three full datacenter outages.
	Ensured all servers were on regular backup schedule vice the 80% previous.
	Wrote data collection (Bourne Shell) and presentation (PHP) scripts.
	Wrote Policy to ensure all new servers were automatically included.
	Lead the decommissioning of standard and classified systems.
	Instigated the enterprise DNS project.
	Trained staff on host configurations.
	Provided on-call, off-hours support.
	Patched RHEL, Solaris, and HP/UX servers.
	Documented LVM, ASM, and Multi-pathing procedures for server configurations.
	Provided business case and initial leadership for a cross-function team that eliminated hundreds of long standing security vulnerabilities. 
	 
	<p> <em>	
	 Red Hat Enterprise Linux 3, 4, 5 ,
	 Solaris 10,
	 HP/UX 11.0-11.31, 
	 EMC Powerpath,
	 HP DL, ML, PA-RISC and Itanium, Dell 2x50, 6x50.
	Supported Oracle 10 RAC, Apache, Tomcat, Oracle Application Server, and COTS.
</em>
<br> <br> <br> <br> 
</td> 
</tr>

<tr valign="top" align="left">
<td width="40%"> <h3>Project Manager (Network Engineering Team)</h3>
</td>
<td>
	<b>Smartronix</b> (May 10 - Aug 12)
</td>
<tr>
<td colspan="2">
	<p> 
	Led the five person team that supported Cisco networking devices including IOS upgrades, enterprise reconfiguration, and documentation. 
	Experienced a 50% increase in network devices, removed over one half mile of unused cable and hundreds of defunct network drops, and brought a completely unsupported network infrastructure into enterprise compliance. 
	Worked with Global WAN teams to resolve issues.
	Enabled enterprise wide network device monitoring.
	Received higher headquarters compliments on network security posture.
	Wrote, tested, trained, and utilized bare metal switch recovery.
	Wrote and Implemented VLAN scheme to prepare for massive server growth.
	Commended by higher headquarters auditing staff on network security posture and documentation. 
	Provided business case and garnered customer support for a scheduled network outage affecting several dozen applications.
	<p> <em>	
	 Cisco IOS 12.2(x)
</em>
<br> <br> <br> <br> 
</td></tr>
<br> <br> <br> <br> 
<tr valign="top" align="left">
<td width="40%"><h3>Senior Systems Engineer</h3></td>
</td>
<td>
	<b>Independent Contractor</b> (Sep 08 - present)
</td>
<tr>
<td colspan="2">
	<p>	
	Supported OS testing teams and client projects.
	Patched servers as needed.
 	Automated processes, wrote standards, and trained System Admins.
 	Provided written evaluations of vendor software. 
	Performed Security tool testing.		
	<p>
<em>	
	 Red Hat Enterprise Linux 3, 4, 5, 6,  Solaris 10, Fedora
</em>
</ul>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td width="40%"><h3>Senior Systems Engineer</h3></td>
</td>
<td>
	<b>Wachovia Bank</b> (Dec 05-Aug 08)
</td>
<tr>
<td colspan="2">
	<p> 
	Developed interdisciplinary customer feedback loop for the Distributed Systems Engineering team. 
	Automated processes, wrote standards, and trained incoming engineers.
	Provided on-call centralized security application support for 3,000+ servers.
	Provided written evaluations of vendor software.
	
<em>	
	<p> 
	Red Hat Enterprise Linux 2, 3, 4, 5.
	 Solaris 8, 9, 10. 
	 HP/UX 11.0-11.31.
	 SuSE Linux Enterprise Server (SLES) 8, 9, 10. 
	 HP DL, ML, and PA-RISC, Dell 2x50, 6x50. 
</em>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td width="40%"><h3>Systems Engineer</h3></td>
</td>
<td>
	<b>Bank of America (Apex Systems)</b> (May 05-Dec 05)
</td>
<tr>
<td colspan="2">
	<p> 
	Automated processes, wrote standards, and trained incoming engineers.
	Build, configure, and trouble-shoot large scale datacenter.	
	Patched servers, replaced failed hardware, and maintainted systems in production state.
<em>	
	<p>
	 Red Hat Enterprise Linux 2, 3, 4. 
	 Solaris 8, 9, 10. 
	 HP/UX 11.0-11.31.
	 EMC Powerpath. 
	 IBM Blade Chassis. 
	 Fujitsu Primepower, Sun mid-range, and IBM Power servers. 
	 HP DL, ML, Dell 2x50, 6x50. 
</em>
</ul>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td><h3>Senior Unix Engineer</h3> </td>
</td>
<td>
	<b>Transamerica Reinsurance, Inc. (Contractor)</b> (Sep 04-May 05)
</td>
<tr>
<td colspan="2">
	<p> 
	Commended by parent company for automation of Solaris Jumpstart and Red Hat Kickstart implementation and procedures. 
	Configured Apache and Tomcat to support application development team's needs. 
	<p>
	<em> 
	Solaris 2.5, 6, 7, 8, 9. 
	Red Hat Enterprise Linux 2, 3, 4. 
	Supported: Oracle 7, 8. 
	Veritas Volume Manager/Filesystem 2.x, 3.x. 
	Sendmail, Apache, Tomcat. 
	</em>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td><h3>Senior Unix Engineer</h3> </td>
</td>
<td>
	<b>Wall Street Journal/Dow Jones, Inc.</b> (Jan 01-Sep 04)
</td>
<tr>
<td colspan="2">
<p>
Saved ~$200,000 by providing Application Development team custom software to increase availability.
Analyzed life-cycle server configurations to save $120,000 in license costs. 
	Automated Solaris Jumpstart and Red Hat Kickstart implementation and procedures. 
	Reduced n-tiered 30 minute SLAs to a 3 minute response time with direct hand-off, 24x7x365.25. 
	<p>
	<em>
	Solaris 2.4, 2.5, 6, 7, 8, 9, 
	Red Hat Enterprise Linux 2, 3, 4, 
	Sun Cluster 2.2, 
	Legato backup, 
	Supported: Oracle 7, 8. Vignette Story Server,
	Veritas Volume Manager/Filesystem 2.x, 3.x, 
	Sendmail, Apache, Tomcat 
	</em>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td><h3>Senior Unix Engineer</h3> </td>
</td>
<td>
	<b>Rosenbluth International</b> (May 00 - Dec 00)
</td>
<tr>
<td colspan="2">
	<p>
	Worked with developers to standardize deployment processes for application software.
	Investigated VM solutions for datacenter.
	Day to day operational support. 
	<p>
	<em> Solaris 7, 8, 9, 
	 Red Hat Enterprise Linux 3, 
	 Legato backup, 
	 Supported: Oracle 7, 8, 
	 Veritas Volume Manager/Filesystem 2.x, 3.x, 
	 Sendmail, Apache, Tomcat 
	</em>
<br> <br> <br> <br> 
</td>
</tr>
<tr valign="top" align="left">
<td><h3>Team Lead (Software Deployment)</h3> </td>
</td>
<td>
	<b>Bell Atlantic/Verizon (TekSystems, Inc.)</b> (Aug 99-May 00)
</td>
<tr>
<td colspan="2">
	<p>Team Lead for the Bell Atlantic Distributed Software Operations-Software Deployment ISO 9002 certified group responsible for deploying over 70 application packages and software/OS upgrades to more than 1100 production Unix (Solaris, HP-UX) servers in the North-Eastern US region. Responsibilities included building and modifying shell scripts, performing remote software deployments, supervising six deployment specialists, troubleshooting server and package errors, coordinating 150+ item change control procedures, and recovering from outages in minimal time. Built a certification resource web site, trained new hires, wrote a Tk based graphical interface to unify existing scripts, taught basic HTML, introduced software version control, and improved the workload assignment process. 
	<p>
	<em> Solaris 6, 7, 8, 
	 HP/UX 11 
	</em>
<br> <br> <br> <br> 
</td>
</tr>
<tr valign="top" align="left">
<td><h3>Senior Unix Administrator</h3> </td>
</td>
<td>
	<b>Wall Street Journal/Dow Jones Inc. (TekSystems, Inc.)</b> (Sep 98-Aug 99)
</td>
<tr>
<td colspan="2">
	<p>
	Saved over $75,000 in new-hire costs by analyzing, communicating, and tracking required production support skills on limited use software.
	 Level 2 support for print Journal.
	 Documented procedures for Help Desk staff. 
	<p>
	<em> Solaris 6, 7, 8, 
	 Legato backup, 
	 Veritas Volume Manager/Filesystem 2.x, 3.x 
	</em>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td><h3>Unix Engineer</h3> </td>
</td>
<td>
	<b>Independent Contractor</b> (Jun 98-Sep 98)
</td>
<tr>
<td colspan="2">
	<p> Documented improved server configurations to fix backup issues.
	 Configured Apache.
	<p>
	<em>	
	 Red Hat Linux 3, 4, 5, 6, 7, 8, 9, 
	 SCO Unix,
	 Sendmail, Apache, Tomcat 
	</em>
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td><h3>Linux Admin</h3> </td>
</td>
<td>
	<b>Spidernet s.r.l</b> (Apr 97-May 98)
</td>
<tr>
<td colspan="2">
	<p>
	 Configured Apache to support application development team's needs. 
	 Took ownership of OS and hardware production issues and channeled application issues to specialists. 
	<p>
	<em>	
	 Solaris 2.5, 
	 Red Hat Linux 3, 4, 5, 6, 
	 Sendmail, Apache, Tomcat 
	</em>
<br> <br> <br> <br> 
</td>
</tr>
</tr>

<tr valign="top" align="left">
<td><b>Director of Operations</b>
</td> 	
<td>
	<b>City of Glenarden, MD</b> (Feb 94-Feb 95)
</td>
</tr>

<tr align="left">
<td colspan="2">
	Served as Acting City Manager. Supervised 5 direct reports and 32 total staff. 
<br> <br> <br> <br> 
</td>
</tr>

<tr valign="top" align="left">
<td>
<b>Small Business Manager</b>
</td> 	
<td>
	<b>Entrepreneur</b> (May 90-Feb 94)
</td>
<tr>
<td colspan="2">
	Ran a training business that met a 700% student increase in 13 months. Added revenue streams for related products without requiring large inventory loads.

<br> <br> <br> <br>
</tr>

<tr valign="top" align="left">
<td>
	<b>Operations Section Manager</b>
 </td> 
<td>
	<b>U.S. Air Force</b> (Apr 82-Sep 92)
</td>
<tr>
<td colspan="2">
	Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.
<br> 
<br>
</td>
</tr>

	<tr>
	<td colspan="3">
<br>
		<h2>Education/Certification</h2>
	</td>
	</tr>
<tr valign="top" align="left">
<td colspan="3">
	<br><b>Red Hat Certified Engineer</b> 
	<br><b>LPIC-1</b> 
	<br><b>Sun Certified Solaris 7 System Administrator</b>
	<br><b>ITIL v3 Foundation</b>
	<br><b>Security+</b>
	<br><b>Master of Arts</b> Public Administration, Midwestern State Univ., Texas (1995)
	<br><b>Bachelor of Science</b> Liberal Arts, Regents College, New York (1993)
<br>
</td>
</tr>

</table>
</center>


</body></html>
_HTML_;

?>
