<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 19/02/2017
 * Time: 17:04
 */

?>

<!-- Modal -->
<div class="modal fade" id="entregarModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <input type="hidden" id="tipoEntregue" value="1">
    <input type="hidden" id="id_mercadoria_entregue" value>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Entregar Volume</h4>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert" style="display: none;" id="entregueSucesso">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-check"></i> Volume entregue com sucesso!</strong>
            </div>

            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none;" id="entregueErro">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-close"></i> Erro ao entregar volume!</strong>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo2">Data de Entrega</label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            <input type="text" class="form-control" id="dt_entregue" name="dt_entregue">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>

                    <!--                    <div class="form-group col-md-12">-->
                    <!--                        Cliente: <span id="cliente_despacho"></span>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="form-group col-md-12">-->
                    <!--                        Nota Fiscal: <span id="nota_fiscal_despacho"></span>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="form-group col-md-12">-->
                    <!--                        Data de entrada: <span id="dt_entrada_despacho"></span>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="form-group col-md-12">-->
                    <!--                        Descrição: <span id="descricao_despacho"></span>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group col-md-12">-->
                    <!--                        Tipo do Volume: <span id="tp_volume_despacho"></span>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group col-md-12">-->
                    <!--                        Tamanho do Volume: <span id="tm_volume_despacho"></span>-->
                    <!--                    </div>-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="salvarEntregue"><i class="fa fa-check"></i> Entregar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelarEntregue"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
