<?php

$title = "Leam Hall -- Experienced Red Hat Systems Engineer";

$name = "Leam Hall";

$street = "926 Mashburn Ave";
$city = "Pulaski";
$state = "VA";
$zip = "24301";

$phone = "704.607.6747";
$email = "leamhall@gmail.com";
$linkedin = "http://www.linkedin.com/in/leamhall";

$headlines = array( 
	"Red Hat Certified Engineer (2003)",
	"Red Hat Certified System Administrator (2012)",
    "Linux LPIC-1",
	"Sun Solaris Certified System Administrator (Solaris 7)",
    "ITIL v3 Foundation",
    "Security+ (2008, 2013)",
    "DoD 8570 IAT Level II Compliant"
	);

$summary = "Learn more, make things work, have fun.";

$summary_long = "Skill domains are Linux/Unix, Project Management, DevOps, ITIL, and Network Operations in web facing, secure, very large enterprise environments."; 

$leadership_achievements = "
<h3> Enterprise Leadership:</h3>

<p> In preparation for a higher headquarters inspection I was tasked to lead a multi-team effort to engineer and activate a completely new Industrial Control System infrastructure. We utilized industry best practices and security recommendations to set up a sustainable yet secure environment. The team consisted of SMEs from Windows, Linux, Network Engineering, Facilities, Physical Security, and Data Center Operations. We had reached the Phase One cutover decision point by the time the inspectors realized there were no approved evaluation criteria for the audit and cancelled that aspect of the inspection.

<p> Served as Project Manager for the Cisco network upgrade. Project consisted of a ten person work team, over thirty stake-holders, three months of planning, and a charter to increase security and network bandwidth. 
        
<p> Served as Task Force Leader for three environmentally induced datacenter business disruptions. First event response took two days for full production recovery, the last one took four hours. Turned experiences into the Business Continuity Planning and Procedures Project.

<p> Mapped Team and Personal Goals to contract Statement of Work to meet 100% of the client's requirements with a high level of customer satisfaction. Enabled team and co-worker growth within the SOW while we eliminated hundreds of long-standing issues.

";


$engineering_achievements = "
<h3> Enterprise Engineering: </h3>

<p> When a major inspection required months of planning, documentation, and coding (Ruby, Shell, Git), I was tasked to lead the groups Security Team to address as many issues as possible. My role involved identifying issues, documenting plans and processes, coding for discovery and remediation, mentoring others in version control and shell programming, and keeping upper management informed of both the good news and bad.

<p> An Industrial Control System upgrade project had been stalled for six months. On Monday I was asked to resolve the issue and by Friday we were at the 'Go/No Go' stage. The next Wednesday we executed successfully.

<p> Exceeded customer performance objectives on multiple occasions when the Linux/Unix team was critically undermanned. Wrote data collection, security, and task automation (Bourne Shell) and presentation (PHP) scripts. Provided on-call, off-hours support. Received higher headquarters compliments on network security posture. Wrote, tested, trained, and utilized bare metal switch (Cisco) recovery
";

/*
$jobs = 
	array('198204199210' => 
		array ('title' => 'Operations Section Manager',
			'employer' => 'U.S. Air Force',
			'start_mo' => 'Apr',
			'start_yr' => '1982',
			'end_mo' =>	  'Sep',
			'end_yr' =>   '1992',
			'results' => 'Lots of stuff.',
			'skills' => 'Lots of other stuff',
			'manager' => 'MSgt Someone',
			'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.'
            'duties' => 'Teach, write, respond.'
            'tech' => '')
			),
	array('199005199402' => 
		array ('title' => 'Small Business Manager',
			'employer' => 'Entrepreneur',
			'start_mo' => 'May',
			'start_yr' => '1990',
			'end_mo' =>	  'Feb',
			'end_yr' =>   '1994',
			'results' => 'Lots of stuff.',
			'skills' => 'Lots of other stuff',
			'manager' => 'Self',
			'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.'
            'duties' => 'Teach, write, respond.'
            'tech' => '')
			),
	array('198204199210' => 
		array ('title' => 'Operations Section Manager',
			'employer' => 'U.S. Air Force',
			'start_mo' => 'Apr',
			'start_yr' => '1982',
			'end_mo' =>	  'Sep',
			'end_yr' =>   '1992',
			'results' => 'Lots of stuff.',
			'skills' => 'Lots of other stuff',
			'manager' => 'MSgt Someone',
			'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.'
            'duties' => 'Teach, write, respond.'
            'tech' => '')
			)

	);
print_r ($jobs);

*/

