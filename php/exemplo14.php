<?
$uploaddir ='\var\ww\uploads';
$uploadfile=$uploaddir.basename($_FILES['userfile'] ['name']);
echo '<pre>'
if (move_uploaded_file($_FILES['userfile'] ['tmp_name'],$uploadfile)){
    echo "Arquivo válido e enviado com sucesso "
}
else{
    "Possivel ataque de upload de arquivos!"
}
echo "Aqui está mais informações de debug"
print_r ($_FILES);
print "<\pre>"
?>
