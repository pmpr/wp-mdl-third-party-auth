<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a1f38b8bd2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Module\ThirdPartyAuth\Interfaces\CommonInterface; use Pmpr\Module\ThirdPartyAuth\Provider\Common; use Pmpr\Module\ThirdPartyAuth\Provider\Google\Google; use Pmpr\Module\ThirdPartyAuth\Provider\Yahoo\Yahoo; abstract class Container extends BaseClass implements CommonInterface { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function kkcowsyecqiosuko(?string $iwigiqwyskocowwo = '') : ?Common { $owgumcsyqsamiemg = null; switch ($iwigiqwyskocowwo) { case self::oowokkckywyoauyu: $owgumcsyqsamiemg = Yahoo::symcgieuakksimmu(); goto cuykwgmswkskqkyi; case self::umookyimwkqqkieq: $owgumcsyqsamiemg = Google::symcgieuakksimmu(); goto cuykwgmswkskqkyi; } kuicqywysciceggs: cuykwgmswkskqkyi: return $owgumcsyqsamiemg; } public function uaoeyuweaaggiosw() : array { $iqsymysgkgosmiys = []; $ukiskwsmqscwauuu = [self::umookyimwkqqkieq, self::oowokkckywyoauyu]; foreach ($ukiskwsmqscwauuu as $iwigiqwyskocowwo) { if (!$this->weysguygiseoukqw($iwigiqwyskocowwo . self::yyicwqsqaecyqwco)) { goto eqkauqciwewmgeoi; } $iqsymysgkgosmiys[$iwigiqwyskocowwo] = $this->kkcowsyecqiosuko($iwigiqwyskocowwo); eqkauqciwewmgeoi: sciwggaeogcoesiu: } mkwskuycuyguqqok: return $iqsymysgkgosmiys; } }
