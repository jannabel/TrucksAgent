
//         function calcularvalor(){
       
//             var total=0;       
//             var valorinput = $('input[name^="Valor[]"]');       
//             var sum;       
//             for (var i = 0; i < valorinput.length; ++i) {       
//                 try{        
        
//                     if (valorinput[i].value=="") sum = 0;  
//                     else sum =valorinput[i].value;    
//                     total = parseFloat(total) + parseFloat(sum); 
//                 }
      
//                 catch(ex){      
//                 }  
//             }

//   $("#ValorCarga").val(total);

//         }
//         var total=$("#PesoCarga").val();
//         function calcularPeso(){
          
          
//           console.log(total);
//           var valorinput = $('input[name^="Peso[]"]');
//           var sum;
//           for (var i = 0; i < valorinput.length; ++i) {
//           try{  
         
//             if (valorinput[i].value=="") sum = 0;         
//             else sum =valorinput[i].value;         
//             total = parseFloat(total) + parseFloat(sum);        
//          }
//          catch(ex){
//           }
//      }

//      $("#PesoCarga").val(total);

//       }


      function Sumarlavadoras(){
         var lavadora= parseFloat($("#CantLavadoras").val());
         lavadora++;
        $("#CantLavadoras").val(lavadora);

      }

      function Restarlavadoras(){
         var lavadora= parseFloat($("#CantLavadoras").val());
         lavadora--;
        $("#CantLavadoras").val(lavadora);

      }

        function AddRowMachine() {
            Sumarlavadoras();
            function codegenerate() {
                code = "LAV" + Math.floor(Math.random() * ((50000 + 1) - 10000) + 10000);
                var input = document.getElementById("in");
                input.value = code;
                input.id = code;
            }


            document.getElementById("wmtable").insertRow(-1).innerHTML =
                '<tr><td style="width: 188px;"><div class="mb-1 form-group"><input id="in"  name="Codigo[]" value="CODIGO" class="form-control form-control-sm font-sm" type="text" readonly="" style="height: 38px;"></div></td><td class="w-10x"><div class="mb-1 form-group"><input  name="Marca[]" required  class="form-control form-control-sm font-sm" type="text" style="height: 38px;"></div></td><td class="w-10x"><div class="mb-1 form-group"><input  name="Modelo[]" required  class="form-control form-control-sm font-sm" type="text" style="height: 38px;"></div></td><td class="w-10x"><div class="mb-1 form-group"><input  name="Valor[]"  required class="form-control" type="number" style="height: 38px;min-height: 28px;"></div></td><td class="w-10x"><input class="form-control" required  name="Peso[]"  type="number" style="height: 38px;min-height: 28px;"></td><td class="w-10x"><button class="btn btn-danger btn-sm d-block delete-row btn-xs w-100" onclick="DeleteRowMachine(this);" type="button" style="width: 112px;height: 38px;"><i class="fa fa-trash" style="font-size: 16px;"></i></button></td><tr>';
            codegenerate();
        }

        function DeleteRowMachine(btn) {
           // calcularvalor();
            calcularPeso();
            Restarlavadoras();        
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }


      

        function Delete(ID, btn) {
        
            $.ajax({
                type: "POST",
                url: "php/WashingMachine/delete.php",
                cache: false,
                data: {
                    ID
                },
                error: function () {
                    alert("ERROR");
                },
                success: function (response) {
                   
                }
            });
            DeleteRowMachine(btn);

        }
