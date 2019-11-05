<?php

//Código com um bug, não acrescenta o valor do array na função.Udemy unção recursiva, verificar dps!



$hierarquia = array(

    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas',
                    )
                    //Fim Gerente de vendas

                )

            ),
            //Fim Diretor Comercial
            //Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //inicio de gerente de contas a paagr
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        //Inicio de Supervisor
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos',
                            )

                        )
                        //Fim de Supervisor
                    )
                    //Fim de gerente de contas a paagr
                ),
                //Inicio de Gerente de compras
                array(
                    'nome_cargo'=> 'Gerente de Compras',
                    'subordinados'=>array(
                        array(
                            'nome_cargo'=>'Vendedor'
                        )
                    )
                        )
                
            )
            //Fim Diretor Financeiro
        )

    )

);

function exibe($cargos)
{

    $html = "<ul>";

    foreach ($cargos as $cargo) {
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        $html .= "</li>";

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
            
            
        }

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);


