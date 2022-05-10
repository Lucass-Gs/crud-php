<?php

?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="./main.css">           
            <title>Registro de clientes</title>
      </head>
      <body>
            <!-- Script para mascarar o input do whatsapp -->
            <script type="text/javascript">
                  function mask(o, f) {
                        setTimeout(function() {
                        var v = mphone(o.value);
                        if (v != o.value) {
                              o.value = v;
                        }
                        }, 1);
                        }
                        
                  function mphone(v) {
                  var r = v.replace(/\D/g, "");
                  r = r.replace(/^0/, "");
                  if (r.length > 10) {
                  r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
                  } else if (r.length > 5) {
                  r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
                  } else if (r.length > 2) {
                  r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
                  } else {
                  r = r.replace(/^(\d*)/, "($1");
                  }
                  return r;
                  }
                 
            </script>              
            <div class="container">
                  <h1> Registro de clientes </h1>
            </div>
            <div class="content">

            
