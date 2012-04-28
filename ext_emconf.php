<?php

########################################################################
# Extension Manager/Repository config file for ext "jqct".
#
# Auto generated 28-04-2012 09:11
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'jQuery Content Tools',
	'description' => 'jQuery Content Tools (e.g. Tabs and Accordion) based on jQuery UI.',
	'category' => 'plugin',
	'author' => 'Andy Hausmann',
	'author_email' => 'hi@andy-hausmann.de',
	'author_company' => '',
	'clearcacheonload' => 1,
	'state' => 'stable',
	'version' => '1.2.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'suggests' => array(
			't3jquery' => '',
		),
		'conflicts' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:38:{s:9:"README.md";s:4:"0833";s:12:"ext_icon.gif";s:4:"5f00";s:17:"ext_localconf.php";s:4:"d14d";s:14:"ext_tables.php";s:4:"5f77";s:12:"t3jquery.txt";s:4:"6ede";s:41:"Classes/Controller/AbstractController.php";s:4:"58c9";s:45:"Classes/Controller/ContentToolsController.php";s:4:"86d8";s:34:"Classes/Domain/Model/Accordion.php";s:4:"fdf7";s:48:"Classes/Domain/Model/SimpleElementConstraint.php";s:4:"3516";s:29:"Classes/Domain/Model/Tabs.php";s:4:"384a";s:41:"Classes/Domain/Model/Resource/Content.php";s:4:"eb59";s:30:"Classes/Hook/ItemsProcFunc.php";s:4:"55ec";s:25:"Classes/Utility/Debug.php";s:4:"03db";s:23:"Classes/Utility/Div.php";s:4:"49f1";s:32:"Classes/Utility/PageRenderer.php";s:4:"a430";s:42:"Classes/ViewHelpers/AddCssJsViewHelper.php";s:4:"f51b";s:43:"Classes/ViewHelpers/AddJQueryViewHelper.php";s:4:"74ef";s:36:"Configuration/FlexForms/flexform.xml";s:4:"d791";s:38:"Configuration/TypoScript/constants.txt";s:4:"7b71";s:34:"Configuration/TypoScript/setup.txt";s:4:"26c1";s:40:"Resources/Private/Language/locallang.xml";s:4:"3896";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"2b32";s:53:"Resources/Private/Language/locallang_csh_flexform.xml";s:4:"85e0";s:44:"Resources/Private/Php/class.jqct_wizicon.php";s:4:"6a10";s:55:"Resources/Private/Templates/ContentTools/accordion.html";s:4:"92f4";s:51:"Resources/Private/Templates/ContentTools/debug.html";s:4:"950f";s:51:"Resources/Private/Templates/ContentTools/index.html";s:4:"0eec";s:50:"Resources/Private/Templates/ContentTools/tabs.html";s:4:"88b6";s:31:"Resources/Public/Css/common.css";s:4:"b0e6";s:37:"Resources/Public/Icons/pi1_ce_wiz.gif";s:4:"1d81";s:36:"Resources/Public/Js/jquery-ui.min.js";s:4:"bb29";s:33:"Resources/Public/Js/jquery.min.js";s:4:"b8d6";s:22:"Tests/BaseTestCase.php";s:4:"3e47";s:52:"Tests/Unit/Controller/ContentToolsControllerTest.php";s:4:"e45d";s:41:"Tests/Unit/Domain/Model/AccordionTest.php";s:4:"bc22";s:39:"Tests/Unit/Domain/Model/ContentTest.php";s:4:"58fc";s:36:"Tests/Unit/Domain/Model/TabsTest.php";s:4:"c151";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>