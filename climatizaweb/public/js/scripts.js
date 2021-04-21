$(function() {
    $(".btn-form-cep").click(function(e) {
        e.preventDefault();
        let cep = $(".input-cep").val();
        $(".input-cep").blur();
        requisicaoCep(cep);
        status = true;
    });
    $(".informacoes-btn").click(function() {
        $(".informacoes-painel").fadeToggle(200);
    });
});

function requisicaoCep(cep) {
    $(".waiting").fadeIn(200);
    let url = 'https://viacep.com.br/ws/' + cep + '/json';
    $.get(url, function(data) {
        if (data.hasOwnProperty("erro")) {
            erroConsulta(".alert-cep-nao-encontrado");
        } else {
            let cidade = data.localidade;
            let uf = data.uf;
            $(".localidade").fadeIn(600);
            $(".localidade-cidade").text(cidade);
            $(".localidade-uf").text(uf);
            requisicaoIdClimaTempo(cidade, uf);
        }
    }).fail(function() {
        erroConsulta(".alert-erro-consulta");
    });
}

function requisicaoIdClimaTempo(cidade, uf) {
    let url = "https://apiadvisor.climatempo.com.br/api/v1/locale/city?name=" + cidade + "&state=" + uf + "&token=c1cdba8979fd4fb41bf76d03b1d04eb9";
    $.get(url, function(data) {
        let idCidade = data[0].id;
        previsaoDoTempo(idCidade);
        previsaoDaSemana(idCidade);
    }).fail(function() {
        erroConsulta(".alert-erro-consulta");
    });
}

function previsaoDoTempo(id) {
    let urlHoje = "https://apiadvisor.climatempo.com.br/api/v1/weather/locale/" + id + "/current?token=c1cdba8979fd4fb41bf76d03b1d04eb9";
    $.get(urlHoje, atualizarCardTempo);
}

function atualizarCardTempo(data) {
    $(".card-tempo-hoje").text(capturarDataHoje().split("").slice(0, 5).join(""))
    $(".card-tempo-temperatura-temp").text(data.data.temperature + "º");
    $(".card-tempo-condicao").text(data.data.condition);
    $(".card-tempo-caracteristicas-umidade-valor").text(data.data.humidity + " %");
    $(".card-tempo-caracteristicas-sensacao-valor").text(data.data.sensation + " º");
    $(".card-tempo-caracteristicas-vento-valor").text(data.data.wind_velocity + " km/h");
    $(".card-tempo").fadeIn(200);
}

function previsaoDaSemana(id) {
    let hoje = capturarDataHoje();
    let url = "https://apiadvisor.climatempo.com.br/api/v1/forecast/locale/" + id + "/days/15?token=c1cdba8979fd4fb41bf76d03b1d04eb9";
    $.get(url, atualizarCardTempoSemana);
}

function atualizarCardTempoSemana(data) {
    let arrDatas = data.data;
    let arrDatasPrevisao = arrDatas.slice(1, 6);
    let counter = 1;
    $(arrDatasPrevisao).each(function(data) {
        let cardDia = ".semana-dia-" + counter;
        $(cardDia).fadeIn(200);

        let dia = arrDatasPrevisao[data].date_br.slice(0, 5);
        $(cardDia + " .card-tempo-semana-dia-data").text(dia);

        let min = arrDatasPrevisao[data].temperature.min;
        $(cardDia + " .card-tempo-semana-temp-min-val").text(min);

        let max = arrDatasPrevisao[data].temperature.max;
        $(cardDia + " .card-tempo-semana-temp-max-val").text(max);

        counter++;
    });

    $(".waiting").fadeOut(200);
}

function capturarDataHoje() {
    let date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    if (month < 10) {
        month = "0" + month;
    }
    let year = date.getFullYear();
    let fulldate = day + "/" + month + "/" + year;
    return fulldate;
}

function erroConsulta(alerta) {
    $(".waiting").fadeOut(200);
    $(alerta).fadeIn(200);
    setTimeout(function() {
        $(alerta).fadeOut(200);
    }, 5000)
}