<?php

require_once(t3lib_extMgm::extPath('flvplayer2').'pi1/class.tx_flvplayer2_pi1.php');

class tx_flvplayer2ttnews_news {


	// hook for tt_news
	function extraItemMarkerProcessor($markerArray, $row, $lConf, &$pObj) {
		//$this->cObj = t3lib_div::makeInstance('tslib_cObj'); // local cObj.	
		//$this->pObj = &$pObj;
		if(!empty($lConf['flvplayer2ttnews.'])){
			$flvplayerConf = $lConf['flvplayer2ttnews.'];
		} else {
			$flvplayerConf = null;
		}
		
		
		$markerArray['###NEWS_VIDEOS###'] = '';
		
		if($row['tx_flvplayer2ttnews_video']){
			$flvPlayer = t3lib_div::makeInstance('tx_flvplayer2_pi1');
			$content = $flvPlayer->getVideoCode($row['tx_flvplayer2ttnews_video'], $flvplayerConf);
			if($content){
				$markerArray['###NEWS_VIDEOS###'] = $pObj->cObj->stdWrap($content, $lConf['videoWrapIfAny.']);
			}
		}
		
		return $markerArray;
	}
	
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rgmediaimagesttnews/class.tx_rgmediaimages_news.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rgmediaimagesttnews/class.tx_rgmediaimages_news.php']);
}

?>
