<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 2/5/16
 * Time: 9:59 AM
 */

class ConnectionManager
{
    public function connect()
    {
        $nameKey = 'NameOfConnection';

        $dataSync = AtlasBases::find($id_client);

        Config::set('database.connections.' . $nameKey, array(
            'driver'    => 'mysql',
            'host'      => $dataSync->site_db_server,
            'database'  => $dataSync->site_db_base,
            'username'  => $dataSync->site_db_user,
            'password'  => $dataSync->site_db_password,
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
        ));
# And set the new connection to my models

        $imobModel = new ImobImoveis;
        $imobModel->setConnection($nameKey);
    }
}