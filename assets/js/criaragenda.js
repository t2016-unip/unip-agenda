$("#id_sala, #id_horario").change(() => {
    $("#data").html('');
    $("#btnSubmit").prop('disabled', false);
    $("#btnSubmit").html('Selecione os campos');
    let sala = $("#id_sala").val();
    let horario = $("#id_horario").val();
    let curso = $("#id_curso").val();
    if (sala > 0 && horario > 0 && curso > 0) {
        let formData  = new FormData();
        formData.append('id_sala', sala);
        formData.append('id_horario', horario);

        fetch(route('/api/v1/agendas/salas'), {
            method: 'POST',
            body: formData
        })
        .then(data => data.json())
        .then(json => {
            if (json.status) {
                if (json.data.length) {
                    json.data.forEach(dia => inserirOption(dia.text, dia.value));
                    $("#btnSubmit").prop('disabled', false);
                    $("#btnSubmit").html('Realizar');
                    buscarDispositivo();
                }
                else inserirOption('Nenhum dia disponivel');
            }
            else alert("Tente novamente mais tarde");
        });
    } 
    else inserirOption('Preencha todos campos');
});

$("#btnVoltar").click(function (e) { 
    e.preventDefault();
    location.href = route("/agendas");
});

function inserirOption(html, value = 'NULL') {
    $('<option>', {
        value: value,
        html: html
    }).appendTo('#data');
}

$("#data").change(function (e) { 
    buscarDispositivo();
});

function buscarDispositivo() {
    $("#dispositivos").html('');
    let data = $("#data").val();
    let horario = $("#id_horario").val();
    if (data != 'NULL' && horario > 0) {
        let formData  = new FormData();
        formData.append('data', data);
        formData.append('id_horario', horario);

        fetch(route('/api/v1/agendas/dispositivos'), {
            method: 'POST',
            body: formData
        })
        .then(data => data.json())
        .then(json => {
            if (json.status) {
                if (json.data.length) {
                    let trs = ``;
                    json.data.forEach(dispositivo => {
                        trs += inserirDispositivo(dispositivo.value, dispositivo.text);
                    });
                    $("#dispositivos").html(trs);
                }
                else inserirDiv('Nenhum dispositivo disponivel.');
            }
            else alert("Tente novamente mais tarde");
        });
    }
    else inserirDiv('Selecione uma data para visualizar disponíveis.');
}

function inserirDiv(html, classe = 'alert') {
    $('<div>', {
        class: classe,
        html: html
    }).appendTo('#dispositivos')
}

function inserirDispositivo(value, text) {
    return `
        <div class="grid-6 padding-sm">
            <input type="checkbox" class="dispositivo" onclick="seleciona()" value="${value}"> ${text}
        </div>
    `
}

function seleciona() { 
    let dispositivos = [];
    $.map($(".dispositivo"), function (element, key) {
        if ($(element).prop('checked')) {
            dispositivos.push($(element).val());
        }
    });
    $("#iptDispositivos").val(JSON.stringify(dispositivos));
};