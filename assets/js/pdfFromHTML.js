
   function generate() {

 
  var existis;

        //constante para armazenar
       img ="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQUAAAAyCAYAAABVns4wAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVBOTVCMzlEQzRBNDExRTlBMDkzRjlGQzZGQUQyM0MwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVBOTVCMzlFQzRBNDExRTlBMDkzRjlGQzZGQUQyM0MwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUE5NUIzOUJDNEE0MTFFOUEwOTNGOUZDNkZBRDIzQzAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUE5NUIzOUNDNEE0MTFFOUEwOTNGOUZDNkZBRDIzQzAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4jNLGSAAAaK0lEQVR42uxd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";

  
//instancia do documento pdf
  var doc = new jsPDF();

//dat3 é uma variavel auxiliar ela que recebe a data já formatada.
var dat3;
//diaSemana é a variavel responsavel por receber o valor do dia da semana que é em inteiro.
var diaSemana;
//semana é um array de string que contem os dias da semana assim que recebido o valor ela retorna a string semana[diaSemana]
var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
//dat1 é responsavel por armazenar o valor da data do input.
var dat1 = document.getElementById('dat').value;
//dat2 é a variavel convertida para data.
var dat2  = new Date(dat1);

//função para formatar no formato dd/mm/yyyy
function dataAtualFormatada(data){
      dia  = data.getDate() + 1;
      diaF = (dia.toString().length == 1) ? '0'+dia : dia;
      mes  = (data.getMonth()+1).toString(); //+1 pois no getMonth Janeiro começa com zero.
      mesF = (mes.length == 1) ? '0'+mes : mes;
      anoF = data.getFullYear();
      diaSemana = (data.getDay());
 
  dat3 = diaF+"/"+mesF+"/"+anoF;
}
console.log(data);
dataAtualFormatada(dat2);

   function getColumns() {
    return [
        {nome_colaborador: "Professor", nome_curso:"Curso",id_bloco:"Bloco", semestre:"Semestre", id_sala:"Sala", horario_inicial:"Horário Inicio",horario_final:"Horário Fim", dispositivos: "dispositivos"  }
    ];
};

var ObjDataOrdenada = data.sort(function(a,b) {
  return a.data < b.data ? -1 : a.data > b.data ? 1 : 0;
});

var objBlocoOrdenado = ObjDataOrdenada.sort(function(a,b) {
  return a.id_bloco < b.id_bloco ? -1 : a.id_bloco > b.id_bloco ? 1 : 0;
});

var filtrado = ObjDataOrdenada.filter(function(obj) { 
  if( dat1 == null || dat1 == ""){
    existis = false;
  }else{
    existis = true;
  return obj.data == dat1;
}

});
// montando o cabeçalho da pagina pdf
var header = function(d) {
  doc.setFontSize(14);
  doc.setTextColor(40);
  doc.setFontStyle('normal');
  doc.text("\n \n Data: "+ dat3 + "                                               "+"Dia da semana: "+semana[diaSemana+1] , d.settings.margin.left, 20,d.setting);
  doc.addImage(img,'PNG',10,10);
 
};

  // Montando a tabela
    doc.autoTable({
    head: getColumns(),
    body: filtrado,  
    didDrawPage: header,
      margin:{
          top:35
      }, 
      halign: 'center',
      columnStyles: {
        0: {cellWidth: 20 },
        1: {cellWidth: 30},
        2: {cellWidth: 15},
        3: {cellWidth: 15},
        4: {cellWidth: 15},
        5: {cellWidth: 15 },
        6: {cellWidth: 15},
        7: {cellWidth: 15},
        8: {cellWidth: 15},
        9: {cellWidth: 15}
        // etc
      },
      theme: 'grid',

      headerStyles: {
        fillColor: [23, 42, 119],
        fontSize: 11
    },

      styles: {
          overflow: 'linebreak'
        
         
        } });
         
  if(existis != false && filtrado.length != 0){
  doc.save(`agendamento-${dat3}.pdf`);
}else{
  alert("Não há registros para essa data.")
}
    }
