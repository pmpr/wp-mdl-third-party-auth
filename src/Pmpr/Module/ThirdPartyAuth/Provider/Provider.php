<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8ae4eb0a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth\Provider; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ThirdPartyAuth\Container; use Pmpr\Module\ThirdPartyAuth\Model\UserLink; use Pmpr\Module\ThirdPartyAuth\Provider\Google\Google; use Pmpr\Module\ThirdPartyAuth\Provider\Yahoo\Yahoo; use Pmpr\Module\ThirdPartyAuth\Setting; use Pmpr\Module\ThirdPartyAuth\ThirdPartyAuth; class Provider extends Container { const cuwqkowuwgeysoqm = "\x6f\x70\x65\156\151\x64\143\x62"; const asiscgcuqkseseew = "\157\141\165\164\150\x2d\162\145\x64\151\x72\x65\x63\x74"; const soewseycogaoaqsq = ThirdPartyAuth::qawymeiwsaqmeakc . "\x75\x73\145\162\137\141\x76\x61\x74\141\x72"; const gcouqeuuoimiuqoc = ThirdPartyAuth::qawymeiwsaqmeakc . "\157\x61\165\164\x68\x5f\x6e\x6f\156\x63\145"; const wqcswcwygsiiauqw = self::gcouqeuuoimiuqoc . "\x5f\x61\143\164\151\x6f\x6e"; public function mameiwsayuyquoeq() { Yahoo::symcgieuakksimmu(); Google::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x6b\x6b\x73\151\x71\x6f\171\x71\155\x79\x71\171\163\x61\x73\147"]); } public function kksiqoyqmyqysasg() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (self::asiscgcuqkseseew === $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ugqacsomqcgmoqug)) { goto iomcaiwewsawiamu; } if (!(false !== strpos($eiicaiwgqkgsekce->ekcymmyqoceukosc(true), self::cuwqkowuwgeysoqm))) { goto kiqogmwcgcamwiig; } $this->qqakgmgemawgiekg(); kiqogmwcgcamwiig: goto sqiciiuwmykocycc; iomcaiwewsawiamu: if (!($gwgqcsmomamyqsmy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::gcouqeuuoimiuqoc))) { goto yowsmsiyimmimemc; } if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::wqcswcwygsiiauqw)) { goto eqkauqciwewmgeoi; } $this->ccyekgauugygmyqi(); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $this->yoomisysqggqecco(); kwagwqyusyiyoaqs: yowsmsiyimmimemc: sqiciiuwmykocycc: } public function yoomisysqggqecco() { if (!($iwigiqwyskocowwo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::wssmqksaywiuskki, ''))) { goto uukumskkeggaowck; } if (!($iwigiqwyskocowwo = $this->kkcowsyecqiosuko($iwigiqwyskocowwo))) { goto eequksumcoogyoem; } $iwigiqwyskocowwo->auamgqiwisysomsa()->sceoyeqwwuygocyo(); eequksumcoogyoem: uukumskkeggaowck: } public function qqakgmgemawgiekg() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto eyiamcekkgkiawqy; } $this->cekycuiyagyouawk(); goto twkmiuomimomscew; eyiamcekkgkiawqy: $iwigiqwyskocowwo = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::wssmqksaywiuskki, ''); if ($iwigiqwyskocowwo) { goto meawswgwagoqgkye; } if (false !== strpos($eiicaiwgqkgsekce->ekcymmyqoceukosc(true), Constants::umookyimwkqqkieq)) { goto ocokwuuquaokmasc; } if (!(false !== strpos($eiicaiwgqkgsekce->ekcymmyqoceukosc(true), Constants::oowokkckywyoauyu))) { goto cggowoquuiwqkyew; } $iwigiqwyskocowwo = Constants::oowokkckywyoauyu; cggowoquuiwqkyew: goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $iwigiqwyskocowwo = Constants::umookyimwkqqkieq; yiwiqaqmwiogawym: if (!$iwigiqwyskocowwo) { goto goacqqsgaaigyuaw; } $eiicaiwgqkgsekce->giyscymwkesykqsg(Constants::wssmqksaywiuskki, $iwigiqwyskocowwo); goacqqsgaaigyuaw: meawswgwagoqgkye: if (!($iwigiqwyskocowwo = $this->kkcowsyecqiosuko($iwigiqwyskocowwo))) { goto mqccmesakuemceqi; } $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $fwigoyyqcikqyoyq = $this->uwkmaywceaaaigwo()->gksccikkaamikckm(); $icwicymcioeyeyek = $iwigiqwyskocowwo->auamgqiwisysomsa()->ouaqkceckmasgsag(); $owqaeesoaygymmcy = $icwicymcioeyeyek[Constants::IDENTIFIER] ?? ''; $icseseayyekeggss = $icwicymcioeyeyek[Constants::kagqiwogmiguosiw] ?? ''; $aggoegioamuiugue = $icwicymcioeyeyek[Constants::scagkwwiiquocimc] ?? ''; $yewiaiaauukwsgku = $icwicymcioeyeyek[Constants::csiaccacwgeeqwwo] ?? ''; $mowgokyeuymuwiew = $icwicymcioeyeyek[Constants::ceaooaoacwwcuoqm] ?? ''; $owaiikyuwwwmswgc = $icwicymcioeyeyek[Constants::muqaqimusmckkieq] ?? ''; if ($icseseayyekeggss && $aggoegioamuiugue) { goto kecwuwwcwokuksyq; } if ($icseseayyekeggss) { goto mswsoaimesegiiic; } $cmausswkomegeeyc = $yewiaiaauukwsgku; $icseseayyekeggss = ''; $aggoegioamuiugue = ''; goto egasokooagakisiy; mswsoaimesegiiic: $cmausswkomegeeyc = $icseseayyekeggss; egasokooagakisiy: goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: if (strcmp($icseseayyekeggss, $icseseayyekeggss) != 0) { goto wcesymwqykqoyuqk; } $cmausswkomegeeyc = $icseseayyekeggss; goto usqgaogkqgemuima; wcesymwqykqoyuqk: $cmausswkomegeeyc = $icseseayyekeggss . "\40" . $icseseayyekeggss; usqgaogkqgemuima: qgegkeomwscwwiuw: $ksokicwayyessema = UserLink::symcgieuakksimmu(); $yewiaiaauukwsgku = $this->amcquiasoqygoyuc($yewiaiaauukwsgku, $owaiikyuwwwmswgc); $iwywmkygwewiamwm = $ksokicwayyessema->oqomcmyuuakigusk([Constants::wssmqksaywiuskki => $iwigiqwyskocowwo->aakmagwggmkoiiyu(), Constants::IDENTIFIER => $owqaeesoaygymmcy]); $owamqkkkgeiegeky = $ksokicwayyessema->qogaqkcsogcqiaic($iwywmkygwewiamwm, Constants::yauicucwkgqyygas); $guwkocgoesowqewc = $fwigoyyqcikqyoyq->email($owaiikyuwwwmswgc); $iwywmkygwewiamwm = $ksokicwayyessema->akkkoiiymmamsauc($guwkocgoesowqewc, Constants::muqaqimusmckkieq); $ecokeqiiuemogmws = $ksokicwayyessema->qogaqkcsogcqiaic($iwywmkygwewiamwm, Constants::yauicucwkgqyygas); if (!$guwkocgoesowqewc) { goto qmiwsequckckoaei; } $qoomisocceakywae = $yoiguusocukqeayg->iooowgsqoyqseyuu($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->woimamkkeyoyauoa(Constants::akoagooquksouwka, $guwkocgoesowqewc)); goto goeoymmqqqeeoime; qmiwsequckckoaei: $qoomisocceakywae = null; goeoymmqqqeeoime: $muoaiiwqsosqsusg = [Constants::ceaooaoacwwcuoqm => $mowgokyeuymuwiew, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo->aakmagwggmkoiiyu(), Constants::csiaccacwgeeqwwo => $yewiaiaauukwsgku, Constants::scagkwwiiquocimc => $aggoegioamuiugue, Constants::IDENTIFIER => $owqaeesoaygymmcy, Constants::kagqiwogmiguosiw => $icseseayyekeggss, Constants::akoagooquksouwka => $guwkocgoesowqewc, Constants::asoymqaegkygmwue => $cmausswkomegeeyc]; $this->msmccaygwqcuymys($muoaiiwqsosqsusg); if ($ecokeqiiuemogmws || $owamqkkkgeiegeky || $qoomisocceakywae) { goto sukskmcwsoysiuqu; } $this->gesyeyeaqmiskuoo($muoaiiwqsosqsusg); goto igymseewwyiocoug; sukskmcwsoysiuqu: if (!(!$ecokeqiiuemogmws && $owamqkkkgeiegeky)) { goto eiawsoasmscmqswa; } $ecokeqiiuemogmws = $owamqkkkgeiegeky; $this->ikugycsiyegwoiay($iwigiqwyskocowwo->aakmagwggmkoiiyu(), $guwkocgoesowqewc, $ecokeqiiuemogmws, $owqaeesoaygymmcy); eiawsoasmscmqswa: if ($ecokeqiiuemogmws) { goto ygkcacsyyckescqs; } if ($owamqkkkgeiegeky) { goto ickcmqoiosquugwe; } $ycoeoaakqyskgykq = $qoomisocceakywae; goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $ycoeoaakqyskgykq = $owamqkkkgeiegeky; qmeoaqmsuseueqiy: goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $ycoeoaakqyskgykq = $ecokeqiiuemogmws; cuoqqgaygogsmmic: if (!$ycoeoaakqyskgykq) { goto cgewcsueoyaeikgm; } $mkucggyaiaukqoce = $yoiguusocukqeayg->get($ycoeoaakqyskgykq, true); $this->eseewgmcyqeagegu($mkucggyaiaukqoce); cgewcsueoyaeikgm: igymseewwyiocoug: mqccmesakuemceqi: twkmiuomimomscew: } public function msmccaygwqcuymys($qqswgiawgeaeoecu) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->giyscymwkesykqsg(Constants::ykwyyecqesymwoqw, "\61"); foreach ($qqswgiawgeaeoecu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $eiicaiwgqkgsekce->giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie); qwcegcuowwgiccos: } kooskuwkuayiuose: } public function amcquiasoqygoyuc(string $yewiaiaauukwsgku, string $owaiikyuwwwmswgc = '') : string { $yewiaiaauukwsgku = str_replace("\40", "\x2d", $yewiaiaauukwsgku); $yewiaiaauukwsgku = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->mkucggyaiaukqoce($yewiaiaauukwsgku, true); if (!($yewiaiaauukwsgku == "\55" || $yewiaiaauukwsgku == '')) { goto qcessicwuikwqsis; } $yewiaiaauukwsgku = explode("\x40", $owaiikyuwwwmswgc)[0]; qcessicwuikwqsis: return $yewiaiaauukwsgku; } public function gesyeyeaqmiskuoo(array $iugicmqwsceaiysa = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $mowgokyeuymuwiew = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::ceaooaoacwwcuoqm); $iwigiqwyskocowwo = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::wssmqksaywiuskki); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::csiaccacwgeeqwwo); $aggoegioamuiugue = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::scagkwwiiquocimc); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::akoagooquksouwka); $icseseayyekeggss = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::kagqiwogmiguosiw); $owqaeesoaygymmcy = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::IDENTIFIER); $cmausswkomegeeyc = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::asoymqaegkygmwue); $guwkocgoesowqewc = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->email($owaiikyuwwwmswgc); if (!$yewiaiaauukwsgku && $owaiikyuwwwmswgc) { goto siqagquguiemuoku; } if (!$owaiikyuwwwmswgc && $yewiaiaauukwsgku) { goto ieumumsgyguceusy; } if (!(!$owaiikyuwwwmswgc && !$yewiaiaauukwsgku)) { goto yssscwioiyygssec; } wp_die(__("\116\157\x20\160\x72\x6f\x66\x69\154\x65\40\x64\141\x74\x61\40\x69\x73\x20\x72\145\164\165\162\156\x65\144\x20\146\x72\157\x6d\40\x61\160\160\x6c\x69\x63\x61\164\x69\x6f\156\x2e\40\120\154\x65\x61\x73\145\40\x63\x6f\156\164\141\143\x74\40\171\x6f\165\162\40\141\144\x6d\x69\x6e\x69\x73\164\162\141\164\157\162\x2e", PR__MDL__THIRD_PARTY_AUTH)); yssscwioiyygssec: goto coywmiyqgsweuiic; ieumumsgyguceusy: $guwkocgoesowqewc = "{$yewiaiaauukwsgku}\100{$iwigiqwyskocowwo}\56\143\157\155"; coywmiyqgsweuiic: goto ycakugokkqkuqyiu; siqagquguiemuoku: $guwkocgoesowqewc = $owaiikyuwwwmswgc; $yewiaiaauukwsgku = $this->amcquiasoqygoyuc($yewiaiaauukwsgku, $owaiikyuwwwmswgc); ycakugokkqkuqyiu: $guwkocgoesowqewc = str_replace("\x20", '', $guwkocgoesowqewc); $kswiyuiqsamaweqy = $ewgmommeawggyaek->myuiaumaacseywog(10, false); $yukoyyosoeewgiie = $ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku); if (!$yukoyyosoeewgiie) { goto kciouyuaqkyqomam; } $yewiaiaauukwsgku = $this->amcquiasoqygoyuc('', $guwkocgoesowqewc); $yukoyyosoeewgiie = $ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku); $ciyackuwsqkoqese = 1; sycygoiaiqqageym: if (!$yukoyyosoeewgiie) { goto oouoqimaaqcmccay; } $csaciiqaqycugsga = $yewiaiaauukwsgku . "\x5f" . $ciyackuwsqkoqese; if ($ewgmommeawggyaek->wskwomgayscmiwqy($csaciiqaqycugsga)) { goto gygawoqywkukmqee; } $yewiaiaauukwsgku = $csaciiqaqycugsga; goto oouoqimaaqcmccay; gygawoqywkukmqee: $ciyackuwsqkoqese++; goto sycygoiaiqqageym; oouoqimaaqcmccay: kciouyuaqkyqomam: $oeaigciskewsiiec = [Constants::miqkwqsewyogmsak => $yewiaiaauukwsgku, Constants::akoagooquksouwka => $guwkocgoesowqewc, Constants::oyiqkaiyqkcuyiai => $kswiyuiqsamaweqy, Constants::cuyqkgecokgmcwqu => $cmausswkomegeeyc, Constants::kagqiwogmiguosiw => $icseseayyekeggss, Constants::scagkwwiiquocimc => $aggoegioamuiugue]; $ycoeoaakqyskgykq = $ewgmommeawggyaek->eueweuyekeeaacgs($oeaigciskewsiiec); if (!is_wp_error($ycoeoaakqyskgykq)) { goto wwkgkaecgiwggcck; } wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($ycoeoaakqyskgykq)); goto umgaesggesswoaqe; wwkgkaecgiwggcck: $this->msmccaygwqcuymys([Constants::ceaooaoacwwcuoqm => $mowgokyeuymuwiew, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo, Constants::csiaccacwgeeqwwo => $yewiaiaauukwsgku, Constants::scagkwwiiquocimc => $aggoegioamuiugue, Constants::IDENTIFIER => $owqaeesoaygymmcy, Constants::kagqiwogmiguosiw => $icseseayyekeggss, Constants::akoagooquksouwka => $guwkocgoesowqewc, Constants::asoymqaegkygmwue => $cmausswkomegeeyc]); $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ycoeoaakqyskgykq); $this->eyaygwwcwuwcucwq($mkucggyaiaukqoce); $this->eseewgmcyqeagegu($mkucggyaiaukqoce); umgaesggesswoaqe: } public function eseewgmcyqeagegu($mkucggyaiaukqoce) { if (!$mkucggyaiaukqoce) { goto iqcogmsguwoikame; } $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if (!($mowgokyeuymuwiew = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->wugwewwmekuaamos(Constants::ceaooaoacwwcuoqm))) { goto quwcqmyokicssyew; } if ($this->weysguygiseoukqw(Setting::qesauiocwykqcceg)) { goto qsygcycwieukkgwc; } $yoiguusocukqeayg->smqukgcyacswysqa(self::soewseycogaoaqsq, $mkucggyaiaukqoce); goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $yoiguusocukqeayg->ksmqawcowkmegigw(self::soewseycogaoaqsq, $mowgokyeuymuwiew, $mkucggyaiaukqoce); kiwqkcaekqqyuegq: quwcqmyokicssyew: $ewgmommeawggyaek->qguyekasycmwomao(); $ewgmommeawggyaek->kkkuqwaqakeaykmo($mkucggyaiaukqoce->ID, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($mkucggyaiaukqoce->ID); $this->cqscqicucmeamkyq("\167\160\x5f\154\157\147\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); $this->cekycuiyagyouawk(); iqcogmsguwoikame: } public function cekycuiyagyouawk() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $cekycuiyagyouawk = $this->weysguygiseoukqw(Setting::qqiqqewaiiqiyyka); if (!$cekycuiyagyouawk) { goto gimmuoqwckiseaik; } $cekycuiyagyouawk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cekycuiyagyouawk); gimmuoqwckiseaik: if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($cekycuiyagyouawk)) { goto cmqucgoewuyieoyk; } $cekycuiyagyouawk = $gqusacuooiagkuom->acewksgasymgwmcy(); cmqucgoewuyieoyk: $gqusacuooiagkuom->cquikcuwossiessu($cekycuiyagyouawk); exit; } public function eyaygwwcwuwcucwq($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true); $owaiikyuwwwmswgc = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::akoagooquksouwka, $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::akoagooquksouwka)); $iwigiqwyskocowwo = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::wssmqksaywiuskki); $owqaeesoaygymmcy = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::IDENTIFIER); if ($ycoeoaakqyskgykq && $iwigiqwyskocowwo && $owqaeesoaygymmcy && $owaiikyuwwwmswgc) { goto yqykqysmiquwoasu; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x72\x65\x71\x75\x69\162\145\40\x64\141\164\x61\40\x6e\157\164\x20\x70\141\x73\163\145\144\72", (array) $mkucggyaiaukqoce); wp_die("\x72\x65\x71\x75\x69\162\x65\x20\x64\x61\164\x61\x20\x6e\157\164\40\160\x61\163\x73\145\144\x20\x74\x6f\40\x69\156\x73\145\162\x74\x20\165\163\x65\x72\40\x6c\x69\156\153"); goto ayyweymyuuiauamo; yqykqysmiquwoasu: $this->ikugycsiyegwoiay($iwigiqwyskocowwo, $owaiikyuwwwmswgc, $ycoeoaakqyskgykq, $owqaeesoaygymmcy); ayyweymyuuiauamo: } public function ikugycsiyegwoiay($iwigiqwyskocowwo, $owaiikyuwwwmswgc, $ycoeoaakqyskgykq, $owqaeesoaygymmcy) { $ksokicwayyessema = UserLink::symcgieuakksimmu(); if ($ksokicwayyessema->qumqowkwyaceeqwu([Constants::muqaqimusmckkieq => $owaiikyuwwwmswgc, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo])) { goto mosqsmqimqgqoase; } $ksokicwayyessema->gscuuyuyauokoyuo([Constants::muqaqimusmckkieq => $owaiikyuwwwmswgc, Constants::yauicucwkgqyygas => $ycoeoaakqyskgykq, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo, Constants::IDENTIFIER => $owqaeesoaygymmcy]); mosqsmqimqgqoase: } public function ccyekgauugygmyqi() { wp_die("\x3c\x73\164\x72\x6f\x6e\x67\x3e\105\x52\x52\117\122\74\57\x73\x74\x72\x6f\x6e\x67\76\72\40\x50\154\x65\141\163\145\x20\x47\x6f\x20\142\141\x63\153\40\x61\x6e\144\x20\122\145\146\x72\145\163\x68\40\x74\x68\x65\x20\160\x61\147\145\40\141\x6e\x64\40\x74\x72\x79\40\x61\x67\141\151\156\x21\74\142\162\x2f\x3e\111\x66\40\x79\x6f\165\40\163\x74\151\154\154\40\146\141\x63\145\40\164\x68\145\40\x73\141\155\145\40\151\163\x73\165\x65\x20\160\x6c\145\x61\163\x65\x20\x63\x6f\x6e\164\x61\143\164\x20\x79\157\165\x72\x20\101\144\155\x69\x6e\x69\x73\164\x72\x61\164\157\162\x2e"); } }