$cert_edu_community = array(
	"Red Hat Certified Engineer (2003)",
  "LPIC-1",
  "Puppet Professional training",
	"ITIL v3 Foundation",
	"DoD 8570 IAT Level II Compliant",
	"Rackspace CloudU",
	"F5 Big-IP LTM Essentials V10 (WBT)",
	);

$headline_list = "";
foreach ($headlines as $hl) {
    $headline_list .= "<b>$hl</b><br>\n";
    }

$cert_edu_community_list = "";
foreach ($cert_edu_community as $cec) {
    $cert_edu_community_list .= "<p>$cec\n";
    }

$current_projects = array(
	"Work on Bash security tools",
  "Instigating a C programming <a href=\"https://github.com/LeamHall/ale_lcthw\">learning group</a>",
	"Practical business education",
  "Technical scuba diving and teaching",
  "Muzzleloading rifle accuracy"
	);

	// "Learning Python",
	// "C, Python, and PHP programming",
	//"Refactor PHP code for a couple projects",
	//"Implement Agile processes at work",

$current_projects_list = "";
foreach ($current_projects as $cp) {
	$current_projects_list .= "<p>$cp\n";
	}

/*
print<<<_HTML_

	</td>

	</tr>
	<tr>
	<td colspan="2"><br>
		<h2>Skills:</h2>
<br>
	</td></tr>
	<tr align="left">
	  <td>Red Hat Linux</td>
      <td>Team Leadership</td>
      <td>Networking (Cisco)</td>
    </tr>	
	<tr align="left">
      <td>Shell Scripting</td>
      <td>Mentoring</td>
      <td>Classified systems</td>
    </tr>
    <tr align="left">
	  <td>Build Automation</td>
      <td>Documentation</td>
      <td>24/7 Response</td>
    </tr>
    <tr align="left">
      <td>Very Large Enterprise</td>
      <td>Lights-Out Datacenter</td>
      <td>Commercial Unix</td>
    </tr>

</table>

<table border="0"  width="90%">
	<tr>
	<td colspan="3">
	<br>
	<br>
		<h2>Professional Experience</h2></p>
	<br>

	</tr>
<tr valign="top" align="left">
<td width="40%"> <h3>Project Manager (Network Engineering Team)</h3>
</td>
<td>
	<b>Smartronix</b> (May 10 - present)
</td>
<tr>
<td colspan="2">
	<p> 
	Led the five person team that supported Cisco networking devices including IOS upgrades, enterprise reconfiguration, and documentation. 
	Experienced a 50% increase in network devices, removed over one half mile of unused cable and hundreds of defunct network drops, and brought a completely unsupported network infrastructure into enterprise compliance. 
	Commended by higher headquarters auditing staff on network security posture and documentation. 
	Provided business case and garnered customer support for a scheduled network outage affecting several dozen applications.
	<p> <em>	
	 Cisco IOS 12.2(x).
</em>
</td></tr>
<br> <br> <br> <br> 
<tr valign="top" align="left">
<td width="40%"><h3>Team Lead (Linux/Unix)</h3>
</td>
<td>
	<b>Smartronix</b> (Apr 09 - present)
</td>
<tr>
<td colspan="2">
	<p> 
	Led a four person team that supported a 1:45 admin to server ratio, met stringent security requirements, tripled server count with reduced staff, and dealt with a high rate of turnover due to contract requirements.
	Served as a Task Force Leader during three full datacenter outages.
	Provided business case and initial leadership for a cross-function team that eliminated hundreds of long standing security vulnerabilities. The team was formalized in the contract re-write.
	 
	<p> <em>	
	 Red Hat Enterprise Linux 3, 4, 5. 
	 Solaris 10. 
	 HP/UX 11.0-11.31.
	 EMC Powerpath. 
	 HP DL, ML, PA-RISC and Itanium, Dell 2x50, 6x50. 
	Supported Oracle 10 RAC, Apache, Tomcat, Oracle Application Server, and COTS.
</em>
<br> <br> <br> <br> 
</td> 
</tr>

<tr valign="top" align="left">
<td width="40%"><h3>Senior Systems Engineer</h3></td>
</td>
<td>
	<b>Independent Contractor</b> (Sep 08-Apr 09)
</td>
<tr>
<td colspan="2">
	<p> Automated processes, wrote standards, and trained System Admins.
	 	Provided written evaluations of vendor software. 
		Supported OS testing team.
	<p>
<em>	
	 Red Hat Enterprise Linux 3, 4, Solaris 10, Fedora.
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
	<p> Developed interdisciplinary customer feedback loop for the Distributed Systems Engineering team. 
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
	Automated Solaris Jumpstart and Red Hat Kickstart implementation and procedures. 
	Reduced n-tiered 30 minute SLAs to a 3 minute response time with direct hand-off, 24x7x365.25. 
	<p>
	<em>
	Solaris 2.4, 2.5, 6, 7, 8, 9. 
	Red Hat Enterprise Linux 2, 3, 4. 
	Sun Cluster 2.2. 
	Legato backup. 
	Supported: Oracle 7, 8. Vignette Story Server.
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
	<b>Rosenbluth International</b> (May 00 - Dec 00)
</td>
<tr>
<td colspan="2">
	<p>
	Standardized deployment process for application software.
	Investigated VM solutions for datacenter.
	<p>
	<em> Solaris 7, 8, 9. 
	 Red Hat Enterprise Linux 3. 
	 Legato backup. 
	 Supported: Oracle 7, 8. 
	 Veritas Volume Manager/Filesystem 2.x, 3.x. 
	 Sendmail, Apache, Tomcat. 
	</em>
<br> <br> <br> <br> 
</td>
</tr>
<tr valign="top" align="left">
<td><h3>Unix Engineer</h3> </td>
</td>
<td>
	<b>Wall Street Journal/Dow Jones Inc. (TekSystems, Inc.)</b> (Sep 98-May 00)
</td>
<tr>
<td colspan="2">
	<p>
	Saved over $75,000 in new-hire costs by analyzing, communicating, and tracking required production support skills on limited use software.
	 Level 2 support for print Journal.
	 Documented improved server configurations to eliminate unnecessary licenses. 
	<p>
	<em> Solaris 6, 7, 8. 
	 Legato backup. 
	 Veritas Volume Manager/Filesystem 2.x, 3.x. 
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
	 Red Hat Linux 3, 4, 5, 6, 7, 8, 9. 
	 SCO Unix.
	 Sendmail, Apache, Tomcat. 
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
	 Solaris 2.5.
	 Red Hat Linux 3, 4, 5, 6. 
	 Sendmail, Apache, Tomcat. 
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
*/

