<?php

require_once("qrcode.php");

//---------------------------------------------------------

#print("<h4>�����I�Ɍ^�Ԃ��w��</h4>");

$qr = new QRCode();
// �G���[�������x����ݒ�
// QR_ERROR_CORRECT_LEVEL_L : 7%
// QR_ERROR_CORRECT_LEVEL_M : 15%
// QR_ERROR_CORRECT_LEVEL_Q : 25%
// QR_ERROR_CORRECT_LEVEL_H : 30%
$qr->setErrorCorrectLevel(QR_ERROR_CORRECT_LEVEL_Q);
// �^��(�傫��)��ݒ�
// 1�`10
$qr->setTypeNumber(4);
// �f�[�^(������)��ݒ�
// �����{���SJIS
$qr->addData("The quick brown fox jumps over the lazy dog");
#$qr->addData("Longer text this time");
#$qr->addData('A 78+ character string needs version 2 with error correction L. Force recalculating version.');
// QR�R�[�h���쐬

$qr->make();
#$qr->dumpModules();
exit;

//echo var_dump($qr->getModules());
// HTML�o��
#$qr->printHTML();

$mod = $qr->modules;
$max = $qr->getModuleCount();
echo "[ ";
for ($i = 0; $i < $max; $i++) {
    echo "[ ";
    for ($j = 0; $j < $max; $j++) {
        echo $mod[$i][$j] ? 1 : 0;
        echo ",";
    }
    echo " ],";
}
echo " ]\n";

/*
$p1 = new QRPolynomial(
    array( 64, 54, 22, 38, 48, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17 ),
    7
);
$p2 = new QRPolynomial(
    array( 1, 127, 122, 154, 164, 11, 68, 117 ),
    0
);
echo "--------------------\n";
$p3 = $p1->mod($p2);
echo "\n\nPolynomial: ";
echo $p3;
echo "\n";
*/


/*
$p1 = new QRPolynomial(
    array( 64, 19, 0, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, 17, 236, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null ),
    18
);
$p2 = new QRPolynomial(
    array( 1, 239, 251, 183, 113, 149, 175, 199, 215, 240, 220, 73, 82, 173, 75, 32, 67, 217, 146 ),
    0
);
echo "\nPoly2: ";
echo $p1->mod($p2);
echo "\n";

$p1 = new QRPolynomial(array( 1, 68, 119, 67, 118, 220, 31, 7, 84, 92, 127, 213, 97 ));
$p2 = new QRPolynomial(array( 1, 205 ) );
echo $p1->multiply($p2);
echo "\n";

*/

//---------------------------------------------------------

#print("<h4>�^�Ԏ���</h4>");

// �^�Ԃ��ŏ��ƂȂ�QR�R�[�h���쐬
#$qr = QRCode::getMinimumQRCode("QR�R�[�h", QR_ERROR_CORRECT_LEVEL_L);
// HTML�o��
#$qr->printHTML();

?>
