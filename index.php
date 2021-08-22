<?php 

    //apresentar os dados apresentados em uma tabela de html

    //Estrutura: Nome. genero e país

    $dados = [
        ['João', 'M', 'Portugal'],
        ['ana', 'F', 'Brasil'],
        ['carlos', 'M', 'Angola'],
        ['Matilde', 'F', 'Moçambique'],
    ]


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            text-align: center;
        }
    </style>
</head>
<body>
    
        <table border="5">
            <!-- usaando a tag thead para faer o cabeçalho -->
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>País</th>
                </tr>
            </thead>

            <!-- usaando a tag tbody para faer o cabeçalho -->
            <tbody>
                
                <!-- usando foreach para pegar cada item da tabela e apresentar no echo como $item -->
                <?php foreach($dados as $item):?>
                    <tr>
                        <td><?= $item[0] ?></td>
                        <td><?= $item[1] ?></td>
                        <td><?= $item[2] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

</body>
</html>