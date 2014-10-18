<!--
    Listagem de Clientes
-->
<h1>Listagem de Clientes</h1>
    <div class="jumbotron">
        <?php
        if(isset($_POST['cres'])){
            ksort($dados);
        }elseif(isset($_POST['dec'])){
            krsort($dados);
        }else{
            ksort($dados);
        }
        ?>
        <form method="post">
            <button class="btn btn-block btn-success" type="submit" value="dec" name="dec">Ordem Decrescente</button>
            <button class="btn btn-block btn-success" type="submit" value="cres" name="cres">Ordem Crescente</button>
        </form>
        <table class="table table-responsive">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>NOME</th>
                    <!--<th>SOBRENOME</th>-->
                    <th>E-MAILL</th>
                    <th>TELEFONE</th>
                    <th>TIPO</th>
                    <th>GRAU IMPORTANCIA</th>
                    <th>VISUALIZAR</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $cliente): ?>
                    <?php //print_r($cliente); ?>
                <tr>
                    <td><?php echo $cliente["id"];?></td>
                    <td><?php echo $cliente["nome"];?></td>
                    <!--<td><?php //echo $cliente->getSobrenome();?></td>-->
                    <td><?php echo $cliente["email"];?></td>
                    <td><?php echo $cliente["telefone"];?></td>
                    <td><?php echo $cliente["tipo"];?></td>
                    <td><?php echo $cliente["estrela"] . ' Estrelas';?></td>
                    <td><a href="visualizarCliente?<?php echo $cliente['id'];?>"><button class="btn btn-info " type="submit" name="visualizar" >Visualizar</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
