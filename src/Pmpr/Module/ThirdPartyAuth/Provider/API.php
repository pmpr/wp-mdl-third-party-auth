<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648725222df82             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth\Provider; use Pmpr\Module\ThirdPartyAuth\Container; use Pmpr\Module\ThirdPartyAuth\Traits\CommonTrait; abstract class API extends Container { use CommonTrait; protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function __construct(string $ymqmyyeuycgmigyo) { $this->name = $ymqmyyeuycgmigyo; parent::__construct(); } public function sucoiekkymqeaqym(string $qcwimcwkqeaoqomg = '') : array { $mgegoogckgsumooq = $this->aqucycseakikmoku(); $ywmkwiwkosakssii = ["\150\145\141\144\145\162\x73" => "\x41\x75\164\150\x6f\x72\x69\x7a\x61\164\x69\x6f\x6e\72\102\x65\141\162\145\x72\x20{$mgegoogckgsumooq}", "\164\151\x6d\x65\x6f\165\164" => 120, "\162\x65\x64\151\162\x65\143\164\151\x6f\156" => 5, "\150\164\x74\x70\x76\145\162\163\151\x6f\156" => "\61\x2e\x31"]; $aqykuigiuwmmcieu = []; $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ooeyomkwieykuywo($qcwimcwkqeaoqomg, $ywmkwiwkosakssii); if (is_wp_error($sogksuscggsicmac)) { goto yssscwioiyygssec; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($sogksuscggsicmac[self::cikssaguawsukusm]); yssscwioiyygssec: return $aqykuigiuwmmcieu; } public function sceoyeqwwuygocyo(string $eeamcawaiqocomwy = '', array $eyagkkkqkwcuygso = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->giyscymwkesykqsg(self::wssmqksaywiuskki, $this->aakmagwggmkoiiyu()); if (!$eyagkkkqkwcuygso) { goto ieumumsgyguceusy; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($eyagkkkqkwcuygso, $eeamcawaiqocomwy); ieumumsgyguceusy: header("\x4c\x6f\x63\141\164\x69\x6f\x6e\72\x20{$eeamcawaiqocomwy}"); exit; } public function aqucycseakikmoku(string $eeamcawaiqocomwy = '', array $icwicymcioeyeyek = []) { $mgegoogckgsumooq = ''; $uykgysuswksgmwqy = ''; if (!($this->aakmagwggmkoiiyu() == "\x67\x6f\x6f\x67\x6c\145")) { goto coywmiyqgsweuiic; } $uykgysuswksgmwqy = ["\x43\157\156\164\x65\x6e\164\x2d\124\x79\160\145" => "\141\x70\160\x6c\151\x63\141\164\x69\157\x6e\x2f\170\55\167\x77\167\x2d\146\x6f\162\x6d\x2d\x75\x72\x6c\x65\156\143\157\144\x65\144"]; coywmiyqgsweuiic: $keccaugmemegoimu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uiuekemsiysicysc($eeamcawaiqocomwy, ["\x62\157\x64\x79" => $icwicymcioeyeyek, "\x74\x69\155\145\157\165\164" => "\x35", "\162\145\144\151\x72\145\143\x74\151\x6f\x6e" => "\x35", "\150\164\164\x70\166\x65\162\163\151\x6f\x6e" => "\x31\x2e\x30", "\x62\154\157\143\x6b\151\156\147" => true, "\x68\145\x61\144\145\162\x73" => $uykgysuswksgmwqy]); if (is_wp_error($keccaugmemegoimu)) { goto siqagquguiemuoku; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu[self::cikssaguawsukusm]); $mgegoogckgsumooq = $sogksuscggsicmac[self::iwyoukakoookgaee] ?? ''; siqagquguiemuoku: return $mgegoogckgsumooq; } public function oocqgiwqacmwqqcq() : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::vswoiouoaykswgym)); } public function ouaqkceckmasgsag() : array { return $this->oiakksseswcuggsi($this->sucoiekkymqeaqym()); } abstract function oiakksseswcuggsi(array $icwicymcioeyeyek = []) : array; }
