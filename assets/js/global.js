function route(path = '/') {
    let parts = path.split('/');
    path = '';
    parts.forEach((url, key) => {
        if ((parts.length - 1) == key && url > 0) path += `index.php/${url}`;
        else path += `${url}/`;
    });
    return window.location.origin + path;
}

$('#iptProcurar').keyup(function(){
    var val = $(this).val().toLowerCase();

    $("tbody tr").hide();
    
    $("tbody tr").each(function(){
    
    var text = $(this).text().toLowerCase();
    
    if(text.indexOf(val) != -1)
    {
        $(this).show();
    }
    });
});