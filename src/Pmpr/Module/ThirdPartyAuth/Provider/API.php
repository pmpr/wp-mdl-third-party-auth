<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd8cbf327             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth\Provider; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ThirdPartyAuth\Container; use Pmpr\Module\ThirdPartyAuth\Traits\CommonTrait; abstract class API extends Container { use CommonTrait; protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function __construct(string $ymqmyyeuycgmigyo) { $this->name = $ymqmyyeuycgmigyo; parent::__construct(); } public function sucoiekkymqeaqym(string $qcwimcwkqeaoqomg = '') : array { $mgegoogckgsumooq = $this->aqucycseakikmoku(); $ywmkwiwkosakssii = ["\x68\145\x61\x64\x65\162\x73" => "\101\165\x74\150\x6f\x72\x69\172\x61\x74\151\157\x6e\72\102\145\141\162\x65\162\40{$mgegoogckgsumooq}", "\x74\151\x6d\x65\x6f\x75\x74" => 120, "\x72\145\x64\x69\x72\x65\143\164\x69\157\156" => 5, "\150\x74\164\x70\x76\145\x72\163\x69\157\x6e" => "\x31\56\x31"]; if (Constants::umookyimwkqqkieq === $this->aakmagwggmkoiiyu()) { $qcwimcwkqeaoqomg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::iwyoukakoookgaee => $mgegoogckgsumooq], $qcwimcwkqeaoqomg); } $aqykuigiuwmmcieu = []; $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ooeyomkwieykuywo($qcwimcwkqeaoqomg, $ywmkwiwkosakssii); if (!is_wp_error($sogksuscggsicmac)) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($sogksuscggsicmac[Constants::cikssaguawsukusm]); } return $aqykuigiuwmmcieu; } public function sceoyeqwwuygocyo(string $eeamcawaiqocomwy = '', array $eyagkkkqkwcuygso = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->giyscymwkesykqsg(Constants::wssmqksaywiuskki, $this->aakmagwggmkoiiyu()); if ($eyagkkkqkwcuygso) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($eyagkkkqkwcuygso, $eeamcawaiqocomwy); } header("\114\157\143\x61\x74\151\157\x6e\72\40{$eeamcawaiqocomwy}"); exit; } public function aqucycseakikmoku(string $eeamcawaiqocomwy = '', array $icwicymcioeyeyek = []) { $mgegoogckgsumooq = ''; $uykgysuswksgmwqy = ''; if ($this->aakmagwggmkoiiyu() === "\147\157\x6f\x67\x6c\145") { $uykgysuswksgmwqy = ["\103\157\x6e\164\x65\156\164\55\x54\171\x70\145" => "\141\x70\x70\154\x69\x63\141\x74\x69\157\156\x2f\x78\x2d\167\x77\x77\x2d\146\157\x72\x6d\x2d\165\x72\154\x65\156\x63\157\144\x65\144"]; } $keccaugmemegoimu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uiuekemsiysicysc($eeamcawaiqocomwy, ["\x62\157\x64\x79" => $icwicymcioeyeyek, "\164\x69\155\145\x6f\165\164" => "\x35", "\162\x65\x64\151\162\x65\x63\x74\151\157\156" => "\x35", "\x68\x74\x74\160\x76\x65\x72\163\x69\x6f\x6e" => "\61\56\x30", "\142\154\157\143\x6b\x69\x6e\147" => true, "\x68\x65\141\x64\x65\x72\x73" => $uykgysuswksgmwqy]); if (!is_wp_error($keccaugmemegoimu)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu[Constants::cikssaguawsukusm]); $mgegoogckgsumooq = $sogksuscggsicmac[Constants::iwyoukakoookgaee] ?? ''; } return $mgegoogckgsumooq; } public function oocqgiwqacmwqqcq() : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::vswoiouoaykswgym)); } public function ouaqkceckmasgsag() : array { return $this->oiakksseswcuggsi($this->sucoiekkymqeaqym()); } abstract function oiakksseswcuggsi(array $icwicymcioeyeyek = []) : array; }
