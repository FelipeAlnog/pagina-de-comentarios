<?php
// Verifique se o ID do comentário foi enviado via POST
if (isset($_POST['comentario_id'])) {
    $comentario_id = $_POST['comentario_id'];

    // Conecte-se ao banco de dados (você pode precisar ajustar as credenciais)
    $conexion = mysqli_connect("localhost", "root", "", "meuteste");

    // Execute a consulta DELETE para excluir o comentário com o ID especificado
    $sql = "DELETE FROM comentarios WHERE id = $comentario_id";
    if (mysqli_query($conexion, $sql)) {
        // Comentário excluído com sucesso
        header("Location: ../index.php"); // Redirecione de volta para a página de comentários
        exit();
    } else {
        // Erro ao excluir o comentário
        echo "Erro ao excluir o comentário: " . mysqli_error($conexion);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexion);
} else {
    echo "ID de comentário não especificado.";
}
?>

