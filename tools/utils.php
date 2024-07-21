<?php
// Personal Info
function get_personal_info($fieldName)
{
	$userInfo = [
		'name' => 'Michał Łukaszewicz',
		'phone' => '73154095',
		'email' => 'michal.lukaszewicz.dev@gmail.com',
		'birthDate' => '04/03/1989',
		'linkedinLink' => 'https://www.linkedin.com/in/micha%C5%82-%C5%82ukaszewicz-970634160/',
		'githubLink' => 'https://github.com/miszkaa11?tab=repositories'
	];

	if ($fieldName === null) {
		return $userInfo;
	} else {
		if (array_key_exists($fieldName, $userInfo)) {
			return $userInfo[$fieldName];
		} else {
			return "Field doesn't exist";
		}
	}
}

// Generate Section Link
function generate_section_link($sectionId)
{
	$baseLink = get_home_url();
	$scrollLink = $baseLink . "#" . urlencode($sectionId);
	return $scrollLink;
}