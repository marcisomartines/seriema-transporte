<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 07/02/2017
 * Time: 20:54
 */
?>

<!-- Modal -->
<div class="modal fade" id="despacharModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <input type="hidden" id="tipoDespacho" value="1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Despachar Volume</h4>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert" style="display: none;" id="despachoSucesso">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-check"></i> Volume despachado com sucesso!</strong>
            </div>

            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none;" id="despachoErro">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-close"></i> Erro ao despachar volume!</strong>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Onibus</label>
                        <input type="text" class="form-control" id="onibus_despacho">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Data Saída</label>
                        <input type="text" class="form-control" id="dt_despacho">
                    </div>

                    <div class="form-group col-md-12">
                        Cliente: <span id="cliente_despacho">ASasSAs</span>
                    </div>

                    <div class="form-group col-md-12">
                        Nota Fiscal: <span id="nota_fiscal_despacho"></span>
                    </div>

                    <div class="form-group col-md-12">
                        Data de entrada: <span id="dt_entrada_despacho"></span>
                    </div>

                    <div class="form-group col-md-12">
                        Descrição: <span id="descricao_despacho"></span>
                    </div>
                    <div class="form-group col-md-12">
                        Tipo do Volume: <span id="tp_volume_despacho"></span>
                    </div>
                    <div class="form-group col-md-12">
                        Tamanho do Volume: <span id="tm_volume_despacho"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="salvarVolume"><i class="fa fa-check"></i> Despachar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelarVolume"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
