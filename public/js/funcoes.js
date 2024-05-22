modalMensagem = (data) => {
    if (data == 'btnFechar') {
        if ($('#txtIdBotaoPressionado').val()) {
            idBotaoPressionado = $('#txtIdBotaoPressionado').val();
            $('#' + idBotaoPressionado).click();
            $('[name="txtBtnPressionado"]').remove();
        }
        $('[name="Rota"]').remove();
        $('#modalMensagem').modal('hide');
    }
    if (data == 'btnSim') {
        window.location.href = $('#txtRota').val();
    }
}

function mensagem(msg, objeto, tipoMensagem) {
    $('#mensagem').addClass(tipoMensagem);
    $('.lblMensagem').text(msg);
    $('#mensagem').show('slow');
    if (objeto !== null && objeto !== undefined) {
        objeto.focus();
    }
    setTimeout(function() {
        $('#mensagem').hide('slow');
    }, 3000);
    setTimeout(function() {
        $('#mensagem').removeClass(tipoMensagem);
    }, 6000);
}
var temporizador;
fContadorSessao = (tempo) => {
    let contador = tempo;
    temporizador = setInterval(function() {
        objLabel = $('#lblMsgSessao')[0];
        objLabel.innerHTML = `Sua Sessão vai expirar em ${contador} segundos`;
        if (contador < 30) {
            $(`#${objLabel.id}`).removeClass('hidden').addClass('show');
        } else {
            $(`#${objLabel.id}`).removeClass('show').addClass('hidden');
        }
        if (contador == 0) {
            window.location.href = '/sair-municipe'
        }
        contador--;
    }, 1000)
};

fReiniciarTempo = () => {
    clearInterval(temporizador);
    fContadorSessao(1800);
}

mostrarSenha = (data) => {
    if (data === 'A') {
        $('#pwdSenhaAtual').prop('type', 'text');
        $('#spanSenhaAtualOculta').hide();
        $('#spanSenhaAtualVisivel').show();
    }
    if (data === 'N') {
        $('#pwdNovaSenha').prop('type', 'text');
        $('#spanNovaSenhaOculta').hide();
        $('#spanNovaSenhaVisivel').show();
    }
    if (data === 'C') {
        $('#pwdConfirma').prop('type', 'text');
        $('#spanConfirmaSenhaOculta').hide();
        $('#spanConfirmaSenhaVisivel').show();
    }
}
ocultarSenha = (data) => {
    if (data === 'A') {
        $('#pwdSenhaAtual').prop('type', 'password');
        $('#spanSenhaAtualVisivel').hide();
        $('#spanSenhaAtualOculta').show();
    }
    if (data === 'N') {
        $('#pwdNovaSenha').prop('type', 'password');
        $('#spanNovaSenhaVisivel').hide();
        $('#spanNovaSenhaOculta').show();
    }
    if (data === 'C') {
        $('#pwdConfirma').prop('type', 'password');
        $('#spanConfirmaSenhaVisivel').hide();
        $('#spanConfirmaSenhaOculta').show();
    }
}

fVerificaEmail = (objeto) => {
    email = objeto[0].value;
    $.get(`/verifica/${email}`, function(data) {
        if (data.length > 0) {
            var msg = "E-mail já cadastrado.";
            mensagem(msg, objeto, 'alert-danger show');
            return false;
        } else {
            return true;
        }
    })
};

fValidaDataTime = (objeto) => {
    flag = true;
    data = objeto.value;
    if (data.length < 16) {
        var msg = 'Data no formato inválido';
        mensagem(msg, objeto, 'alert-warning show');
        $('.pData').removeClass('hidden');
        flag = false;
    }
    return flag;
};

