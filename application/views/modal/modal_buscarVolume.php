<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 07/02/2017
 * Time: 22:44
 */
?>
<!-- Modal -->
<div class="modal fade" id="buscarModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" onclick="limparBuscaModel();"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Buscar Volume</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Cliente</label>
                        <input type="text" class="form-control" id="cliente_busca">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Data</label>
                        <input type="text" class="form-control" id="data_busca">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Onibus</label>
                        <input type="text" class="form-control" id="onibus_busca">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Origem</label>
                        <input type="text" class="form-control" id="origem_busca">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Destino</label>
                        <input type="text" class="form-control" id="destino_busca">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tipo da Volume</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tp_volume1_busca" id="tp_volume1_busca" value="1" checked> Caixa
                            </label>
                            <label>
                                <input type="checkbox" name="tp_volume2_busca" id="tp_volume2_busca" value="2"> Sacola
                            </label>
                            <label>
                                <input type="checkbox" name="tp_volume3_busca" id="tp_volume3_busca" value="3"> Envelope
                            </label>
                            <label>
                                <input type="checkbox" name="tp_volume4_busca" id="tp_volume4_busca" value="4"> Avulso
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tamanho do Volume</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tm_volume1_busca" id="tm_volume1_busca" value="1"> Pequena
                            </label>
                            <label>
                                <input type="checkbox" name="tm_volume2_busca" id="tm_volume2_busca" value="2"> Média
                            </label>
                            <label>
                                <input type="checkbox" name="tm_volume3_busca" id="tm_volume3_busca" value="3"> Grande
                            </label>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
                <button type="button" class="btn btn-primary" onclick="limparBuscaModel();"><i class="fa fa-eraser"></i> Limpar</button>
                <button type="button" class="btn btn-danger" onclick="limparBuscaModel();" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
