<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6487353b094c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Module\ThirdPartyAuth\Interfaces\CommonInterface; use Pmpr\Module\ThirdPartyAuth\Provider\Common; use Pmpr\Module\ThirdPartyAuth\Provider\Google\Google; use Pmpr\Module\ThirdPartyAuth\Provider\Yahoo\Yahoo; abstract class Container extends BaseClass implements CommonInterface { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function kkcowsyecqiosuko(?string $iwigiqwyskocowwo = '') : ?Common { $owgumcsyqsamiemg = null; switch ($iwigiqwyskocowwo) { case self::oowokkckywyoauyu: $owgumcsyqsamiemg = Yahoo::symcgieuakksimmu(); goto qgoiooayqmqqsiok; case self::umookyimwkqqkieq: $owgumcsyqsamiemg = Google::symcgieuakksimmu(); goto qgoiooayqmqqsiok; } qwigomakwmyiwkgo: qgoiooayqmqqsiok: return $owgumcsyqsamiemg; } public function uaoeyuweaaggiosw() : array { $iqsymysgkgosmiys = []; $ukiskwsmqscwauuu = [self::umookyimwkqqkieq, self::oowokkckywyoauyu]; foreach ($ukiskwsmqscwauuu as $iwigiqwyskocowwo) { if (!$this->weysguygiseoukqw($iwigiqwyskocowwo . self::yyicwqsqaecyqwco)) { goto csscmcacoikwsecs; } $iqsymysgkgosmiys[$iwigiqwyskocowwo] = $this->kkcowsyecqiosuko($iwigiqwyskocowwo); csscmcacoikwsecs: asmecuqiyyswueqe: } myoicgcuugciueis: return $iqsymysgkgosmiys; } }
