class pessoa {
    public $nome;
    public $endereco;
}
function_construct(string $nome string $endereco){
    $this->$nome;
    %$this->=$endereco;
}
function descricaoCompleta(){
    return "$this-> nome,$this->endereco";
}
$p=new Pessoa("Maria de Assis", "Av Brasil,20");
echo $p-> descricaoCompleta();
