<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_flvplayer2ttnews_video' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:flvplayer2_ttnews/locallang_db.xml:tt_news.tx_flvplayer2ttnews_video',		
		'config' => array (
			'type'     => 'input',
			'size'     => '15',
			'max'      => '255',
			'checkbox' => '',
			'eval'     => 'trim',
			'wizards'  => array(
				'_PADDING' => 2,
				'link'     => array(
					'type'         => 'popup',
					'title'        => 'Link',
					'icon'         => 'link_popup.gif',
					'script'       => 'browse_links.php?mode=wizard',
					'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
				)
			)
		)
	),
);


t3lib_div::loadTCA('tt_news');
t3lib_extMgm::addTCAcolumns('tt_news',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_news','tx_flvplayer2ttnews_video;;;;1-1-1');
?>