function validaData(objeto) {
    flag = true;
    data = objeto.value;
    if (!(data == '')) {
        if (data.length < 10) {
            var msg = 'Data no formato inválido';
            mensagem(msg, $('#' + objeto.id + ''), 'alert-warning show')
            $('.pData').removeClass('hidden');
            flag = false;
        } else {
            if (objeto.id === 'txtDataNascimento') {
                var idade = validaIdade(data);
                if (idade < 18) {
                    msg = 'A idade mínima para realizar o cadastro é 18 anos.';
                    mensagem(msg, $(`#${objeto.id}`), 'alert-danger show');
                    flag = false;
                } else if (idade > 100) {
                    msg = 'Data fora dos parâmetros';
                    mensagem(msg, $(`#${objeto.id}`), 'alert-danger show');
                    flag = false;
                }
            }
        }
    }
    return flag;
};
formatarData = (data) => {
    let dia = data.getDate();
    let mes = data.getMonth();
    let ano = data.getFullYear();
    let dataFormatada = ano + '-' + (mes + 1) + '-' + dia;
    return dataFormatada;
}
comparaData = (data1, data2) => {
    if (data2 === '' || data2 === undefined) {
        hoje = formatarData(new Date());
    } else {
        let arrData2 = data2.split(' ');
        hoje = `${arrData2[0].split('/').reverse().join('-')} ${arrData2[1]}`;
        hoje = formatarData(new Date(hoje));
    }
    let arrData1 = data1.split(' ');
    let novaData1 = `${arrData1[0].split('/').reverse().join('-')} ${arrData1[1]}`;
    novaData1 = formatarData(new Date(novaData1));
    moment(hoje).isAfter(novaData1) ? flag = true : flag = false;
    return flag;
}
preencheMoeda = (a, e, r, t) => {
    let n = "",
        h = j = 0,
        u = tamanho2 = 0,
        l = ajd2 = "",
        o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o), -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
        h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
    ;
    for (l = ""; h < u; h++)
        -
        1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
        0 == (u = l.length) && (a.value = ""),
        1 == u && (a.value = "0" + r + "0" + l),
        2 == u && (a.value = "0" + r + l),
        u > 2) {
        for (ajd2 = "",
            j = 0,
            h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
                j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
            tamanho2 = ajd2.length,
            h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}



function fValidarCPF(strCPF) {
    var Soma;
    var Resto;
    // var repeticoes = /^
    Soma = 0;
    if ((strCPF == "00000000000") | (strCPF == "11111111111") | (strCPF == "22222222222") | (strCPF == "33333333333") | (strCPF == "44444444444") | (strCPF == "55555555555") | (strCPF == "66666666666") | (strCPF == "77777777777") | (strCPF == "88888888888") | (strCPF == "99999999999")) return false;
    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;
    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;
}

function validaIdade(datNascimento) {
    // var datNascimento = objForm.txtPacienteDataNasc.value;
    var birthdate = new Date(datNascimento.split('/')[2] + '/' + datNascimento.split('/')[1] + "/" + datNascimento.split('/')[0]);
    var cur = new Date();
    var diff = cur - birthdate;
    var idade = Math.floor(diff / 31557600000);
    return (idade);
}

fCarregarHeaderFooter = (data) => {
    var headerHTML = "";
    data.forEach(item => {
        headerHTML = headerHTML + "<th bgcolor='cccccc' style='border-bottom: 1px solid black;font-family: monospace;font-size: 16px;text-align: center;'>" + item.cell.innerText + "</th>"
    })
    return headerHTML;
};

fCarregarTd = (cells, classe) => {
    var td = "";
    for (var i = 0; i < cells.length; i++) {
        td = td + "<td " + classe + ">" + cells[i].innerText + "</td>";
    }
    return td;
};

fCarregarBody = (data) => {
    var bodyHTML = "";
    data.forEach(row => {
        var classe = "style='border: 0.5px solid black;font-family: monospace;font-size: 12px;text-align: left;' bgcolor=" + (row.nTr.rowIndex % 2 === 0 ? "''" : "''");
        bodyHTML = bodyHTML +
            "<tr>" +
            fCarregarTd(row.nTr.cells, classe) +
            "</tr>"
    })
    return bodyHTML;
};

fImprimirTabela = (table, tableSettings, titulo, filtros, id) => {
    var today = new Date();
    var dd = today.getDate();
    var MM = today.getMonth() + 1; //January is 0!
    var HH = today.getHours()
    var mm = today.getMinutes()
    var ss = today.getSeconds()
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }
    if (MM < 10) {
        MM = '0' + MM;
    }
    if (HH < 10) {
        HH = '0' + HH;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    if (ss < 10) {
        ss = '0' + ss;
    }
    var today = dd + "/" + MM + "/" + yyyy + " " + HH + ":" + mm + ":" + ss;

    tableSettings._iDisplayLength = tableSettings.fnRecordsTotal();
    table.draw();
    var header_html = fCarregarHeaderFooter(tableSettings.aoHeader[0]);
    var body_html = fCarregarBody(tableSettings.aoData);
    var footer_html = fCarregarHeaderFooter(tableSettings.aoFooter[0]);

    var table_html =
        "<table>" +
        "   <tr style='font-family:Courier New;font-size: 36px;'>" +
        "       <th bgcolor='f1f1f1' colspan='" + (tableSettings.aoFooter[0].length) + "'>PREFEITURA MUNICIPAL DA SERRA</th>" +
        "   </tr>" +
        "   <tr style='font-family:Courier New;font-size: 26px;'>" +
        "       <th bgcolor='f1f1f1' colspan='" + (tableSettings.aoFooter[0].length) + "'><center>SESA - SECRETARIA DE SAÚDE</center></th>" +
        "   </tr>" +
        "   <tr style='font-family:Courier New;font-size: 26px;'>" +
        "       <th bgcolor='f1f1f1' colspan='" + (tableSettings.aoFooter[0].length) + "'>" + titulo + "</center></th>" +
        "   </tr>" +
        "   <tr>" + header_html + "</tr>" + body_html + "<tr>" + footer_html + "</tr>" +
        "   <tr>" +
        "       <td bgcolor='f1f1f1' colspan='" + tableSettings.aoFooter[0].length + "' style='font-family:Courier New;font-size: 10px;text-align:left;'>" +
        "           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SISTEMA GTI-SESA - " + today +
        "       </td>" +
        "   </tr>" +
        "</table>";
    var a = document.createElement('a');
    if (id == 'bntExpPlan') {
        var data_type = 'data:application/vnd.ms-excel;charset=utf-8,%EF%BB%BF';
        a.href = data_type + ' ' + encodeURI(table_html);
        a.download = 'download.xls';
    };
    if (id == 'bntExpTxt') {
        var data_type = 'data:application/vnd.openxmlformats-officedocument.wordprocessingml.document;charset=utf-8,%EF%BB%BF';
        a.href = data_type + ' ' + encodeURI(table_html);
        a.download = 'download.doc';
    }
    a.click();
    tableSettings._iDisplayLength = 10;
    table.draw();
}