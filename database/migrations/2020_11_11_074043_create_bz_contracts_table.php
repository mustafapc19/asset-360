<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBzcontractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bz_contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Class');
            $table->string('bcId');
            $table->string('apId');
            $table->string('bzContractType');
            $table->string('Description');
            $table->string('Name');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('Term');
            $table->string('primaryParty_BzContactId');
            $table->string('primaryParty_BzOrgId');
            $table->string('counterParty_BzOrgId');
            $table->string('counterParty_BzContactId');
            $table->string('contractValue');
            $table->string('paymentStatus');
            $table->string('Status');
            $table->string('Active');
            $table->string('earnedRevenue');
            $table->string('bzLocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bzcontracts');
    }
}
