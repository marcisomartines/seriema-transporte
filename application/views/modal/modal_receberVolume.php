<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 18/02/2017
 * Time: 21:48
 */
?>

<!-- Modal -->
<div class="modal fade" id="receberModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <input type="hidden" id="tipoRecebido" value="1">
    <input type="hidden" id="id_mercadoria_recebido">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Receber Volume</h4>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert" style="display: none;" id="recebidoSucesso">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-check"></i> Volume recebido com sucesso!</strong>
            </div>

            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none;" id="recebidoErro">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-close"></i> Erro ao receber volume!</strong>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="campo2">Data de Recebimento</label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            <input type="text" class="form-control" id="dt_recebido" name="dt_recebido" value="<?=date('d/m/Y');?>">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="salvarRecebido"><i class="fa fa-check"></i> Receber</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelarRecebido"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->