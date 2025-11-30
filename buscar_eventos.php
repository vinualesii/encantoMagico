<?php

header('Content-Type: application/json; charset=utf-8');
include_once '../login/conexao.php';

try {
    // Query para buscar eventos ativos (não cancelados e não deletados)
    $sql = "SELECT 
                e.idevento,
                e.data_evento,
                e.aniversariante,
                e.idade,
                e.local,
                e.enderecoevento,
                e.cidadeevento,
                e.cepevento,
                e.horario_inicio,
                e.horario_termino,
                e.tema,
                p.produto as tema_nome,
                c.nome as cliente_nome,
                c.celular as cliente_celular
            FROM eventos e
            INNER JOIN clientes cl ON e.cliente = cl.idcliente
            INNER JOIN cadastro c ON cl.idcadastrocliente = c.id
            LEFT JOIN produtos p ON e.tema = p.idproduto
            WHERE e.cancelado = 0 
            AND e.deletado = 0
            AND e.data_evento >= CURDATE()
            ORDER BY e.data_evento ASC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Formatar os dados para o frontend
    $resultado = [];
    foreach ($eventos as $evento) {
        $resultado[] = [
            'idevento' => (int)$evento['idevento'],
            'data_evento' => $evento['data_evento'],
            'aniversariante' => $evento['aniversariante'],
            'idade' => $evento['idade'],
            'local' => $evento['local'],
            'enderecoevento' => $evento['enderecoevento'],
            'cidadeevento' => $evento['cidadeevento'],
            'cepevento' => $evento['cepevento'],
            'horario_inicio' => substr($evento['horario_inicio'], 0, 5), // HH:MM
            'horario_termino' => substr($evento['horario_termino'], 0, 5), // HH:MM
            'tema' => (int)$evento['tema'],
            'tema_nome' => $evento['tema_nome'] ?? 'Não informado',
            'cliente_nome' => $evento['cliente_nome'],
            'cliente_celular' => $evento['cliente_celular']
        ];
    }
    
    echo json_encode([
        'success' => true,
        'data' => $resultado,
        'total' => count($resultado)
    ], JSON_UNESCAPED_UNICODE);
    
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao buscar eventos: ' . $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);
}
?>