function MenuPrincipal(x) {
    if (x === 'consulta') {
        $("#conteudo").load("php/Consulta.php");
        // $("#conteudo").addClass('hidden');
        $("#footer").addClass('hidden');
    } else if (x === 'cadastro') {
        $("#conteudo").load("php/Cadastro.php");
    }
}