<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648883104c456             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth\Provider; use Pmpr\Module\ThirdPartyAuth\Container; use Pmpr\Module\ThirdPartyAuth\Traits\CommonTrait; abstract class API extends Container { use CommonTrait; protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function __construct(string $ymqmyyeuycgmigyo) { $this->name = $ymqmyyeuycgmigyo; parent::__construct(); } public function sucoiekkymqeaqym(string $qcwimcwkqeaoqomg = '') : array { $mgegoogckgsumooq = $this->aqucycseakikmoku(); $ywmkwiwkosakssii = ["\x68\145\141\x64\x65\x72\x73" => "\x41\x75\164\150\x6f\162\x69\x7a\x61\164\x69\157\x6e\72\x42\x65\x61\162\x65\162\x20{$mgegoogckgsumooq}", "\x74\x69\x6d\145\157\x75\164" => 120, "\162\x65\x64\151\x72\145\143\x74\151\x6f\x6e" => 5, "\x68\164\x74\160\x76\145\x72\163\151\157\x6e" => "\61\x2e\x31"]; if (!(self::umookyimwkqqkieq === $this->aakmagwggmkoiiyu())) { goto gimmuoqwckiseaik; } $qcwimcwkqeaoqomg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::iwyoukakoookgaee => $mgegoogckgsumooq], $qcwimcwkqeaoqomg); gimmuoqwckiseaik: $aqykuigiuwmmcieu = []; $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ooeyomkwieykuywo($qcwimcwkqeaoqomg, $ywmkwiwkosakssii); if (is_wp_error($sogksuscggsicmac)) { goto cmqucgoewuyieoyk; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($sogksuscggsicmac[self::cikssaguawsukusm]); cmqucgoewuyieoyk: return $aqykuigiuwmmcieu; } public function sceoyeqwwuygocyo(string $eeamcawaiqocomwy = '', array $eyagkkkqkwcuygso = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->giyscymwkesykqsg(self::wssmqksaywiuskki, $this->aakmagwggmkoiiyu()); if (!$eyagkkkqkwcuygso) { goto yqykqysmiquwoasu; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($eyagkkkqkwcuygso, $eeamcawaiqocomwy); yqykqysmiquwoasu: header("\114\157\x63\x61\x74\x69\x6f\156\x3a\40{$eeamcawaiqocomwy}"); exit; } public function aqucycseakikmoku(string $eeamcawaiqocomwy = '', array $icwicymcioeyeyek = []) { $mgegoogckgsumooq = ''; $uykgysuswksgmwqy = ''; if (!($this->aakmagwggmkoiiyu() == "\147\x6f\x6f\147\x6c\x65")) { goto ayyweymyuuiauamo; } $uykgysuswksgmwqy = ["\x43\157\156\x74\x65\x6e\164\55\x54\171\160\145" => "\141\x70\160\154\x69\143\141\x74\x69\157\x6e\x2f\170\55\167\167\167\x2d\146\x6f\162\x6d\55\165\x72\x6c\145\156\143\x6f\x64\x65\144"]; ayyweymyuuiauamo: $keccaugmemegoimu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uiuekemsiysicysc($eeamcawaiqocomwy, ["\142\x6f\x64\x79" => $icwicymcioeyeyek, "\x74\151\155\x65\157\165\x74" => "\65", "\x72\145\144\x69\162\x65\x63\x74\151\157\156" => "\65", "\150\164\x74\x70\166\145\162\x73\151\157\156" => "\x31\x2e\x30", "\142\x6c\x6f\x63\x6b\151\x6e\147" => true, "\150\x65\x61\144\145\162\163" => $uykgysuswksgmwqy]); if (is_wp_error($keccaugmemegoimu)) { goto mosqsmqimqgqoase; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu[self::cikssaguawsukusm]); $mgegoogckgsumooq = $sogksuscggsicmac[self::iwyoukakoookgaee] ?? ''; mosqsmqimqgqoase: return $mgegoogckgsumooq; } public function oocqgiwqacmwqqcq() : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::vswoiouoaykswgym)); } public function ouaqkceckmasgsag() : array { return $this->oiakksseswcuggsi($this->sucoiekkymqeaqym()); } abstract function oiakksseswcuggsi(array $icwicymcioeyeyek = []) : array; }
