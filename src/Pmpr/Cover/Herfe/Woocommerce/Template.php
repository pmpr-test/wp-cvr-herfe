<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4a88ebba2             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\151\x62\162\141\162\x79" => IconInterface::eyikeaawgqmqgqkw, "\x64\141\x73\x68\x62\x6f\x61\x72\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\x64\x65\162\x73" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\x77\156\154\x6f\141\144\x73" => IconInterface::msyqysqykouywsua, "\145\144\151\x74\55\x61\144\x64\162\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\x61\x79\x6d\145\156\x74\x2d\155\145\164\x68\x6f\144\163" => IconInterface::acciucugwcskkwmi, "\145\144\151\164\x2d\x61\143\143\157\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\x73\164\x6f\155\x65\162\55\x6c\x6f\x67\x6f\x75\164" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, string $yuumukkaswwoywya = "\56\x69\x6e\x70\165\164\x2d\164\145\170\164") : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); return $smuykqsageuocuos->qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw, $smuykqsageuocuos) { $aokagokqyuysuksm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, Constants::gouqcwikiiygyasc); $pkyyagewkiyckmwy = $smuykqsageuocuos->qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\141\x62\x65\x6c\133\x66\157\162\x3d\42{$aokagokqyuysuksm}\x22\x5d", true); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $kmooseagagygqskw = "\45"; if (is_rtl()) { $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; } else { $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; } $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(sprintf(__("\x25\163\40\157\x66\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\x6c\x61\163\163" => "\x70\x72\x69\143\145\x2d\144\151\163\x63\157\165\x6e\164\55\x61\x6d\x6f\165\x6e\x74\x20\164\145\170\x74\55\163\145\143\157\156\144\141\x72\x79\x20\146\x73\x2d\163\155\x20\x66\x6f\156\x74\x2d\x77\145\x69\147\150\164\55\x62\x6f\154\x64"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\x69\143\145\x5f\x64\151\163\x63\157\x75\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); } else { $wewsywccwwomowkw = $xgwukwqqaseqagay; } return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\156\40\x62\164\156\55\154\x67\40\142\147\55\160\x72\151\x6d\141\162\x79\55\163\145\x63\157\156\x64\141\x72\171\x20\x74\x65\x78\x74\55\167\x68\151\164\145\x20\x70\170\x2d\x38\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !$cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc(); } }
