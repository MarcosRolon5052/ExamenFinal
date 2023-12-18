<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <page_header>
        <table class="table-info" style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 33%">Listado de Instructores</td>
                <td style="text-align: center;    width: 34%">Power_Gym</td>
                <td style="text-align: right;    width: 33%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 50%">MyR</td>
                <td style="text-align: right;    width: 50%">página [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>

    <br><br>
    
    <table style="width: 80%;border: solid 1px #5544DD; border-collapse: collapse" align="center">
        <thead>
            <tr>
                <th style="width: 15%; text-align: left; border: solid 1px #0000B5; background: #0000B5; text-color: #FFFFFF;"><span style="color: #FFFFFF;">CODIGO</span></th>
                <th style="width: 25%; text-align: left; border: solid 1px #0000B5; background: #0000B5; text-color: #FFFFFF;"><span style="color: #FFFFFF;">NOMBRE</span></th>
                <th style="width: 30%; text-align: left; border: solid 1px #0000B5; background: #0000B5; text-color: #FFFFFF;"><span style="color: #FFFFFF;">APELLIDO</span></th>
                <th style="width: 10%; text-align: left; border: solid 1px #0000B5; background: #0000B5; text-color: #FFFFFF;"><span style="color: #FFFFFF;">EMAIL</span></th>

            </tr>
        </thead>
        <tbody>z
                <?php
                foreach ($rows as $row) {
                ?>
                        <tr>
                            <td style="width: 10%; text-align: left; border: solid 1px #0000B5">
                                    <?=$row['idInstructor'] ?>
                            </td>
                            <td style="width: 40%; text-align: left; border: solid 1px #0000B5">
                                    <?=$row['nombre'] ?>
                            </td>
                            <td style="width: 40%; text-align: left; border: solid 1px #0000B5">
                                    <?=$row['apellido'] ?>
                            </td>
                            <td style="width: 40%; text-align: left; border: solid 1px #0000B5">
                                    <?=$row['email'] ?>
                            </td>                            
                        </tr>
                <?php
                }
                ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #0000B5; background: #CCFFCC">Fin del reporte</th>
                <th style="width: 30%; text-align: left; border: solid 1px #0000B5; background: #CCFFCC">Gracias!</th>
            </tr>
        </tfoot> -->
    </table>   
</page>
