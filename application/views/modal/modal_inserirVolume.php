<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 07/02/2017
 * Time: 20:54
 */
?>
<div class="modal fade" id="inserirModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <input type="hidden" id="tipoVolume" value="1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" onclick="limpaVolumeModel();">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Cadastrar Volume</h4>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert" style="display: none;" id="volumeSucesso">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-check"></i> Volume cadastrado com sucesso!</strong>
            </div>

            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none;" id="volumeErro">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-close"></i> Erro ao cadastrar volume!</strong>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Cliente</label>
<!--                        <input type="text" class="form-control" id="cliente">-->
                        <?php
                        $query = $this->db->get('tb_clients');
                        $cliente[] = '';
                        foreach ($query->result() as $clt) {
                            $cliente[$clt->id_clients] = $clt->nome;
                        }
                        include 'ajaxCliente.php';
                        ?>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Telefone</label>
                        <input type="text" class="form-control" id="telefone">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Nota Fiscal?</label>
                        <label>
                            <input type="checkbox" id="nota" value="1"> SIM
                        </label>
                        <span>
                            <input type="text" class="form-control" id="notaFiscal" value="S/N" disabled>
                        </span>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="campo2">Entrada no Deposito</label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            <input type="text" class="form-control" id="dt_deposito" name="dt_deposito" value="<?=date('d/m/Y');?>">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo3">Descrição</label>
                        <input type="text" class="form-control" id="desc">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tipo do Volume</label>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="tipoVolume" id="tipoVolume1" value="1" checked> Caixa
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tipoVolume" id="tipoVolume2" value="2"> Sacola
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tipoVolume" id="tipoVolume3" value="3"> Envelope
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tipoVolume" id="tipoVolume4" value="4"> Avulso
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tamanho do Volume</label>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="tamanhoVolume" id="tamanhoVolume1" value="1" checked> Pequena
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tamanhoVolume" id="tamanhoVolume2" value="2"> Média
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tamanhoVolume" id="tamanhoVolume3" value="3"> Grande
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="salvarVolume"><i class="fa fa-check"></i> Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelarVolume"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->


