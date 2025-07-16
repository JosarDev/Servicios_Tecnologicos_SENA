
Runner.pages.PageSettings.addPageEvent('cliente',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){function tipoCliente(){var cliente=Runner.getControl(pageid,'TipoCliente');var label=document.querySelectorAll('value_Num_Identificacion_6')
console.log(cliente.getValue(),label.value)}
var cliente=Runner.getControl(pageid,'TipoCliente');cliente.on('change',tipoCliente);tipoCliente();});