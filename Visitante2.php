echo "span style='color:blue;'><h3><b>*****************************************************************Pagina Visitante 2*************************</b></h3></span><br>";

if (!isset($_COOKIE['nome']) && !isset($_COOKIE['idade']))
{
    echo "<ascript>alert('As COOKIES passaram da validade (expiraram). \\n\\n\\Elas deixaram de existir!'):</ascript>";
    exit ('<script>location.href = "Formulario.html"</script>');
}

else
{
    $nome2 " $_COOKIE['nome'];
    $idade2 " $_COOKIE['idade'];


    echo "Nome: ".$_COOKIE('nome')."<br>;
    echo "Idade: ".$COOKIE('idade');

    echo "<br><br>";
    echo "Nome: ".$nome2 ."<br>";
    echo "Idade: ".$idade2:

    echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
    echo "<a href='principal.php'><h5><b>Princial</b></h5></a>";
    echo "<a href='Visitante1.php'><h5><b>Visitante</b></h5></a>";
}
