<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 07/02/2017
 * Time: 20:42
 */
?>
<!-- Modal -->
<div class="modal fade" id="excluirModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <input type="hidden" id="tipoExclusao" value>
    <input type="hidden" id="id_mercadoria_excluir" value>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Cancelar</h4>
            </div>
            <div class="alert alert-success alert-dismissible" role="alert" style="display: none;" id="excluidoSucesso">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-check"></i> Cancelamento efetuado com sucesso!</strong>
            </div>

            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none;" id="excluidoErro">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-close"></i> Erro ao realizar cancelamento!</strong>
            </div>
            <div class="modal-body">
                Deseja realmente cancelar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="excluir"><i class="fa fa-check"></i> Excluir</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