?>
<?php
/*

$jobs =  (
    array('198204199210' => 
        array ('title' => 'Operations Section Manager',
            'employer' => 'U.S. Air Force',
            'start_mo' => 'Apr',
            'start_yr' => '1982',
            'end_mo' =>   'Sep',
            'end_yr' =>   '1992',
            'results' => 'Lots of stuff.',
            'skills' => 'Lots of other stuff',
            'manager' => 'MSgt Someone',
            'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.',
            'duties' => 'Teach, write, respond.',
            'tech' => '')
            ),

    array('199005199402' => 
        array ('title' => 'Small Business Manager',
            'employer' => 'Entrepreneur',
            'start_mo' => 'May',
            'start_yr' => '1990',
            'end_mo' =>   'Feb',
            'end_yr' =>   '1994',
            'results' => 'Lots of stuff.',
            'skills' => 'Lots of other stuff',
            'manager' => 'Self',
            'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.',
            'duties' => 'Teach, write, respond.',
            'tech' => '')
            ),
    array('198204199210' => 
        array ('title' => 'Operations Section Manager',
            'employer' => 'U.S. Air Force',
            'start_mo' => 'Apr',
            'start_yr' => '1982',
            'end_mo' =>   'Sep',
            'end_yr' =>   '1992',
            'results' => 'Lots of stuff.',
            'skills' => 'Lots of other stuff',
            'manager' => 'MSgt Someone',
            'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.',
            'duties' => 'Teach, write, respond.',
            'tech' => '')
            )

    );
);
*/

