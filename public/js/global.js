/* Javascript personalizado que executa no início do carregamento*/
function teste(select) {
  var form = select.parentElement;
  var data = new FormData(form);
  // const json = JSON.stringify(Object.fromEntries(data));  
  // console.log(json);
  url = '/user/setadmin'
  fetch(url, {
        method: "POST",
        body: data
        }).then(function (data) {
        console.log('Request success: ', data);
        }).catch(function (error) {
        console.log('Request failure: ', error);
        });
}
