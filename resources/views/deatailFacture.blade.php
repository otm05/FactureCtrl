<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GestionFacture</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <div class="main">   
        <form id="frm1" class="formCreate" method="POST" action="" >
            @csrf
                <div class="componentFRMC"> 
                    <label>Designation : </label>
                    <input type='text' name='designation'>
                </div>

              <div class="main-componentFRMC">

                  <div class="componentFRMC"> 
                        <label>Unité : </label>
                        <input type='text' name='unite'>    
                    </div>

                    <div class="componentFRMC">
                        <label>Qte : </label>
                        <input type='text' id="qte" name='qte' onchange="calculer();">
                    </div>
              </div>
              <br>
              <div class="main-componentFRMC">
                    <div class="componentFRMC">
                        <label>Prix Unite : </label>
                        <input type= 'text' id="prixU" name='prixUnite' onchange="calculer()">
                    </div>

                    <div class="componentFRMC">
                        <label>Prix Total : </label>
                        <input type= 'text' id="prixT" name='prixTotal' style="background-color: #c6c9e6; color:#000;" readonly>
                    </div>
              </div>

                <div class="div_button">
                    <input class="btnchercher" id="btnAdd" type="submit" value='Save' name='BTN'>
                    <input class="btnchercher" id="btnVider" type="reset" value='Reset'>
                    <input class="btnchercher" id="btnEnd" type="submit" value='End' name="BTN">
                </div>
            </form>
            </div>

            <div class="tableDyalna">
            <table class='MyDG'>
            
                <thead><tr>
                <th>Designation</th> 
                <th>Unite</th>
                <th>Prix Unite</th>
                <th>Quantité</th>
                <th>Prix Total</th>
                <th>Action</th>
                </tr></thead>
                <tbody>
                
                
                <tr>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <th>AAA</th>
                <td><a href="#">D</a> | <a href="#" >D</a></td>
                
              </tbody>
            </table>
            
            </div>
            <br><br>
            <hr style="width: 30%;">
            <br><br>
            <div class="main-frm"> 
            <div class="main-componentFRMC">
                    <div class="componentFRMC">
                        <label>Prix HT : </label>
                        <input type= 'text' name='prixHt'style="background-color: #838ac5; color:#fff;" readonly>
                    </div>

                    <div class="componentFRMC">
                        <label>TVA : </label>
                        <input type= 'text' name='tva' style="background-color: #c6c9e6; color:#000;" readonly>
                    </div>

                    <div class="componentFRMC">
                        <label>Prix TTC : </label>
                        <input type= 'text' name='prixTtc' style="background-color: #c6c9e6; color:#000;" readonly>
                    </div>
                  </div>
              </div>

</body>
</html>