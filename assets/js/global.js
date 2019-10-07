function route(path = '/') {
    let parts = explode('/',$path);
    path = '';
    parts.forEach((url, key) => {
        if ((parts.length - 1) == key && url > 0) path += `index.php/${url}`;
        else path += `${url}/`;
    });
    window.location.origin + path;
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