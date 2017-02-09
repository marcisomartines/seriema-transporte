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
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Buscar Volume</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Cliente</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Telefone</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Data</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Onibus</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Origem</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Destino</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tipo da Volume</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Caixa
                            </label>
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Sacola
                            </label>
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Envelope
                            </label>
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Avulso
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tamanho do Volume</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Pequena
                            </label>
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Média
                            </label>
                            <label>
                                <input type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Grande
                            </label>
                        </div>
                    </div>
                </div>






<!--                <div class="col-md-6">-->
<!--                    <div class="input-group h2">-->
<!--                        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">-->
<!--                        <span class="input-group-btn">-->
<!--                             <button class="btn btn-primary" type="submit">-->
<!--                                <span class="glyphicon glyphicon-search"></span>-->
<!--                             </button>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="modal-footer">
                <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-eraser"></i> Limpar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