$jobs[198204199210] = array(
        'title' => 'Operations Section Manager',
        'employer' => 'U.S. Air Force',
        'start_mo' => 'Apr',
        'start_yr' => '1982',
        'end_mo' =>   'Sep',
        'end_yr' =>   '1992',
        'results' => 'Lots of stuff.',
        'skills' => 'Lots of other stuff',
        'manager' => 'MSgt Someone',
        'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.',
        'duties' => 'Teach, write, respond.',
        'tech' => '');

$jobs[199005199402] = array(
        'title' => 'Small Business Manager',
        'employer' => 'Entrepreneur',
        'start_mo' => 'May',
        'start_yr' => '1990',
        'end_mo' =>   'Feb',
        'end_yr' =>   '1994',
        'results' => 'Lots of stuff.',
        'skills' => 'Lots of other stuff',
        'manager' => 'Self',
        'better' =>  'Training supervisor for Southern Command AF Disaster Response personnel, first-responder to critical incidents.',
        'duties' => 'Teach, write, respond.',
        'tech' => '');

/*
$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');
*/
        
$jobs[201005201208] = array(
        'title' => 'Project Manager',
        'employer' => 'Dept of Defense',
        'contract' => 'Smartronix',
        'start_mo' => 'May',
        'start_yr' => '2010',
        'end_mo' =>   'Aug',
        'end_yr' =>   '2012',
        'skills' => '',
        'manager' => '',
        'better' =>  'Led the five person team that supported Cisco networking devices including IOS upgrades, enterprise reconfiguration, and documentation. Experienced a 50% increase in network devices, removed over one half mile of unused cable and hundreds of defunct network drops, and brought a completely unsupported network infrastructure into enterprise compliance. Worked with Global WAN teams to resolve issues. Enabled enterprise wide network device monitoring. Received higher headquarters compliments on network security posture. ',
        'duties' => 'Wrote, tested, trained, and utilized bare metal switch recovery. Wrote and Implemented VLAN scheme to prepare for massive server growth. Commended by higher headquarters auditing staff on network security posture and documentation. Provided business case and garnered customer support for a scheduled network outage affecting several dozen applications.',
        'tech' => 'Cisco IOS 12.2(x)');
        

$jobs[201304999999] = array(
        'title' => 'Senior Systems Engineer',
        'employer' => 'Dept of Defense',
        'contract' => 'Apex Systems',
        'start_mo' => 'Apr',
        'start_yr' => '2013',
        'end_mo' =>   '9999',
        'end_yr' =>   '9999',
        'results' => '.',
        'skills' => 'Project management, Systems engineering, Network documentation',
        'manager' => '',
        'better' =>  'Wrote security scripts for RHEL 6, wrote Kickstart process, improved existing documentation.',
        'duties' => 'Level 3 support for several hundred servers. On-call pager rotation. Tracked project status and implemented Unix Engineering team tasks.',
        'tech' => 'Red Hat Enterprise Linux (5,6), Shell scripting');


$jobs[201208201302] = array(
        'title' => 'Linux Systems Engineer',
        'employer' => 'Rackspace',
        'start_mo' => 'Aug',
        'start_yr' => '2012',
        'end_mo' =>   'Feb',
        'end_yr' =>   '2013',
        'results' => '',
        'skills' => '',
        'manager' => '',
        'better' =>  'Restarted a stalled but critical deployment roll to 600+ pairs of servers. Commended by support staff for going above and beyond for my role.',
        'duties' => 'Engineering and operational support for over 1200 servers. Worked closely with development teams and business leaders to ensure code drops were deployed successfully while minimizing downtime. Provided documentation for my responsibilities and project plans for larger efforts.',
        'tech' => 'Red Hat Enterprise Linux 5, 6, Chef, Git, MySQL, DRBD');

