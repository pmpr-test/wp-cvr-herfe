<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebe57815d             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x6c\151\142\162\141\x72\x79" => IconInterface::eyikeaawgqmqgqkw, "\144\141\x73\150\x62\x6f\141\x72\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\x64\145\x72\163" => IconInterface::goqumcwkcuygcaui, "\x64\157\x77\156\154\157\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\144\151\164\x2d\141\x64\x64\x72\145\x73\x73" => IconInterface::wykikkeyisimsmyy, "\x70\141\x79\155\x65\x6e\x74\x2d\155\x65\x74\x68\x6f\144\163" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\164\55\141\x63\143\x6f\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\x63\165\163\164\157\155\x65\x72\55\x6c\x6f\x67\x6f\165\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, string $yuumukkaswwoywya = "\x2e\x69\x6e\x70\x75\x74\55\x74\x65\x78\x74") : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); return $smuykqsageuocuos->qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw, $smuykqsageuocuos) { $aokagokqyuysuksm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, Constants::gouqcwikiiygyasc); $pkyyagewkiyckmwy = $smuykqsageuocuos->qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\141\142\145\154\133\146\157\162\x3d\x22{$aokagokqyuysuksm}\42\135", true); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { goto oeocukauoyosicso; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto suqceasgacskcmkc; oeocukauoyosicso: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto wkwamkgkwykeqkec; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; oimkeqocuguqqsqk: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(sprintf(__("\x25\x73\40\x6f\146\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\143\x6c\141\x73\x73" => "\160\162\x69\x63\145\x2d\144\x69\163\x63\x6f\165\156\164\x2d\141\155\x6f\x75\156\x74\x20\x74\x65\x78\x74\x2d\x73\x65\143\157\156\x64\141\x72\171\x20\146\x73\x2d\163\155\x20\146\157\156\x74\55\167\x65\151\147\150\x74\55\142\157\x6c\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\x65\137\144\x69\x73\x63\x6f\x75\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); suqceasgacskcmkc: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\156\x20\x62\164\x6e\x2d\154\x67\40\142\x67\x2d\x70\162\151\x6d\141\x72\x79\x2d\163\145\143\157\x6e\x64\x61\x72\171\x20\164\x65\170\164\x2d\167\x68\151\x74\145\x20\160\170\55\x38\40{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !$cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc(); } }