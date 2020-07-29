<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from deportes";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<?php while ($r=$query->fetch_array()):?>
    <style>
        /**
* Cafe Oscuro: #2b2727
* Gris Oscuro: #42403f
* Base Naranja: #e95846
* Complemento Azul: #2db3cb
*/

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
        }

        a {
            color: #e95846;
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        body {
            background-color: #2b2727;
            color: #fff;
            font-family: 'Roboto',Arial,Helvetica;
            font-size: 62.5%;
        }

        .clearfix:after {
            content: '';
            clear: both;
            display: block;
            height: 0;
            width: 0;
        }

        /**====================================
        Contenedor Principal y Tabla de Precios
        =======================================*/

        .pricing-wrapper {
            margin: 60px auto 20px;
            width: 960px;
        }

        .pricing-table {
            -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.4);
            -moz-box-shadow: 0 0 15px rgba(0,0,0,0.4);
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
            float: left;
            margin: 0 10px;
            text-align: center;
            width: 300px;
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        .pricing-table:hover {
            -webkit-transform: scale(1.06);
            -moz-transform: scale(1.06);
            -o-transform: scale(1.06);
            transform: scale(1.06);
        }

        .pricing-title{
            background-color: #e95846;
            color: #fff;
            font-size: 2em;
            padding: 20px 0;
            text-shadow: 0 1px 1px rgba(0,0,0,0.4);
            text-transform: uppercase;
        }

        .pricing-table.recommended .pricing-title,.pricing-table.recommended .primary-action { /*<===Color diferente de los 2 titulos===>*/
            background-color: #2db3cb;
        }

        .table-price {
            background-color: #42403f;
            font-size: 3.4em;
            font-weight: 700;
            padding: 20px 0;
            text-shadow: 0 1px 1px rgba(0,0,0,0.4);
        }

        .trable-price sup {
            font-size: 0.4em;
        }

        .pricing-list li{
            background-color: #fff;
            color: #42403f;
        }

        .pricing-list li{
            font-size: 1.4em;
            font-weight: 700;
            padding: 12px 8px;
        }

        .pricing-list li span {
            font-weight: 400;
        }

        .pricing-list li span.unlimited {
            -webkit-border-radius: 38px;
            -moz-border-radius: 38px;
            border-radius: 38px;
            background-color: #e95846;
            color: #fff;
            font-size: 0.9em;
            font-weight: 400;
            padding: 5px 7px;
        }

        .pricing-list li:before {
            content: '\f00c';
            color: #3fab91;
            display: inline-block;
            font-family: 'FontAwesome';
            font-size: 16px;
            position: relative;
            right: 6px;
        }

        .pricing-list li:nth-child(2n){ /*<===Color diferente a los 'li' pares===>*/
            background-color: #f0f0f0;
        }

        .table-buy {
            background-color: #fff;
            padding: 15px;
            overflow: hidden;
            text-align: left;
        }

        .table-buy p {
            color: #2b2727;
            font-size: 2.4em;
            font-weight: 700;
            float: left;
        }

        .table-buy p sup {
            font-size: 0.5em;
        }

        .pricing-table .primary-action {
            background-color: #e95846;
            color: #fff;
            display: inline-block;
            font-size: 1.4em;
            font-weight: 700;
            float: right;
            padding: 12px 16px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-transition: all 0.25 ease;
            -o-transition: all 0.25 ease;
            transition: all 0.25 ease;
            text-shadow: 0 1px 1px rgba(0,0,0,0.4);
        }

        .pricing-table .primary-action:hover {
            background-color: #cf4f3e;
        }

        .pricing-table .recommended:hover {
            background-color: #228799;
        }

        /**========
        Responsive
        ==========*/

        @media only screen and(min-width: 768px;) and (max-width: 959px;) {
            .princing-wrapper {
                width: 768px;
            }

            .princing-table {
                width: 236px;
            }
            .pricing-table li {
                font-size: 1.3em;
            }
        }

        @media only screen and (max-width: 767px;) {
            .princing-wrapper {
                width: 420px;
            }

            .princing-table {
                float: none;
                margin: 0;
                margin-bottom: 20px;
                width: 100%;
            }

        }

        @media only screen and (max-width: 479px;) {
            .princing-wrapper {
                width: 300px;
            }
        }
    </style>
    <div class="pricing-table recommended">
        <h1 class="pricing-title"><?php echo $r["nombre_deporte"]; ?></h1>
        <!-- Lista de Caracteristicas -->
        <ul class="pricing-list">
            <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Lima_2019_logo.png/250px-Lima_2019_logo.png" alt="IMG" class="img1"></li>
            <li><span><?php echo $r["descripcion"]; ?></span></li>
            <li><span><?php echo $r["historia"]; ?></span></li>
        </ul>
    </div>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>











