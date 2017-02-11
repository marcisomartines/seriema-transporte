/**
 * Created by marciso on 10/02/2017.
 */

$('#nota').click(function(){
    console.log('funcionou');
    if($('#nota').is(":checked")){
        $("#notaFiscal").prop('disabled',false);
        $("#notaFiscal").val('');
    }else{
        $("#notaFiscal").prop('disabled',true);
        $("#notaFiscal").val("S/N");
    }
});


$("#salvarVolume").click(function(){
    var dados = {
        cliente       : $('#cliente').val(),
        telefone      : $('#telefone').val(),
        notafiscal    : $('#notaFiscal').val(),
        desc          : $('#desc').val(),
        tipoVolume    : $('input:radio[name=tipoVolume]:checked').val(),
        tamanhoVolume : $('input:radio[name=tamanhoVolume]:checked').val()
    };
    console.log(dados);
    // $('#inserirModal-modal').modal('toggle');
});

$("#cancelarVolume").click(function(){
    $('#cliente').val('');
    $('#telefone').val('');
    $('#notaFiscal').val('');
    $('#desc').val('');
});