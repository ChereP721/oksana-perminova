<?php header("Content-Type: text/html; charset=CP1251");

//������� ��� ����� ��������� ������ �������������� �������������:
//������� ������� ����� ����������� (���, �������, e-mail), ��������� ������������ �� ����������
//�������� � ����� ����������� ���� � ������ ������, ������������ ��� ����������
//*������������ ���������� ������������������ �������������


if (isset($_POST['send'])) {
$surname = $_POST['surname'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$file = $_FILES['file']['name'];

$f = fopen('file.txt', 'a');
fwrite ($f, '�������: ' . $surname . "\n");
fwrite ($f, '���: ' . $name . "\n");
fwrite ($f, '�������: ' . $tel . "\n");
fwrite ($f, 'e-mail: ' . $email . "\n");
fwrite ($f, '������: ' . $file . "\n");
fwrite ($f, ' ' . "\n");
fclose($f);
}


