<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b6c19c25c             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; class Browser extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\162\157\x77\163\x65\162\137\x72\145\x6e\144\x65\162", [$this, "\x63\147\163\153\153\x61\165\147\163\x6f\x77\143\x6f\165\153\171"])->waqewsckuayqguos("\x61\146\x74\x65\x72\x5f\160\141\x67\145\x5f\164\x69\164\154\x65", [$this, "\155\x65\x73\161\x73\x77\143\145\163\161\165\171\x69\x69\165\x77"]); } public function mesqswcesquyiiuw($mksyucucyswaukig) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $oammesyieqmwuwyi = []; if ($mksyucucyswaukig instanceof WP_Term && $mumyimcwkaemyyue->sgayqmgoigoseaoo()) { if (0 === $mksyucucyswaukig->parent) { $omwmuycmeqcqokom = $mksyucucyswaukig; } else { $omwmuycmeqcqokom = $mksyucucyswaukig->parent; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($omwmuycmeqcqokom)) { $oammesyieqmwuwyi = [[Constants::qescuiwgsyuikume => __("\101\x6c\154", PR__CVR__HERFE), Constants::eqewsqmqmsiocaeg => 0 === $mksyucucyswaukig->parent, Constants::sauwwsocmukoaayu => $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom)]]; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { if ($wcgsoqmmciswkmiq->count > 0) { $oammesyieqmwuwyi[] = $wcgsoqmmciswkmiq; } } } } if ($oammesyieqmwuwyi) { $this->cgskkaugsowcouky([Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } } public function cgskkaugsowcouky(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qwumqqyuasyskkkc => [], Constants::gmmygyiecgmggaam => '']); $qsqwqsymmqeoqwcu = []; if (($oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]) && is_array($oammesyieqmwuwyi)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $meqocwsecsywiiqs = ''; $qegcgsquckcqmkea = false; $migiiksoiymissge = ''; if (is_numeric($igqsaukqcqscimok)) { $igqsaukqcqscimok = $seumokooiykcomco->get($igqsaukqcqscimok, $ywmkwiwkosakssii[Constants::gmmygyiecgmggaam]); } if ($igqsaukqcqscimok instanceof WP_Post) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); $qegcgsquckcqmkea = $mumyimcwkaemyyue->mwyqswsaeeewsosm() === (int) $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); $qegcgsquckcqmkea = $aoskwucuugeuaeus->migkyseymeomymmy($aoskwucuugeuaeus->yyoeeseewqmmyaee($igqsaukqcqscimok), $igqsaukqcqscimok); } else { if (is_array($igqsaukqcqscimok)) { $meqocwsecsywiiqs = $igqsaukqcqscimok[Constants::qescuiwgsyuikume] ?? ''; $qegcgsquckcqmkea = $igqsaukqcqscimok[Constants::eqewsqmqmsiocaeg] ?? false; $migiiksoiymissge = $igqsaukqcqscimok[Constants::sauwwsocmukoaayu] ?? ''; } } } if ($meqocwsecsywiiqs && $migiiksoiymissge) { $qsqwqsymmqeoqwcu[] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::eqewsqmqmsiocaeg => $qegcgsquckcqmkea, Constants::sauwwsocmukoaayu => $migiiksoiymissge]; } } } $this->iuygowkemiiwqmiw("\142\162\x6f\167\x73\145\x72", [Constants::qwumqqyuasyskkkc => $qsqwqsymmqeoqwcu], [Constants::qaacaqioeyiuakeu => true]); } }
