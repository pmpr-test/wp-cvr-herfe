<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716e42069d0c             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Navigation; use Pmpr\Cover\Herfe\Container; use Pmpr\Cover\Herfe\Navigation\Walker\Desktop; use Pmpr\Cover\Herfe\Navigation\Walker\Mobile; use Pmpr\Cover\Herfe\Navigation\Walker\Walker; class Navigation extends Container { const eagmsgqygmiiqkmy = "\x6d\x6f\142\151\154\x65\x2d\155\x65\x6e\x75"; const euamyqcwoicakggg = "\144\145\163\153\x74\x6f\x70\55\x6d\x65\156\165"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\161\153\x61\153\151\x6b\165\165\x63\163\147\151\x6b\x79\161\167"])->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\x6e\151\x74", [$this, "\x73\x71\141\151\x63\x75\x75\147\x73\x63\157\x73\157\153\x6d\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\137\156\x61\166\x5f\155\x65\x6e\x75\x5f\x61\162\147\163", [$this, "\167\151\153\x6d\x6d\x63\147\171\153\x73\153\x79\x65\x65\171\x79"]); } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __("\x44\145\x73\153\x74\157\160\x20\116\141\166\151\x67\141\164\x69\157\156\40\x4d\145\x6e\165", PR__CVR__HERFE), self::eagmsgqygmiiqkmy => __("\x4d\x6f\x62\x69\x6c\145\40\116\x61\166\x69\147\141\x74\x69\x6f\x6e\x20\x4d\x65\x6e\165", PR__CVR__HERFE)]; } public function sqaicuugscosokmw() { $qyyeoyuaqwwmysuu = $this->wegieaiumwsmoywe(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); foreach ($qyyeoyuaqwwmysuu as $igscmsiuisqaqwkk) { if (!$ewsqcacamuomwagw->kkawimmeccgmcawk($igscmsiuisqaqwkk)) { $ewsqcacamuomwagw->oqeqieqigwskaoks($igscmsiuisqaqwkk); } } } public function qkakikuucsgikyqw() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { $ewsqcacamuomwagw->uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); } } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\x74\150\145\x6d\x65\137\x6c\x6f\143\141\164\151\x6f\156"); $ggauoeuaesiymgee = [ "\145\143\150\157" => true, "\x6d\x65\x6e\165" => '', "\144\x65\x70\x74\x68" => 0, "\141\146\x74\145\x72" => '', "\167\x61\x6c\x6b\x65\x72" => new Walker(), "\x62\x65\146\x6f\162\145" => '', "\x6d\145\x6e\165\x5f\x69\144" => '', "\x6c\151\137\x63\154\x61\163\163" => '', "\143\x6f\x6e\x74\x61\x69\156\x65\162" => '', "\x6c\151\156\x6b\137\x63\154\141\163\163" => "\156\x61\x76\55\x6c\151\x6e\x6b", "\151\164\x65\155\x73\137\x77\162\141\160" => '', "\155\145\x6e\165\137\143\154\x61\163\163" => '', "\x6c\151\156\153\137\141\x66\164\145\x72" => '', "\x6c\x69\156\153\x5f\x62\145\146\157\162\x65" => '', "\x66\x61\154\154\x62\x61\143\x6b\137\143\x62" => false, "\x69\x74\x65\155\x5f\163\160\141\143\151\156\x67" => "\x64\151\x73\143\141\162\144", "\143\157\x6e\x74\141\x69\x6e\145\162\x5f\151\x64" => '', "\x63\x6f\156\164\141\x69\156\145\x72\137\143\154\141\163\x73" => '', "\143\157\x6e\164\141\151\x6e\145\x72\x5f\141\x72\151\x61\137\x6c\141\142\145\x6c" => '', ]; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = "\x6c\x69\163\164\x2d\x75\156\163\x74\171\154\x65\x64\x20\x6d\x62\x2d\x30"; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii["\x77\141\x6c\153\145\x72"] = new Mobile(); break; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk .= "\x20\144\55\146\x6c\145\x78"; $ywmkwiwkosakssii["\167\141\154\x6b\x65\x72"] = new Desktop(); break; } $ywmkwiwkosakssii["\x69\x74\145\x6d\163\x5f\167\162\141\x70"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\165\154", ["\143\154\141\x73\x73" => $egkiuiwyukscsgwk], "\x25\x33\44\x73"); return $ywmkwiwkosakssii; } }
