<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>

<div style="border:1px solid transparent; width: 100%; height: auto; font-weight: bold; font-size: 14px;" >

    <div style="float: right; width: 500px; height: auto; border: 1px solid transparent;" >
       <table>
           <tr>
               <th id="dolar_1" onclick="abas(1);" style="font-size: 12px; cursor: pointer; background: #fff; width: 50px;font-family: proxima-nova,Arial,Helvetica,sans-serif; " >Dólar</th>
               <th id="milho_1" onclick="abas(2);" style="font-size: 12px; cursor: pointer; background: #fff; width: 50px;font-family: proxima-nova,Arial,Helvetica,sans-serif; " >Milho</th>
               <th id="soja_1"  onclick="abas(3);" style="font-size: 12px; cursor: pointer; background: #fff; width: 50px;font-family: proxima-nova,Arial,Helvetica,sans-serif; " >Soja</th>
           </tr>
           <tr>
               <td id="dolar_2" style="font-size: 11px;" >
                   <!-- Widgets NotÃ­cias AgrÃ­colas - www.noticiasagricolas.com.br/widgets -->
                   <script type="text/javascript" src="http://www.noticiasagricolas.com.br/widget/cotacoes.js.php?id=17&fonte=Arial%2C%20Helvetica%2C%20sans-serif&tamanho=10pt&largura=400px&cortexto=333333&corcabecalho=B2C3C6&corlinha=DCE7E9&imagem=false&output=js"></script>
               </td>
               <td id="milho_2" style="font-size: 11px;" >
                   <!-- Widgets NotÃ­cias AgrÃ­colas - www.noticiasagricolas.com.br/widgets -->
                   <script type="text/javascript" src="http://www.noticiasagricolas.com.br/widget/cotacoes.js.php?id=207&fonte=Arial%2C%20Helvetica%2C%20sans-serif&tamanho=10pt&largura=400px&cortexto=333333&corcabecalho=B2C3C6&corlinha=DCE7E9&imagem=false&output=js"></script>
               </td>
               <td id="soja_2" style="font-size: 11px;" >
                   <!-- Widgets NotÃ­cias AgrÃ­colas - www.noticiasagricolas.com.br/widgets -->
                   <script type="text/javascript" src="http://www.noticiasagricolas.com.br/widget/cotacoes.js.php?id=141&fonte=Arial%2C%20Helvetica%2C%20sans-serif&tamanho=10pt&largura=400px&cortexto=333333&corcabecalho=B2C3C6&corlinha=DCE7E9&imagem=false&output=js"></script>
               </td>
           </tr>
       </table>
    </div>

    <div style="float: left; width: 200px; height: auto; border: 1px solid transparent;" >

        <?php
           $date = date('d/m');
           $html = '<ul style=" list-style: none;width: 397px; font-family: proxima-nova,Arial,Helvetica,sans-serif; font-size: 12px; " >';
           $dados = unserialize(file_get_contents("http://frameworks.hgbrasil.com/tempo/hg_tempo.php?cid=BRXX0053")); //Recebe os valores do HG Framework

            foreach($dados['15'] as $row){
                if($row["date"] == $date){
                    $html .= '<li style="float:left; border-bottom:0; padding:2px;width: 111px;height: 25px;text-align: center;" ><img style="width: 100%;" src="http://cesartsi.com/teste/imagemTempo/'.$dados[8].'.png" /></li>
                        <li style="margin-top: 12px;margin-left: -49px;float:left;border-bottom:0; padding:2px;width: 65px;height: 25px;text-align: center;" >'.$row["max"].'°<p style=" margin-top: 1px;">MÁX</p></li>
                        <li style="margin-top: 12px;margin-left: -26px;float:left;border-bottom:0; padding:2px;width: 65px;height: 25px;text-align: center;" >'.$row["min"].'°<p style=" margin-top: 1px;" >MIN</p></li>
                        <br/><br/><p style="margin: 22px 88px;" >Campo Mourão</p>';
                }
            }
            $html .='</ul>';
            echo $html;
        ?>

    </div>

    <script>
        document.getElementById('milho_2').style.visibility ='hidden';
        document.getElementById('soja_2').style.visibility ='hidden';
        //aba dólar
        document.getElementById('dolar_1').style.border= '1px solid #ccc';
        document.getElementById('dolar_1').style.borderRadius= '5px 5px 0px 0px';
        document.getElementById('dolar_1').style.borderBottom= '0px';
        document.getElementById('dolar_1').style.background='#DCE7E9';
        $('.na-cotacoes').css('width','10px');
        $('.na-tabela').css('width','374px');
        $('.na-cotacoes').css('height','105px');

        function abas(id){
            if(id == '1' ){
                esconde_milho();
                esconde_soja();
                //aba dólar
                document.getElementById('dolar_2').style.visibility ='visible';
                document.getElementById('dolar_1').style.border= '1px solid #ccc';
                document.getElementById('dolar_1').style.borderRadius= '5px 5px 0px 0px';
                document.getElementById('dolar_1').style.borderBottom= '0px';
                document.getElementById('dolar_1').style.background='#DCE7E9';
                $('.na-tabela').css('margin-left','0');
                $('.na-cotacoes').css('height','105px');
            }else if(id == '2'){
                esconde_dolar();
                esconde_soja();
                //aba milho
                document.getElementById('milho_2').style.visibility ='visible';
                document.getElementById('milho_1').style.border= '1px solid #ccc';
                document.getElementById('milho_1').style.borderRadius= '5px 5px 0px 0px';
                document.getElementById('milho_1').style.borderBottom= '0px';
                document.getElementById('milho_1').style.background= '#DCE7E9';
                $('.na-tabela').css('margin-left','-57px');
                $('.na-cotacoes').css('width','10px');
                $('.na-cotacoes').css('height','105px');
            }else if(id == '3'){
                esconde_dolar();
                esconde_milho();
                //aba soja
                document.getElementById('soja_2').style.visibility ='visible';
                document.getElementById('soja_1').style.border= '1px solid #ccc';
                document.getElementById('soja_1').style.borderRadius= '5px 5px 0px 0px';
                document.getElementById('soja_1').style.borderBottom= '0px';
                document.getElementById('soja_1').style.background= '#DCE7E9';
                $('.na-tabela').css('margin-left','-107px');
                $('.na-cotacoes').css('width','10px');
            }
        }

        function esconde_dolar(){
            //aba dólar
            document.getElementById('dolar_2').style.visibility ='hidden';
            document.getElementById('dolar_1').style.border= '1px solid transparent';
            document.getElementById('dolar_1').style.borderRadius= '5px 5px 0px 0px';
            document.getElementById('dolar_1').style.borderBottom= '0px';
            document.getElementById('dolar_1').style.background='#ffffff';
        }

        function esconde_milho(){
            //aba milho
            document.getElementById('milho_2').style.visibility ='hidden';
            document.getElementById('milho_1').style.border= '1px solid transparent';
            document.getElementById('milho_1').style.borderRadius= '5px 5px 0px 0px';
            document.getElementById('milho_1').style.borderBottom= '0px';
            document.getElementById('milho_1').style.background= '#ffffff';
        }

        function esconde_soja(){
            //aba milho
            document.getElementById('soja_2').style.visibility ='hidden';
            document.getElementById('soja_1').style.border= '1px solid transparent';
            document.getElementById('soja_1').style.borderRadius= '5px 5px 0px 0px';
            document.getElementById('soja_1').style.borderBottom= '0px';
            document.getElementById('soja_1').style.background= '#ffffff';
        }



    </script>

</div>

<style type="text/css">
    .na-titulo{display:none;}
    .na-cotacoes{margin-left:-1px}
    .na-cotacoes a{display: none;}
    .na-cotacoes {margin-top: -3px;}
</style>