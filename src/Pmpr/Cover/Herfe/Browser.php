<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc06044c94             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; class Browser extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\x72\x6f\x77\163\x65\x72\137\162\145\x6e\x64\145\x72", [$this, "\x63\147\163\153\153\141\x75\147\163\157\167\143\157\165\153\x79"])->waqewsckuayqguos("\141\x66\164\145\x72\137\x70\x61\x67\145\137\164\151\164\x6c\145", [$this, "\155\x65\x73\161\x73\x77\x63\145\x73\x71\165\171\151\x69\165\167"]); } public function mesqswcesquyiiuw($mksyucucyswaukig) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $oammesyieqmwuwyi = []; if ($mksyucucyswaukig instanceof WP_Term && $mumyimcwkaemyyue->sgayqmgoigoseaoo()) { if (0 === $mksyucucyswaukig->parent) { $omwmuycmeqcqokom = $mksyucucyswaukig; } else { $omwmuycmeqcqokom = $mksyucucyswaukig->parent; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($omwmuycmeqcqokom)) { $oammesyieqmwuwyi = [[Constants::qescuiwgsyuikume => __("\x41\154\154", PR__CVR__HERFE), Constants::eqewsqmqmsiocaeg => 0 === $mksyucucyswaukig->parent, Constants::sauwwsocmukoaayu => $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom)]]; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { if ($wcgsoqmmciswkmiq->count > 0) { $oammesyieqmwuwyi[] = $wcgsoqmmciswkmiq; } } } } if ($oammesyieqmwuwyi) { $this->cgskkaugsowcouky([Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } } public function cgskkaugsowcouky(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qwumqqyuasyskkkc => [], Constants::gmmygyiecgmggaam => '']); $qsqwqsymmqeoqwcu = []; if (($oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]) && is_array($oammesyieqmwuwyi)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $meqocwsecsywiiqs = ''; $qegcgsquckcqmkea = false; $migiiksoiymissge = ''; if (is_numeric($igqsaukqcqscimok)) { $igqsaukqcqscimok = $seumokooiykcomco->get($igqsaukqcqscimok, $ywmkwiwkosakssii[Constants::gmmygyiecgmggaam]); } if ($igqsaukqcqscimok instanceof WP_Post) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); $qegcgsquckcqmkea = $mumyimcwkaemyyue->mwyqswsaeeewsosm() === (int) $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); $qegcgsquckcqmkea = $aoskwucuugeuaeus->migkyseymeomymmy($aoskwucuugeuaeus->yyoeeseewqmmyaee($igqsaukqcqscimok), $igqsaukqcqscimok); } else { if (is_array($igqsaukqcqscimok)) { $meqocwsecsywiiqs = $igqsaukqcqscimok[Constants::qescuiwgsyuikume] ?? ''; $qegcgsquckcqmkea = $igqsaukqcqscimok[Constants::eqewsqmqmsiocaeg] ?? false; $migiiksoiymissge = $igqsaukqcqscimok[Constants::sauwwsocmukoaayu] ?? ''; } } } if ($meqocwsecsywiiqs && $migiiksoiymissge) { $qsqwqsymmqeoqwcu[] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::eqewsqmqmsiocaeg => $qegcgsquckcqmkea, Constants::sauwwsocmukoaayu => $migiiksoiymissge]; } } } $this->iuygowkemiiwqmiw("\142\162\x6f\x77\163\145\x72", [Constants::qwumqqyuasyskkkc => $qsqwqsymmqeoqwcu], [Constants::qaacaqioeyiuakeu => true]); } }
