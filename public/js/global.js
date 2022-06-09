/* Javascript personalizado que executa no início do carregamento*/
function teste(select) {
  data = select.options[select.selectedIndex].value;
  console.log(data);
}
