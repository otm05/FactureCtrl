<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GestionFacture</title>
    <style>
        body{
    background-color: rgb(205, 214, 214);
    }
    
    #frm1{
    margin-left: 300px;
    }
    #title{
    margin-left: 300px;
    color: #535ba0;
    }
    .MyDG{
    width: 100%;
    }
    .MyDG tr td, .MyDG tr th{
    border-bottom:1px solid rgb(139, 135, 135) ;
    padding: 5px 0;
    text-align: left;
    }
    .MyDG th{text-align: center;}
    .MyDG img{
    width: 80px;
    height: 80px;
    border-radius: 50%;
    }
    .fa-edit{
    color:green;
    font-weight: bold;
    font-size: 20px;
    margin-left: 10px;
    }
    .fa-trash-alt{
    color:red;
    font-weight: bold;
    font-size: 20px;
    margin-right: 10px;
    }
    
    
    .inputChercher{
    border: 1px solid #535ba0;
    width:200px;
    height: 35px;
    }
    
    .componentFRMC{
    user-select: none;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    margin: 5px;
    }
    .componentFRMC *{
    user-select: none;
    margin: 2px 7px;
    }
    .componentFRMC input[type='text'], .componentFRMC select,.componentFRMC input[type='date']{
    user-select: none;
    border: 1px solid #535ba0;
    display: block;
    width: 800px;
    height: 35px;
    } 
    
    .componentFRMC label, .componentFRMC legend{
    user-select: none;
    color : #535ba0;
    font-weight: bold;
    }
    .componentFRMC input[type='submit'], .componentFRMC input[type='Reset']{
    user-select: none;
    background-color : #535ba0;
    font-weight: bold;
    color:rgba(255, 255, 255, 0.877);
    border-radius: 5px;
    width: 800px;
    }
    
    .componentFRMC input[type='Reset']{
    user-select: none;
    background-color : #535ba0;
    }
    
    .componentFRMC select option{
    user-select: none;
    box-shadow: 0 0 10px 100px #1882A8 inset;
    display: inline-block;
    padding-bottom: 7px;
    border-bottom: 1px solid #535ba0;
    background-color:  rgba(170, 218, 180, 0.801);
    
    }
    .componentFRMC fieldset{
    user-select: none;
    margin:5px;
    padding: 5px;
    border:1px dashed  #1882A8 ;
    width: 80%;
    }
    .div_button{
    user-select: none;
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 10px;
    }
    .div_button #btnAdd{
    user-select: none;
    margin-left: 25px;
    
    }
    .div_button #btnVider{
    user-select: none;
    margin-left: 25px;
    }
    
    .div_button #btnDetail{
    user-select: none;
    margin-left: 25px;
    }
    .btnchercher{
    user-select: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    background-color: transparent;
    display: inline-block;
    padding: 8px 20px;
    color: #535ba0;
    border: 2px solid #535ba0;
    transition: all 0.5s;
    width: 120x;
    }
    
    .btnchercher:hover{
    user-select: none;
    color: #fff;
    background-color: rgba(83,91,160,1);
    }
    
    .main-componentFRMC{
    user-select: none;
    display: flex;
    flex-direction: row;
    margin-left: 0px;
    }
    .main-frm{
    margin: 0;
    padding: 0;
    user-select: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    }
    
    .fa-trash-alt{
    color: rgb(224, 58, 80);
    }
    .fa-edit , .fa-clipboard{
    color: darkslategrey;
    }
    
    .fa-trash-alt:hover{
    color: rgb(228, 154, 164);
    }
    .fa-edit:hover , .fa-clipboard:hover{
    color: rgb(135, 182, 182);
    }
    
    .fa-folder-plus{
    
    color: #535ba0;
    }
    .fa-folder-plus:hover{
    
    color: #b2b7e0;
    }
    </style>
</head>
<body>
    <div style="display: none;">
       @foreach ($ed as $it)
       {{$numF1=$it->numF}}
       {{$objet1=$it->objet}}
       {{$dateF1=$it->dateF}}
       {{$client1=$it->client}}
       {{$tauxTva1=$it->tauxTva}}
       {{$prixHt1=$it->prixHt}}
       {{$tva1=$it->tva}}
       {{$prixTtc1=$it->prixTtc}}
       @endforeach
    </div>
    <div class="main">
        <h1 id="title">Gestion Facture : {{$objet1}}</h1>

            <form id="frm1" class="formCreate" method="post" action="saveF">
                @csrf
            <div class="componentFRMC">
                <label>Num Facture: </label>
                <input type='text' name='numF' readonly value="{{$numF1}}">
            </div>

            <div class="componentFRMC">
                <label>objet: </label>
                <input type='text' name='objet' value="{{$objet1}}">
            </div>

            <div class="componentFRMC">
                <label>dateFacture: </label>
                <input type='date' name='dateF' class="dateF" value="{{$dateF1}}">
            </div>
            <div class="componentFRMC">
                <label>client: </label>
                <input type='text' name='client' value="{{$client1}}">
            </div>

            <div class="componentFRMC">
                <label>tauxTva : </label>
                <select name="tauxTva" id="">
                    <option value="0.1">10%</option>
                    <option value="0.2">20%</option>
                    <option value="0.3">30%</option>
                    <option value="0.4">40%</option>
                    <option value="0.5">50%</option>
                </select>
            </div>
            <div class="componentFRMC">
                <label>prixHt : </label>
                <input type='text' name='prixHt' readonly value="{{$prixHt1}}">
            </div>
            <div class="componentFRMC">
                <label>Tva : </label>
                <input type='text' name='tva' readonly value="{{$tva1}}">
            </div>
            <div class="componentFRMC">
                <label>prixTtc : </label>
                <input type='text' name='prixTtc'  readonly value="{{$prixTtc1}}">
            </div>
            <div class="div_button">
                <input class="btnchercher" id="btnAdd" type="submit" value='Save' name='BTN'>
                <input class="btnchercher" id="btnVider" type="reset" value='reset'>
                <a class="btnchercher" id="btnDetail" href="dfact">Detail</a>
            </div>
            
        </form>
    </div>
</body>
</html>