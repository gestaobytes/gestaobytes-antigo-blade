<?php

use Illuminate\Database\Seeder;

class Empresas extends Seeder {

    public function run() {
        if (DB::table('empresas')->get()->count() == 0) {
            DB::table('empresas')->insert([
                [
                    'EMPR_CODIGO' => 1,
                    'EMPR_NOMEFANTASIA' => 'Gestão Bytes',
                    'EMPR_RAZAOSOCIAL' => 'Gestão Bytes Softwares e Tecnologia da Informação LTDA',
                    'EMPR_INSCRICAOMUNICIPAL' => '00000000',
                    'EMPR_INSCRICAOESTADUAL' => '00000000',
                    'EMPR_CNPJ' => '33.463.013/0001-56',
                    'EMPR_FONE1' => '(63)3224-1316',
                    'EMPR_FONE2' => '(63)98406-2025',
                    'EMPR_ENDERECO' => '406 Norte, Avenida LO-12, Lote 15, Sala 3',
                    'EMPR_CIDADE' => 'Palmas',
                    'EMPR_UF' => 'TO',
                    'EMPR_CEP' => '77006-460',
                    'EMPR_LOGO' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'EMPR_CODIGO' => 2,
                    'EMPR_NOMEFANTASIA' => 'Volkswagen',
                    'EMPR_RAZAOSOCIAL' => 'Volkswagen do Brasil – LTDA',
                    'EMPR_INSCRICAOMUNICIPAL' => '00000000',
                    'EMPR_INSCRICAOESTADUAL' => '00000000',
                    'EMPR_CNPJ' => '00.000.000/0000-00',
                    'EMPR_FONE1' => '(62)3314-3335',
                    'EMPR_FONE2' => '(62)93314-3335',
                    'EMPR_ENDERECO' => 'Avenida Arco Verde s/n, Lote 22, Quadra 1, Sala 1 Jardim Arco Verde',
                    'EMPR_CIDADE' => 'Anápolis',
                    'EMPR_UF' => 'GO',
                    'EMPR_CEP' => '75105-260',
                    'EMPR_LOGO' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'EMPR_CODIGO' => 3,
                    'EMPR_NOMEFANTASIA' => 'Coca Cola',
                    'EMPR_RAZAOSOCIAL' => 'Coca-Cola do Brasil – LTDA',
                    'EMPR_INSCRICAOMUNICIPAL' => '00000000',
                    'EMPR_INSCRICAOESTADUAL' => '00000000',
                    'EMPR_CNPJ' => '00.000.000/0000-00',
                    'EMPR_FONE1' => '(62)3314-3335',
                    'EMPR_FONE2' => '(62)93314-3335',
                    'EMPR_ENDERECO' => 'Avenida Arco Verde s/n, Lote 22, Quadra 1, Sala 1 Jardim Arco Verde',
                    'EMPR_CIDADE' => 'Anápolis',
                    'EMPR_UF' => 'GO',
                    'EMPR_CEP' => '75105-260',
                    'EMPR_LOGO' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        } else {
            echo "\e[31m Empresas não é uma tabela vazia. Não foi efetuado o Seed.\e";
        }
    }

}