$jobs[200904201208] = array(
        'title' => 'Team Leam (Linux/Unix',
        'employer' => 'Dept of Defense',
        'contract' => 'Smartronix',
        'start_mo' => 'Apr',
        'start_yr' => '2009',
        'end_mo' =>   'Aug',
        'end_yr' =>   '2012',
        'results' => '',
        'skills' => '',
        'manager' => '',
        'better' =>  'Led a four person team that supported a 1:45 admin to server ratio, met stringent security requirements, tripled server count with reduced staff, and dealt with a high rate of turnover due to contract requirements. Served as a Task Force Leader during three full datacenter outages.',
        'duties' => 'Ensured all servers were on regular backup schedule vice the 80% previous. Wrote data collection (Bourne Shell) and presentation (PHP) scripts. Wrote Policy to ensure all new servers were automatically included. Lead the decommissioning of standard and classified systems. Instigated the enterprise DNS project. Trained staff on host configurations. Provided on-call, off-hours support. Patched RHEL, Solaris, and HP/UX servers. Documented LVM, ASM, and Multi-pathing procedures for server configurations. Provided business case and initial leadership for a cross-function team that eliminated hundreds of long standing security vulnerabilities.',
        'tech' => 'Red Hat Enterprise Linux 3, 4, 5 , Solaris 10, HP/UX 11.0-11.31, EMC Powerpath, HP DL, ML, PA-RISC and Itanium, Dell 2x50, 6x50. Supported Oracle 10 RAC, Apache, Tomcat, Oracle Application Server, and COTS');

$jobs[200809999999] = array(
        'title' => 'Senior Systems Engineer',
        'employer' => 'Self',
        'start_mo' => '2008',
        'start_yr' => 'Sep',
        'end_mo' =>   '99',
        'end_yr' =>   '9999',
        'results' => '',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => 'Supported OS testing teams and client projects. Patched servers as needed. Automated processes, wrote standards, and trained System Admins. Provided written evaluations of vendor software. Performed Security tool testing.',
        'tech' => 'Red Hat Enterprise Linux 3, 4, 5, 6, Solaris 10, Fedora');

$jobs[200512200808] = array(
        'title' => 'Senior Systems Engineer',
        'employer' => 'Wachovia Bank',
        'start_mo' => 'Dec',
        'start_yr' => '2005',
        'end_mo' =>   'Aug',
        'end_yr' =>   '2008',
        'results' => '',
        'skills' => '',
        'manager' => '',
        'better' =>  'Developed interdisciplinary customer feedback loop for the Distributed Systems Engineering team. Automated processes, wrote standards, and trained incoming engineers.',
        'duties' => 'Provided on-call centralized security application support for 3,000+ servers. Provided written evaluations of vendor software.',
        'tech' => 'Red Hat Enterprise Linux 2, 3, 4, 5. Solaris 8, 9, 10. HP/UX 11.0-11.31. SuSE Linux Enterprise Server (SLES) 8, 9, 10. HP DL, ML, and PA-RISC, Dell 2x50, 6x50.');

$jobs[200505200512] = array(
        'title' => 'Systems Engineer',
        'employer' => 'Bank of America',
        'contract' => 'Apex Systems',
        'start_mo' => 'May',
        'start_yr' => '2005',
        'end_mo' =>   'Dec',
        'end_yr' =>   '2005',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  'Automated processes, wrote standards, and trained incoming engineers. ',
        'duties' => 'Build, configure, and trouble-shoot large scale datacenter.     Patched servers, replaced failed hardware, and maintainted systems in production state.',
        'tech' => 'Red Hat Enterprise Linux 2, 3, 4. Solaris 8, 9, 10. HP/UX 11.0-11.31. EMC Powerpath. IBM Blade Chassis. Fujitsu Primepower, Sun mid-range, and IBM Power servers. HP DL, ML, Dell 2x50, 6x50');

$jobs[200409200505] = array(
        'title' => 'Senior Unix Engineer',
        'employer' => 'Transamerica Reinsurance',
        'start_mo' => 'Sep',
        'start_yr' => '2004',
        'end_mo' =>   'May',
        'end_yr' =>   '2005',
        'results' => '',
        'skills' => '',
        'manager' => '',
        'better' =>  'Commended by parent company for automation of Solaris Jumpstart and Red Hat Kickstart implementation and procedures.',
        'duties' => 'Configured Apache and Tomcat to support application development team\'s needs.',
        'tech' => 'Solaris 2.5, 6, 7, 8, 9. Red Hat Enterprise Linux 2, 3, 4. Supported: Oracle 7, 8. Veritas Volume Manager/Filesystem 2.x, 3.x. Sendmail, Apache, Tomcat.');

/*
$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');

$jobs[] = array(
        'title' => '',
        'employer' => '',
        'start_mo' => '',
        'start_yr' => '',
        'end_mo' =>   '',
        'end_yr' =>   '',
        'results' => '.',
        'skills' => '',
        'manager' => '',
        'better' =>  '',
        'duties' => '',
        'tech' => '');
*/

?>

