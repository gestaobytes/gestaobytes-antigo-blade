<?php

use Illuminate\Database\Seeder;

class Sistema extends Seeder {

    public function run() {
        if (DB::table('configuracoes')->get()->count() == 0) {
            DB::table('configuracoes')->insert([
                [
                    'CONFIG_CODIGO' => 1,
                    'CONFIG_NOMESITE' => 'Gestão Bytes',
                    'CONFIG_LOGOTOPO' => 'logoTopo.png',
                    'CONFIG_LOGORODAPE' => 'logoRodape.png',
                    'CONFIG_FAVICON' => 'favicon.png',
                    'CONFIG_METATITLE' => 'Gestão Bytes',
                    'CONFIG_METADESCRIPTION' => 'Gestão Bytes',
                    'CONFIG_METAKEYWORDS' => 'Gestão Bytes',
                    'CONFIG_URLTERMODEUSO' => 'Gestão Bytes',
                    'CONFIG_CODGOOGLE' => 'Gestão Bytes',
                    'CONFIG_API' => 'Gestão Bytes',
                    'CONFIG_SENHA' => 'Gestão Bytes',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        } else {
            echo "\e[31m Empresas não é uma tabela vazia. Não foi efetuado o Seed.\e";
        }
    }

}
