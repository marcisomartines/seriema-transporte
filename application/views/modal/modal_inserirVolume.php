<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 07/02/2017
 * Time: 20:54
 */
?>
<div class="modal fade" id="inserirModal-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Cadastrar Volume</h4>
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
                        <label for="campo2">Possui Nota Fiscal?</label>
                        <label>
                            <input type="checkbox" value=""> SIM
                        </label>
                        <span style="display: none;">
                            <input type="text" class="form-control" id="campo3">
                        </span>

                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo3">Descrição</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tipo da Volume</label>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Caixa
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Sacola
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Envelope
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Avulso
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="campo2">Tamanho do Volume</label>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Pequena
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Média
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Grande
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="alert('teste')">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
