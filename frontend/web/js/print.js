function ObtenerDocumento(){
    var contenido = $("#Pagina").clone()[0];
    $(contenido).find(".icono").hide();

    //cambiar select por inputs tipo text
    $.each($(contenido).find("select"), function (index, cmb) {
        $(contenido).find(cmb).replaceWith("<input class='form-control' type='text' value='" + $("option:selected", cmb).text() + "'/>");
    });
    //cambiar input tipo date por inputs tipo text
    $.each($(contenido).find(".fecha"), function (index, fech) {
        $(contenido).find(fech).replaceWith("<input class='form-control' type='text' value='" + $(fech).children("input:first").val() + "'/>");
    });
    //cambiar inputs de tipo text a label
    $.each($(contenido).find("input:text"), function (index, inp) {
        $(contenido).find(inp).replaceWith($(inp).val());
    });
    //cambiar text areas a parrafos
    $.each($(contenido).find("textarea"), function (index, txta) {
        $(contenido).find(txta).replaceWith("<p>" + $(txta).val() + "</p>");
    });

    $(contenido).find("input, div, label, table, textarea, select, p").css({'border': '1', 'padding': '0', 'margin-top': '1', 'margin-left': 'auto', 'margin-right': 'auto', 'font-size': '12px'});
    $(contenido).find("img").css({'width': '45'});
    $(contenido).find("label").css({'font-size': '12px', 'font-weight': 'bold'});

    return $(contenido)[0].outerHTML;
}