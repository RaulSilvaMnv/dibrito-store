$('[name="ModalMensagem"]').on('click', function() {
    modalMensagem(this.id);
});
$('[name="btnMostrarOcultarCardBody"]').on('click', function() {
    let cardBody = this.value;
    classes = $(`#${cardBody}`)[0].classList;
    fOcultarMostrarBody(cardBody, classes);
})
$(document).ready(function() {
    $('.cpf').mask('000.000.000-00');
    $('.data').mask('00/00/0000');
    $('.cep').mask('00000-000');
    $('.cel').mask('(00)00000-0000');
    $('.tel').mask('(00)0000-0000');
    $('.cns').mask('000-0000-0000-0000');
    if ($('.selectize').length) {
        $('.selectize').selectize({
            render: {
                option: function(item, escape) {
                    if (item.label && item.label != "") {
                        return "<div title='" + item.title + "'><span class='" + item.label.split('|')[0] + "'  style='display: inline;'><i class='" + item.label.split('|')[1] + "' style='font-size: 14px;'></i></span> " + item.text + "</div>";
                    } else {
                        return "<div style='padding: 5px 0px 0px 10px;' >" + item.text + "</div>";
                    }
                }
            },
            plugins: ['preserve_search', 'remove_button']
        });
    }
    if ('.dtpicker') {
        if ($('#datetimepicker1').length) {
            if ($('#datetimepicker1').length) {
                $('#datetimepicker1').on('click', function() {
                    $('#txtDataInicio').focus();
                });
            }
            $('#txtDataInicio').datepicker({
                dateFormat: `dd/mm/yy 07:00:00`,
                showButtonPanel: true,
                changeMonth: true,
                changeYear: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 1,
                dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            })
        }
        if ($('#datetimepicker2').length) {
            if ($('#datetimepicker2').length) {
                $('#datetimepicker2').on('click', function() {
                    $('#txtDataFim').focus();
                });
            }
            $('#txtDataFim').datepicker({
                dateFormat: `dd/mm/yy 23:59:00`,
                showButtonPanel: true,
                changeMonth: true,
                changeYear: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 1,
                dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            });
        }
    }
    if ($(".cleditor").length) {
        $(".cleditor").cleditor({
            height: 200
        });
    }
});