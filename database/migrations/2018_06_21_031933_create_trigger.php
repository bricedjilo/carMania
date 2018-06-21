<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::unprepared('
        //     CREATE TRIGGER tr_delete_model BEFORE DELETE ON `make` FOR EACH ROW
        //         BEGIN
        //             DELETE FROM `model` WHERE `model`.`make_code` = `old`.`make_code`
        //         END
        // ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::unprepared('DROP TRIGGER `tr_delete_model`');
    }
}
