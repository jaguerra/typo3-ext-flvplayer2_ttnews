<?php
if (!defined ('TYPO3_MODE'))     die ('Access denied.');


// hook for tt_news
if (TYPO3_MODE == 'FE')    {
    require_once(t3lib_extMgm::extPath($_EXTKEY).'class.tx_flvplayer2ttnews_news.php');
}
$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'][]   = 'tx_flvplayer2ttnews_news';


?>
