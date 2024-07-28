<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $quantidade = $_POST['quantidade'];

    $to = "teteu34350@gmail.com";
    $subject = "Novo Pedido de Paiero";
    $body = "Tipo de Paiero: $tipo\nQuantidade: $quantidade";
    $headers = "From: pedidos@seusite.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pedido enviado com sucesso!";
    } else {
        echo "Erro ao enviar pedido. Tente novamente.";
    }
}
?>
